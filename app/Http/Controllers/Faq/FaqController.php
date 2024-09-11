<?php

namespace App\Http\Controllers\Faq;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        $faqs = FAQ::where('status', 1)->orderBy('sort')->get();
        return view('faq.faq',compact('faqs'));
    }
}
