<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership\Register;
use App\Models\Leads\Media;
use App\Models\Leads\Training\Category;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $membershipData = Register::with('membershipCategoryget','getLatestMembershipDetail')->where('user_id',Auth()->user()->id)->first();
        $medias = Media::latest()->take(10)->get();

        $data = [
            "onsite" => $this->getCategoriesByType(1),
            "online" => $this->getCategoriesByType(2),
            "self-paced" => $this->getCategoriesByType(3),
        ];
        return view('membership.membership-backend.membership-dashboard',compact('membershipData','medias','data'));
    }

    private function getCategoriesByType($catgType) {
        return Category::select('*')
            ->with(['program'])
            ->where('status', 1)
            ->where('catg_type', $catgType)
            ->whereHas('program', function ($query) use ($catgType) {
                $query->whereNotNull('id')->whereColumn('program_mode', '=', 'categories.catg_type')->whereNotIn('id',[565]);
            })

            ->orderBy('ordering1', 'asc')
            ->get();
    }
}
