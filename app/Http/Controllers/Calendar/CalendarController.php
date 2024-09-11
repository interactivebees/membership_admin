<?php

namespace App\Http\Controllers\Calendar;

use App\Http\Controllers\Controller;
use App\Models\Leads\CdeRegistration;
use App\Models\Leads\Event;
use App\Models\Leads\Training\Category;
use App\Models\Leads\Training\Program;
use App\Models\Leads\Series;
use App\Models\Leads\Webinar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CalendarController extends Controller
{
    private function data(){
        $results = [];
        $records0 = Category::with(['calenderprograms' => function ($query) {
            $query->where('status', 1)
                  ->where('program_mode', 1);
        }])
        ->where(function ($query) {
            $query->where('status', 1)
                  ->whereIn('catg_type', [1, 2, 3])
                  ->orWhere('self_paced', 1);
        })
        ->get();
        
        // All Training Programs
        // $records0 = (DB::table('cahoitbk_leads' . '.categories as c')
        //     ->join('cahoitbk_leads' . ".programs as p", 'p.cat_id', '=', 'c.cat_slug')
        //             ->select('c.*', 'p.id as pId', 'p.venueaddress', 'p.title', 'p.program_startdate', 'p.program_enddate')
        //             ->where('c.status', 1)
        //             ->where('p.status', 1)
        //             ->where('p.program_mode', 1)
        //             ->whereIn('c.catg_type', [1,2,3])
        //             ->orWhere('c.self_paced', '=', 1)
        //             ->get());
        // $records0 = DB::table(env('DB_DATABASE_LEADS').'.categories as c')
        //         ->join(env('DB_DATABASE_LEADS').'.programs as p', 'p.cat_id', '=', 'c.cat_slug')
        //         ->select('c.*', 'p.id as pId', 'p.venueaddress', 'p.title', 'p.program_startdate', 'p.program_enddate')
        //         ->where('c.status', 1)
        //         ->where('p.status', 1)
        //         ->where('p.program_mode', 1)
        //         ->whereIn('c.catg_type', [1, 2, 3])
        //         ->orWhere('c.self_paced', '=', 1)
        //         ->get();
                        
        foreach($records0 as $record){
            $data = [
                'title'  =>$record->title,
                'groupId'=> $record->pId,
                'url'    => $record->venueaddress,
                'start'  => date("Y-m-d",strtotime($record->program_startdate)),
                'end'    => date("Y-m-d",strtotime($record->program_enddate)),
                'description'=> $record->venueaddress,
                'form_url' => $record->pId != null ? url('/programform/'.$record->pId.'/'.Str::slug($record->title)) : 'https://www.caho.in/training-program',
            ];
            array_push($results,$data);
        }
        // ['Masterclass Series','Continuing Quality Education Series','Research Initiatives','International Programs']
        $records1 = Series::where('status', 1)->whereIn('type', [1,2,3,4]);
        foreach($records1->get() as $record){
            if($record->type == 1){
                    $url = "https://www.caho.in/masterclassform/".$record->series_no;
                }elseif($record->type == 2){
                    $url = 'https://www.caho.in/CQE-registration/'.$record->series_no;
                }elseif($record->type == 3){
                    $url = (json_decode($record->extra_data,true))['form_id'] != null ? 'https://www.caho.in/programform/'.(json_decode($record->extra_data,true))['form_id'].'/'.Str::slug($record->title) : 'https://www.caho.in/research-programs';
                }elseif($record->type == 4){
                    $url = (json_decode($record->extra_data,true))['form_id'];      // done
                }
            $data = [
                'title'  =>$record->title,
                'groupId'=> 999,
                'url'    => (json_decode($record->extra_data,true))['location'],
                'start'  =>  date("Y-m-d",strtotime((json_decode($record->extra_data,true))['date_label'])),
                'description'=> (json_decode($record->extra_data,true))['location'],
                'form_url' => $url
            ];
            array_push($results,$data);
        }

        // All Events
        $records2 = Event::where('status','1');
        foreach($records2->get() as $record){
            if(isset($record->register_link) && $record->register_link!=''){
                    $url =  url($record->register_link);
                }elseif(isset($record->regformstatus) && $record->regformstatus!='0'){
                    $url =  'https://www.caho.in/programform/531/health-hr-conclave';
                }else{
                    $url = 'https://www.caho.in/events';
                }

            $data = [
                'title'  =>$record->title,
                'groupId'=> 999,
                'url'    => null,
                'start'  =>  $record->start_date,
                'description'=> null,  // must look into database
                'form_url' => $url
            ];
            array_push($results,$data);
        }

        // All Cde Registration
        $records3 = CdeRegistration::where('status',1);
        foreach($records3->get() as $record){
            $data = [
                'title'  =>$record->series_title,
                'groupId'=> 999,
                'url'    => $record->location,
                'start'  => date("Y-m-d",strtotime($record->date_label)),
                'end'    => $record->end_date,
                'description'=> $record->location,
                'form_url' => 'https://www.caho.in/cde-series'
            ];
            array_push($results,$data);
        }

        // All Webinar
        $records4 = Webinar::where('status','=','1');
        foreach($records4->get() as $record){
            $data = [
                'title'  =>$record->title,
                'groupId'=> 999,
                'start'  => date("Y-m-d",strtotime($record->webinar_date)),
                'description'=> "Virtual",
                'form_url' => $record->register_link != null ? $record->register_link : 'https://www.caho.in/webinars',
            ];
            array_push($results,$data);
        }
        return $results;
    }

    private function createDateRangeArray($strDateFrom,$strDateTo){
        $aryRange = [];

        $iDateFrom = mktime(1, 0, 0, substr($strDateFrom, 5, 2), substr($strDateFrom, 8, 2), substr($strDateFrom, 0, 4));
        $iDateTo = mktime(1, 0, 0, substr($strDateTo, 5, 2), substr($strDateTo, 8, 2), substr($strDateTo, 0, 4));

        if ($iDateTo >= $iDateFrom) {
            array_push($aryRange, date('Y-m-d', $iDateFrom)); // first entry
            while ($iDateFrom<$iDateTo) {
                $iDateFrom += 86400; // add 24 hours
                array_push($aryRange, date('Y-m-d', $iDateFrom));
            }
        }
        return $aryRange;
    }

    public function index(Request $request){
        $events = json_encode($this->data());
        return view('calendar.index',compact('events'));
    }

    public function ajexDateFilterRequest(Request $request){
        $date_req = date("Y-m-d", strtotime($request->clickedDate));
        $results = $this->data();

        $results2 = [];
        foreach($results as $event){
            if(isset($event['end'])){
                if(in_array($date_req,$this->createDateRangeArray($event['start'], $event['end']))){
                    array_push($results2,$event);
                }
            }elseif($event['start'] == $date_req){
                array_push($results2,$event);
            }
        }

        return json_encode($results2);
    }
}
