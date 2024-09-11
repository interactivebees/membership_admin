<?php

namespace App\Http\Controllers\Membership;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterMembershipCreateRequest;
use App\Models\Membership\Category;
use App\Models\Membership\HospitalBedCategory;
use App\Models\Membership\Register;
use App\Models\Membership\RegisterDetail;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\CcAvenues\PaymentController;
use App\Http\Controllers\Payment\OfflineController;
use App\Models\Membership\Membership;
use App\Models\Membership\MembershipRegCoreDiagService;
use App\Traits\ImageTrait;


class RegisterController extends Controller
{
    use ImageTrait;

    private $payment;
    private $offline;

    public function __construct(PaymentController $payment, OfflineController $offline)
    {
        $this->payment = $payment;
        $this->offline = $offline;
    }

    public function index(Request $request)
    {
        $formType = $request->membership;
        $membershipCategorie = Category::where('id', $formType)->first();
        if ($membershipCategorie->view_page) {
            return view('membership.membership-front.' . $membershipCategorie->view_page);
        } else {
            return view('coming_soon');
        }
    }

    public function payableAmount(Request $request)
    {

        $validator = Validator::make(request()->all(), [
            "hospital_category_id" => 'string|exists:hospital_categories,id|nullable',
            "membership_category_id" => 'required|exists:membership_categories,id',
            'gp_hospital_categories_id' => 'array|exists:hospital_categories,id'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
                'status' => Response::HTTP_BAD_REQUEST,
            ], Response::HTTP_BAD_REQUEST);
        }


        $hospitalBedCategoriesPrice = 0;
        $hospitalBedCategoriesDiscountedPrice = 0;

        if ((isset($request['hospital_category_id']) && $request['hospital_category_id'] != null) || (isset($request['gp_hospital_categories_id']) && $request['gp_hospital_categories_id'] != null)) {
            $ids = [];
            $gp_ids = $request['gp_hospital_categories_id'];
            if ($gp_ids != null) {
                foreach ($gp_ids as $key => $value) {
                    $ids[] = $value;
                }
            }

            $ids[] = $request['hospital_category_id'];

            foreach ($ids as $key => $value) {
                $hospitalBedCategories = HospitalBedCategory::where('id', $value)->first();
                $hospitalBedCategoriesPrice += $hospitalBedCategories['price'];
                $hospitalBedCategoriesDiscountedPrice += $hospitalBedCategories['discounted_price'];
            }
        }
        $membershipCategorie = Category::where('id', $request['membership_category_id'])->first();

        $totalPrice = $membershipCategorie['price'] + $hospitalBedCategoriesPrice;
        $totalDiscount = $membershipCategorie['discounted_price'] + $hospitalBedCategoriesDiscountedPrice;

        $data = [
            'total_price' => $totalPrice,
            'total_discount' => $totalDiscount,
            'payable_amount' => $totalPrice - $totalDiscount,
            'currency_type' => $membershipCategorie['currency_code'],
            'currency_symbol' => $membershipCategorie['currency_symbol']
        ];

        return response()->json([
            'data' => $data,
            'status' => Response::HTTP_OK,
        ], Response::HTTP_OK);
    }
    
    
    public function hospitalEmailEheck(Request $request){
        $check = User::where('email', $request['email'])->first();
        if ($check) {
            return response()->json(['message' => 'Your Email Address Already Registered. Please use another Email Id For registration.','status' => 0]);
        }
        return response()->json(['message' => 'Your Email has been verified','status' => 1]);
    }
    
    public function store(RegisterMembershipCreateRequest $request)
    {
        if ($request['membership_category_id']) {
            $membership_type_id = Category::where('id', $request['membership_category_id'])->first('membership_type_id')->membership_type_id;
        }

        $check = User::where('email', $request['hospital_email'])->first();
        if ($check) {
            return redirect()->back()->with('warning', 'You Email Already Registered.');
        } else {
            $userPost = [
                'name' => $request['organization_name'],
                'email' => $request['hospital_email'],
                'password' => Hash::make($request['hospital_email']),
            ];

            $response = $this->payableAmount($request);
            $jsonContent = $response->getContent();
            $dataArray = json_decode($jsonContent, true);

            $dataPost = [
                'form_type' => $request['form_type'],
                'hospital_type' => $request['hospital_type'],
                'parent_hospital_name' => $request['group_hospital_name'] ?? 'NA',
                'no_of_hospital_in_parent' => $request['no_of_hospital_in_the_group'] ?? 0,
                'organization_name' => $request['organization_name'],
                'numbers_of_beds_in_hospital' => $request['numbers_of_beds_in_hospital'],
                'hospital_email' => $request['hospital_email'],
                'membership_category_id' => $request['membership_category_id'],

                'hospital_address' => json_encode([
                    'street_address' => $request['street_address'] ?? '',
                    'pin_code' => $request['pin_code'] ?? '',
                    'state' => $request['state'] ?? '',
                    'city' => $request['city'] ?? '',
                    'district' => $request['district'] ?? '',
                ]),

                'pan_no' => $request['pan_no'],
                'gst_registration_number' => $request['gst_registration_number'],
                'hospital_mobile' => $request['hospital_mobile'],

                'hospital_social' => json_encode([
                    'hospital_website_link' => $request['hospital_website_link'] ?? '',
                    'hospital_linkedIn_link' => $request['hospital_linkedIn_link'] ?? '',
                    'hospital_facebook_link' => $request['hospital_facebook_link'] ?? '',
                    'hospital_instagram_link' => $request['hospital_instagram_link'] ?? '',
                    'hospital_twitter_link' => $request['hospital_twitter_link'] ?? '',
                ]),

                'hospital_logo' => $request['hospital_logo'],

                'accreditation_category' => $request['accreditation_category'],
                'tier_classification' => $request['tier_classification'],
                'hospital_location' => $request['hospital_location'],
                'core_services_hospital' => json_encode($request['core_services_hospital']),
                'support_services_hospital' => json_encode($request['support_services_hospital']),
                'diagnostic_centre' => $request['diagnostic_centre'],

                'organization_head' => json_encode([
                    'oh_title' => $request['oh_title'] ?? '',
                    'oh_first_name' => $request['oh_first_name'] ?? '',
                    'oh_last_name' => $request['oh_last_name'] ?? '',
                    'oh_designation' => $request['oh_designation'] ?? '',
                    'oh_mobile_no' => $request['oh_mobile_no'] ?? '',
                    'oh_emailID' => $request['oh_emailID'] ?? '',
                    'oh_whatsApp_contact_no' => $request['oh_whatsApp_contact_no'] ?? '',
                ]),
                'contact_person_representing_organization_one' => json_encode([
                    'one_title' => $request['one_title'] ?? '',
                    'one_first_name' => $request['one_first_name'] ?? '',
                    'one_last_name' => $request['one_last_name'] ?? '',
                    'one_designation' => $request['one_designation'] ?? '',
                    'one_mobile_no' => $request['one_mobile_no'] ?? '',
                    'one_emailID' => $request['one_emailID'] ?? '',
                    'one_whatsApp_contact_no' => $request['one_whatsApp_contact_no'] ?? '',
                ]),
                'contact_person_representing_organization_two' => json_encode([
                    'two_title' => $request['two_title'] ?? '',
                    'two_first_name' => $request['two_first_name'] ?? '',
                    'two_last_name' => $request['two_last_name'] ?? '',
                    'two_designation' => $request['two_designation'] ?? '',
                    'two_mobile_no' => $request['two_mobile_no'] ?? '',
                    'two_emailID' => $request['two_emailID'] ?? '',
                    'two_whatsApp_contact_no' => $request['two_whatsApp_contact_no'] ?? '',
                ]),
            ];

            if($request->hasFile('hospital_logo')){
                if($name = $this->verifyAndUpload($request->hospital_logo, 'hospital_images')){
                    $dataPost['hospital_logo'] = $name;
                }
            }


            $gp_hospital_name           = $request['gp_hospital_name'] ?? [];
            $gp_hospital_categories_id  = $request['gp_hospital_categories_id'] ?? [];
            $gp_hospital_email          = $request['gp_hospital_email'] ?? [];
            $gp_hospital_mobile          = $request['gp_hospital_mobile'] ?? [];

            $count = Register::count();
            $membershipCategorie = Category::where('id', $request['membership_category_id'])->first();
            $dataPost['membership_number'] = $membershipCategorie->membership_number_prefix . date("Y") . '/' . str_pad(($count + 1), 4, '0', STR_PAD_LEFT);

            $reg = null;
            DB::transaction(function () use ($dataPost, $userPost, &$reg, $request, $membership_type_id) {
                $user = new User($userPost);
                $user->save();

                $dataPost['user_id'] = $user->id;
                $reg = new Register($dataPost);
                $reg->save();

                $this->membershipUpdate($reg->id, $request['payment_mode'], $membership_type_id, $request['hospital_category_id']);
            });

            if ($reg) {
                $request['membership_register_id'] = $reg->id;

                if ($request['form_type'] == 'diagnostic') {
                    $this->coreServicePost($request);
                }
            }


            if ($gp_hospital_name) {
                foreach ($gp_hospital_name as $key => $data) {
                    if ($data) {

                        $count = Register::count();
                        $membershipCategorie = Category::where('id', $request['membership_category_id'])->first();
                        $membership_number = $membershipCategorie->membership_number_prefix . date("Y") . '/' . str_pad(($count + 1), 4, '0', STR_PAD_LEFT);

                        $userMulti = new User([
                            'name' => $gp_hospital_name[$key],
                            'email' => $gp_hospital_email[$key],
                            'password' => Hash::make($gp_hospital_email[$key]),
                        ]);

                        $userMulti->save();

                        $reg = new Register([
                            'form_type' => $request['form_type'],
                            'hospital_type' => $request['hospital_type'],
                            'user_id' => $userMulti->id,
                            'parent_hospital_name' => $request['group_hospital_name'] ?? 'NA',
                            'organization_name' => $gp_hospital_name[$key],
                            'hospital_category_id' => $gp_hospital_categories_id[$key],
                            'hospital_email' => $gp_hospital_email[$key],
                            'hospital_mobile' => $gp_hospital_mobile[$key],
                            'membership_number' => $membership_number,
                            'membership_category_id' => $request['membership_category_id']
                        ]);
                        $reg->save();

                        $this->membershipUpdate($reg->id, $request['payment_mode'], $membership_type_id, $request['hospital_category_id']);
                    }
                }
            }

            // for payment
            $info = Register::where('id', $reg->id)->with('getLatestMembershipDetail')->first();

            $name = (isset($info->organization_name) && $info->organization_name != null) ? $info->organization_name : ($info->first_name . ' ' . $info->last_name);
            $registers_detail_id = $info->getLatestMembershipDetail->id;
            $email = $info->email;

            $amount = $dataArray['data']['payable_amount'];
            $curreny = $dataArray['data']['currency_type'];

            if ($request['payment_mode'] == 'Offline') {
                return $this->offline->payment($name, $email, $registers_detail_id, $amount, $curreny);
            }
            if ($request['payment_mode'] == 'Online') {
                return $this->payment->initiatePayment($name, $email, $registers_detail_id, $amount, $curreny);
            }
        }
    }

    private function date_extender_by_year($date, $year = 0)
    {
        $date->modify('+' . $year . ' year');
        return $date->format('Y-m-d');
    }

    public function membershipUpdate($id, $payment_mode, $membership_type_id, $hospital_category_id)
    {
        $info = Register::where('id', $id)->first();
        if (!$info) {
            return redirect()->back()->with('warning', 'Wrong Registration No.');
        } else {
            $latestMembership = $this->iskMembershipExpired($info->id);
            $startDate1 = $latestMembership['status'] ? date('Y-m-d') : $latestMembership['end_date'];

            $membershipCategorie = Category::where('id', $info->membership_category_id)->first();
            $postData = [
                'membership_type_id' => $membership_type_id ?? null,
                'membership_register_id' => $info->id,
                's_date' => $startDate1,
                'e_date' => $this->date_extender_by_year(new DateTime($startDate1), $membershipCategorie->validity),
                'payment_mode' => $payment_mode,
                'hospital_category_id' => $hospital_category_id
            ];
            RegisterDetail::create($postData);
        }
    }

    private function iskMembershipExpired($msId)
    {
        $membershipDetail = RegisterDetail::where('membership_register_id', $msId)->latest()->first();
        if ($membershipDetail) {
            $currentDate = new DateTime();
            $expirationDate = new DateTime($membershipDetail->e_date);
            return [
                'status' => $expirationDate < $currentDate ? true : false,
                'end_date' => $membershipDetail->e_date
            ];
        } else {
            return [
                'status' => true,
                'end_date' => date('Y-m-d')
            ];
        }
    }


    public function storeIndividual(Request $request)
    {
        $request->validate([
            "payment_mode" => 'required|in:Online,Offline',
            "profession" => 'string|nullable',
            "title" => 'required',
            "first_name" => 'required',
            "last_name" => 'required',
            "email" => 'required',

            'pan_no' => 'string|nullable',
            'personal_mobile' => 'required',

            'personal_LinkedIn_link' => 'string|nullable',
            'personal_facebook_link' => 'string|nullable',
            'personal_instagram_link' => 'string|nullable',
            'personal_twitter_link' => 'string|nullable',

            'street_address' => 'string|nullable',
            'pin_code' => 'string|nullable',
            'state' => 'string|nullable',
            'city' => 'string|nullable',

            "educational_qualification" => 'string|nullable',
            "other_educational_qualification" => 'string|nullable',

            'organization_name' => 'string|nullable',

            "personal_designation" => 'string|nullable',
            "role" => 'string|nullable',
            "specialization" => 'string|nullable',
            "area_of_interest" => 'string|nullable',
            "working_organization" => 'string|nullable',
            "quality_implementer" => 'string|nullable',
            "testimonial" => 'string|nullable',
        ]);

        if ($request['membership_category_id']) {
            $membership_type_id = Category::where('id', $request['membership_category_id'])->first('membership_type_id')->membership_type_id;
        }
        $check = User::where('email', $request['email'])->first();
        if ($check) {
            return redirect()->back()->with('warning', 'You Email Already Registered.');
        } else {
            $userPost = [
                'name' => $request['title'] . ' ' . $request['first_name'] . ' ' . $request['last_name'],
                'email' => $request['email'],
                'password' => Hash::make($request['email']),
            ];

            $dataPost = [
                'form_type' => $request['form_type'],
                'organization_name' => $request['organization_name'],
                'profession' => $request['profession'],
                'title' => $request['title'],
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],

                'email' => $request['email'],
                'membership_category_id' => $request['membership_category_id'],

                'personal_address' => json_encode([
                    'street_address' => $request['street_address'] ?? '',
                    'pin_code' => $request['pin_code'] ?? '',
                    'state' => $request['state'] ?? '',
                    'city' => $request['city'] ?? '',
                ]),

                'pan_no' => $request['pan_no'],
                'personal_mobile' => $request['personal_mobile'],

                'educational_qualification' => $request['educational_qualification'],
                'other_educational_qualification' => $request['other_educational_qualification'],

                'personal_social' => json_encode([
                    'personal_LinkedIn_link' => $request['personal_LinkedIn_link'] ?? '',
                    'personal_facebook_link' => $request['personal_facebook_link'] ?? '',
                    'personal_instagram_link' => $request['personal_instagram_link'] ?? '',
                    'personal_twitter_link' => $request['personal_twitter_link'] ?? '',
                ]),

                'personal_designation' => $request['personal_designation'],
                'role' => $request['role'],
                'specialization' => $request['specialization'],
                'area_of_interest' => json_encode($request['area_of_interest']),
                'working_organization' => json_encode($request['working_organization']),
                'quality_implementer' => $request['quality_implementer'],
                'testimonial' => $request['testimonial'],
            ];
        }

        if($request->hasFile('official_photo')){
            if($name = $this->verifyAndUpload($request->official_photo, 'individual_images')){
                $dataPost['hospital_logo'] = $name;
            }
        }


        $count = Register::count();
        $membershipCategorie = Category::where('id', $request['membership_category_id'])->first();
        $dataPost['membership_number'] = $membershipCategorie->membership_number_prefix . date("Y") . '/' . str_pad(($count + 1), 4, '0', STR_PAD_LEFT);

        $reg = null;
        DB::transaction(function () use ($dataPost, $userPost, &$reg, $request, $membership_type_id) {
            $user = User::create($userPost);
            $dataPost['user_id'] = $user->id;
            $reg = Register::create($dataPost);
            $this->membershipUpdate($reg->id, $request['payment_mode'], $membership_type_id, $request['hospital_category_id']);
        });
        $info = Register::where('id', $reg->id)->with('getLatestMembershipDetail')->first();

        $name = (isset($info->organization_name) && $info->organization_name != null) ? $info->organization_name : ($info->first_name . ' ' . $info->last_name);
        $registers_detail_id = $info->getLatestMembershipDetail->id;
        $email = $info->email;

        $response = $this->payableAmount($request);
        $jsonContent = $response->getContent();
        $dataArray = json_decode($jsonContent, true);

        $amount = $dataArray['data']['payable_amount'];
        $curreny = $dataArray['data']['currency_type'];


        if ($request['payment_mode'] == 'Offline') {
            return $this->offline->payment($name, $email, $registers_detail_id, $amount, $curreny);
        }
        if ($request['payment_mode'] == 'Online') {
            return $this->payment->initiatePayment($name, $email, $registers_detail_id, $amount, $curreny);
        }
    }


    private function coreServicePost(Request $request)
    {
        $data = $request->all();
        foreach ($data['cs_core_service_name'] as $index => $coreServiceName) {
            $coreService = new MembershipRegCoreDiagService();
            $coreService->membership_register_id = $request['membership_register_id'];
            $coreService->cs_core_service_name = $coreServiceName;
            $coreService->cs_name = $data['cs_name'][$index];
            $coreService->cs_designation = $data['cs_designation'][$index];
            $coreService->cs_email = $data['cs_email'][$index];
            $coreService->cs_mobile = $data['cs_mobile'][$index];
            $coreService->cs_status = $data['cs_status'][$index];
            $coreService->save();
        }

        return response()->json([
            'message' => 'Data stored successfully',
            'status' => Response::HTTP_OK,
        ], Response::HTTP_OK);
    }
}
