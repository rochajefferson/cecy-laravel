<?php

namespace App\Http\Controllers\Cecy;
use App\Http\Controllers\Controller;

use App\Models\Ignug\Career;
use App\Models\Ignug\Catalogue;
use App\Models\Ignug\State;
use App\Models\Ignug\SchoolPeriod;
use App\Models\Ignug\Teacher;
use App\Models\Ignug\Classroom;
use App\Models\Cecy\Course;
use Illuminate\Support\Facades\DB;

class CombosController extends Controller
{
  public function show(){
    
    $carrer= Career::join('catalogues','careers.modality_id','=','catalogues.id')
    ->get(["careers.name","careers.id","catalogues.name as modality"]);
    
    $academic_period = Catalogue::where('type', 'academic_period')->get();

    $modality= Catalogue::where('type', 'career_modality')->get(["name","code","id"]);
    
    $participant_type=Catalogue::where('type','participant_type')->get(["name","id"]);
    $course_type=Catalogue::where('type','course_type')->get(["name","id"]);
    $day=Catalogue::where('type','day')->get(["name","id"]);
    $start_time=Catalogue::where('type','start_time')->get(["name","id"]);
    $end_time=Catalogue::where('type','end_time')->get(["name","id"]);
    $area=Catalogue::where('type','area')->get(["name","id"]);
    $specialty=Catalogue::where('type','specialty')->get(["name","id"]);
    $WORKDAY_TYPE=Catalogue::where('type','WORKDAY_TYPE')->get(["name","id"]);
    $paralel=Catalogue::where('type','paralel')->get(["name","id"]);
    $status_cecy=Catalogue::where('type','status_cecy')->get(["name","id"]);
    $school_period = SchoolPeriod::get();    
    $classroom = Classroom::get();
    $courses_existing = Course::get(["name","id"]);

    /* $teacher = Teacher::select('teachers.*', 'user.*')
                        ->join('users', 'teacher.user_id', 'users.id')
                        ->get();   */

    $teacher = Teacher::with('user')->get();
          
    $combos=array(
      "career"=>$carrer,
      "academic_period" => $academic_period,
      "modality"=> $modality,
      "participant_type"=> $participant_type,
      "course_type" => $course_type, 
      "day"=> $day,
      "start_time"=> $start_time,
      "end_time"=> $end_time,
      "area"=> $area,
      "specialty" => $specialty,
      "WORKDAY_TYPE" => $WORKDAY_TYPE,
      "paralel" => $paralel,   
      "status_cecy" => $status_cecy, 
      "school_period" => $school_period,
      "classroom" => $classroom,
      "teacher" => $teacher,
      "courses_existing" => $courses_existing
    );
    return $combos;
 }

}