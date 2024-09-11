<?php

namespace App\Http\Controllers\Membership;

use App\Http\Controllers\Controller;
use App\Models\Membership\Register;
use Illuminate\Http\Request;
use PDF;

class CertificateController extends Controller
{
    public function certificate(){

        $membershipData = Register::with('membershipCategoryget','getLatestMembershipDetail')->where('user_id',Auth()->user()->id)->first();
        $pdf = PDF::loadView('membership.membership-front.membership-certificate',compact('membershipData'));
        return $pdf->download($membershipData->organization_name.'.pdf');
    }
    
    
    
    public function generatePdf(Request $request){
        $data = $request->all();

        if($data['data']['form_type'] == "Abstract Submission"){
            
            $pdf = PDF::loadView('membership.membership-front.cahocon_awards.awardpdf_template',compact('data'))->output();
            
        }else if($data['data']['form_type'] == "Video Submission"){
            
            $pdf = PDF::loadView('membership.membership-front.cahocon_awards.videopdf_template',compact('data'))->output();    
        
        }else if($data['data']['form_type'] == "Research Publication Submission"){
            
            $pdf = PDF::loadView('membership.membership-front.cahocon_awards.researchpdf_template',compact('data'))->output();    
        }else if($data['data']['form_type'] == "Clinical Audit Submission"){
            
            $pdf = PDF::loadView('membership.membership-front.cahocon_awards.clinicalpdf_template',compact('data'))->output();    
        
        }else if($data['data']['form_type'] == "Quality Champion Award" || $data['data']['form_type'] == "Young Achiever Award"){
            $pdf = PDF::loadView('membership.membership-front.cahocon_awards.qualitypdf_template',compact('data'))->output();    
        
        }
      
        
        return base64_encode($pdf);
        
    }
    
    public function generateHospitalPdf(Request $request){
        $data = $request->all();
        $pdf = PDF::loadView('membership.membership-front.cahocon_awards.fire_safety_awards',compact('data'))->output();
        return base64_encode($pdf);
    }
    
    public function generateSakconPdf(Request $request){
        $data = $request->all();
        $pdf = PDF::loadView('membership.membership-front.sakcon_awards.sakcon_abstract',compact('data'))->output();
        return base64_encode($pdf);
    }
    public function generateCahotechpdf(Request $request){
        $data = $request->all();
        $pdf = PDF::loadView('membership.membership-front.cahotech_awards.cahotech_pitchfest',compact('data'))->output();
        return base64_encode($pdf);
    }
    
    
    public function generateInnovationpdf(Request $request) {
        $data = $request->all();
        $pdf = PDF::loadView('membership.membership-front.cahotech_awards.hospital_innovation',compact('data'))->output();
        return base64_encode($pdf);
    }
    
    // public function generateHospitalPdf(Request $request) {
    //     $data = $request->input('data');
    //     $pdf = PDF::loadView('membership.membership-front.cahocon_awards.fire_safety_awards', compact('data'))->output();
    //     return base64_encode($pdf);
    // }
    
    public function generateEnvironementPdf(Request $request){
        $data = $request->all();
        if($data){
              $pdf = PDF::loadView('membership.membership-front.cahocon_awards.environmental_awards',compact('data'))->output();          
        }else{
            return "";
        }
        return base64_encode($pdf);
    }
}
