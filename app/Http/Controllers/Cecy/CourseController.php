<?php

namespace App\Http\Controllers\Cecy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Cecy\Course; 
use App\Models\Ignug\Catalogue;
use App\Models\Ignug\Authority;
use App\Models\Ignug\File;

class CourseController extends Controller
{   
    public function index(){
        $course = Course::orderBy('created_at', 'DESC')->where('state',1)->get();
        return $course;
    }

    public function disabled(){
        $course = Course::orderBy('created_at', 'DESC')->where('state',0)->get();
        return $course;
    }

    public function show(Request $request){
        $user = $request['id'];
        $course = Course::orderBy('created_at', 'DESC')
                        ->where('user_id', $user)
                        ->where('state',1)
                        ->get();
        return $course;
    }


    public function edit(Request $request){
        $course_id = $request['id'];
        $course = Course::where('id', $course_id)->get();
        
        /* $course = Course::select('courses.*', 'plannings.*')
                                    ->where('courses.id', $course_id)
                                    ->join('plannings', 'courses.id', 'plannings.course_id')
                                    ->get(); */

        return $course;

    }

    public function createCourse(Request $request){

        $course = new Course;
        $course->name = strtoupper(trim($request['name']));
        $course->code = strtoupper(trim($request['code']));
        $course->free = $request['free'];
        $course->cost = floatval($request['cost']);
        $course->hours_duration = intval($request['hours_duration']);
        $course->capacity = intval($request['capacity']);
        $course->abbreviation = trim($request['abbreviation']);
        $course->place = trim($request['place']);
        $course->resume = trim($request['resume']);
        $course->career_id = $request['career_id'];
        $course->course_period_id = $request['course_period_id'];
        $course->user_id = $request['user_id'];
        $course->username = strtoupper(trim($request['username']));
        $course->course_type_id = $request['course_type'];
        $course->modality_id = $request['modality'];
        $course->participant_type_id = $request['participant_type'];
        $course->list_needs = trim($request['list_needs']);
        $course->photo = $request['photo'];
        $course->area_id = $request['area'];
        $course->specialty_id = $request['specialty'];
        $course->list_requeriments = trim($request['list_requeriments']);
        $course->list_prerequisites = trim($request['list_prerequisites']);
        $course->list_main_topics = trim($request['list_main_topics']);
        $course->list_subtopics = trim($request['list_subtopics']);
        $course->list_cross_topics = trim($request['list_cross_topics']);
        $course->list_evaluations_diagnostic = trim($request['list_evaluations_diagnostic']);
        $course->list_evaluations_process = trim($request['list_evaluations_process']);
        $course->list_evaluations_final = trim($request['list_evaluations_final']);
        $course->practice_hours = intval($request['practice_hours']);
        $course->theory_hours = intval($request['theory_hours']);
        $course->list_bibliographic = trim($request['list_bibliographic']);
        $course->list_facilities = trim($request['list_facilities']);
        $course->list_phase_theore = trim($request['list_phase_theore']);
        $course->list_phase_practical = trim($request['list_phase_practical']);
        $course->observation = trim($request['observation']);
        $course->objective = trim($request['objective']);
        $course->project = trim($request['project']);
        $course->list_required_installing_sources = trim($request['list_required_installing_sources']);
        $course->list_practice_required_resources = trim($request['list_practice_required_resources']);
        $course->list_aimtheory_required_resources = trim($request['list_aimtheory_required_resources']);
        $course->list_learning_teaching_strategy = trim($request['list_learning_teaching_strategy']);
        $course->list_teaching_strategies = trim($request['list_teaching_strategies']);    
        $course->state = 1;
        $course->status = 1;

        $course->save();
        
        Log::debug($course);

        return response()->json([
            'data' => $course->id,
            'msg' => [
                'summary' => 'success',
                'detail' => 'Curso Creado Exitosamente',
                'code' => '200'
            ]], 200);
    }
    
    public function updated(Request $request){
        
        $course = Course::findOrFail($request['id']);
        $course->name = strtoupper(trim($request['name']));
        $course->code = strtoupper(trim($request['code']));
        $course->free = $request['free'];
        $course->cost = floatval($request['cost']);
        $course->hours_duration = intval($request['hours_duration']);
        $course->capacity = intval($request['capacity']);
        $course->abbreviation = trim($request['abbreviation']);
        $course->place = trim($request['place']);
        $course->resume = trim($request['resume']);
        $course->career_id = $request['career_id'];
        $course->course_period_id = $request['course_period_id'];
        $course->user_id = $request['user_id'];
        $course->username = strtoupper(trim($request['username']));
        $course->course_type_id = $request['course_type'];
        $course->modality_id = $request['modality'];
        $course->participant_type_id = $request['participant_type'];
        $course->list_needs = trim($request['list_needs']);
        $course->photo = $request['photo'];
        $course->area_id = $request['area'];
        $course->specialty_id = $request['specialty'];
        $course->list_requeriments = trim($request['list_requeriments']);
        $course->list_prerequisites = trim($request['list_prerequisites']);
        $course->list_main_topics = trim($request['list_main_topics']);
        $course->list_subtopics = trim($request['list_subtopics']);
        $course->list_cross_topics = trim($request['list_cross_topics']);
        $course->list_evaluations_diagnostic = trim($request['list_evaluations_diagnostic']);
        $course->list_evaluations_process = trim($request['list_evaluations_process']);
        $course->list_evaluations_final = trim($request['list_evaluations_final']);
        $course->practice_hours = intval($request['practice_hours']);
        $course->theory_hours = intval($request['theory_hours']);
        $course->list_bibliographic = trim($request['list_bibliographic']);
        $course->list_facilities = trim($request['list_facilities']);
        $course->list_phase_theore = trim($request['list_phase_theore']);
        $course->list_phase_practical = trim($request['list_phase_practical']);
        $course->observation = trim($request['observation']);
        $course->objective = trim($request['objective']);
        $course->project = trim($request['project']);
        $course->list_required_installing_sources = trim($request['list_required_installing_sources']);
        $course->list_practice_required_resources = trim($request['list_practice_required_resources']);
        $course->list_aimtheory_required_resources = trim($request['list_aimtheory_required_resources']);
        $course->list_learning_teaching_strategy = trim($request['list_learning_teaching_strategy']);
        $course->list_teaching_strategies = trim($request['list_teaching_strategies']); 
        $course->state = 1;
        $course->status = 1;

        $course->save();

        return response()->json([
            'data' => $course->id,
            'msg' => [
                'summary' => 'success',
                'detail' => 'Curso Editado Exitosamente',
                'code' => '200'
            ]], 200);
    }

    public function destroy(Request $request){
        $course = Course::findOrFail($request['id']);

        $course->state = 0;
        $course->status = 3;

        $course->save();

        return response()->json([
            'data' => $course,
            'msg' => [
                'summary' => 'success',
                'detail' => 'Curso Eliminado Exitosamente',
                'code' => '200'
            ]], 200);

    }

    public function enabled(Request $request){
        $course = Course::findOrFail($request['id']);

        $course->state = 1;
        $course->status = 1;

        $course->save();

        return response()->json([
            'data' => $course,
            'msg' => [
                'summary' => 'success',
                'detail' => 'Curso Activado Exitosamente',
                'code' => '200'
            ]], 200);

    }
    
}

    


