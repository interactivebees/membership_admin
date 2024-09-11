<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function show($slug){
        $membership = DB::table('membership_type')->where('slug',$slug)->first();
        return view('healthcare-institution-detail',compact('membership'));
    }
}
