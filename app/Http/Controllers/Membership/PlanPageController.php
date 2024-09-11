<?php

namespace App\Http\Controllers\Membership;

use App\Http\Controllers\Controller;
use App\Models\Membership\Category;
use App\Models\Membership\HospitalBedCategory;
use App\Models\Membership\Register;
use DateTime;
use Illuminate\Http\Request;

class PlanPageController extends Controller
{
    public function index(){
        $membershipData = Register::with('membershipCategoryget','getLatestTwoMembershipDetail')->where('user_id',Auth()->user()->id)->first();

        // for upgrade Regular to Associate
        $membershiptype = null;
        $membershiptypeCategory = null;
        if($membershipData->membershipCategoryget->type =='Regular'){
            $membershiptype = Category::where('type', '!=', 'Regular')->where('membership_type_id',$membershipData->membershipCategoryget->membership_type_id)->get();
            $membershiptypeCategory = HospitalBedCategory::where('membership_category_id',$membershiptype[0]->id)->orderBy('sort')->get(['id as c_id','name']);
        }
        // for upgrade Regular to Associate END

        $membershipCategory = HospitalBedCategory::where('membership_category_id',$membershipData->membership_category_id)->orderBy('sort')->get(['id as c_id','name']);

        $days = $this->calculateSubscribedPlanDaysPercentageCompleted(
            $membershipData->getLatestTwoMembershipDetail[0]->s_date,
            $membershipData->getLatestTwoMembershipDetail[0]->e_date,
            $membershipData->getLatestTwoMembershipDetail[1]->s_date ?? null,
        );
        return view('membership.membership-backend.user-membership',compact('days','membershipData','membershipCategory','membershiptype','membershiptypeCategory'));
    }


    private function calculateSubscribedPlanDaysPercentageCompleted($start_date_str,$end_date_str,$last_start_date = null){
        $start_date = new DateTime($start_date_str);
        $end_date = new DateTime($end_date_str);
        $today_date = new DateTime();

        if ($start_date > $today_date) {
            $last_start_date = new DateTime($last_start_date);

            $intervalFromToday = $today_date->diff($start_date);
            $interval = $start_date->diff($end_date);

            $total_days = $interval->days + $intervalFromToday->days;

            $days_elapsed = $last_start_date->diff($today_date)->days;


            $percentage_completed = ($days_elapsed / $total_days) * 100;
            $percentage_completed = round($percentage_completed, 2);
            $remaining_days = $total_days - $days_elapsed;
            return [
                'total_days' => $total_days,
                'days_elapsed' => $days_elapsed,
                'remaining_days' => $remaining_days,
                'percentage_completed' => $percentage_completed
            ];
        }else{
            $interval = $start_date->diff($end_date);
            $total_days = $interval->days;
            $days_elapsed = $start_date->diff($today_date)->days;
            $percentage_completed = ($days_elapsed / $total_days) * 100;
            $percentage_completed = round($percentage_completed, 2);
            $remaining_days = $total_days - $days_elapsed;
            return [
                'total_days' => $total_days,
                'days_elapsed' => $days_elapsed,
                'remaining_days' => $remaining_days,
                'percentage_completed' => $percentage_completed
            ];
        }
    }
}
