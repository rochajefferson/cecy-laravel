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
        $course = Course::get();
        return $course;
    }

    public function show(Request $request){
        $user = $request['id'];
        $course = Course::where('user_id', $user)->get();
        return $course;
    }

    public function edit(Request $request){
        $course_id = $request['id'];
        $course = Course::where('id', $course_id)->get();
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
        $course->place = trim($request['name']);
        $course->resume = trim($request['resume']);
        $course->career_id = $request['career'];
        $course->course_period_id = $request['course_period'];
        $course->user_id = $request['user_id'];
        $course->username = strtoupper(trim($request['username']));
        $course->course_type_id = $request['course_type'];
        $course->modality_id = $request['modality'];
        $course->participant_type_id = $request['participant_type'];
        $course->lista_necesidades = trim($request['lista_necesidades']);
        $course->photo = $request['photo'];
        $course->area_id = $request['area'];
        $course->specialty_id = $request['specialty'];
        $course->lista_requisitos = trim($request['lista_requisitos']);
        $course->lista_prerequisitos = trim($request['lista_prerequisitos']);
        $course->lista_temas_principales = trim($request['lista_temas_principales']);
        $course->lista_temas_secundarios = trim($request['lista_temas_secundarios']);
        $course->lista_temas_transversales = trim($request['lista_temas_transversales']);
        $course->lista_evaluaciones_diagnosticas = trim($request['lista_evaluaciones_diagnosticas']);
        $course->lista_evaluaciones_procesos = trim($request['lista_evaluaciones_procesos']);
        $course->lista_evaluaciones_finales = trim($request['lista_evaluaciones_finales']);
        $course->practice_hours = intval($request['practice_hours']);
        $course->theory_hours = intval($request['theory_hours']);
        $course->bibliographys = trim($request['bibliographys']);
        $course->lista_instalaciones = trim($request['lista_instalaciones']);
        $course->lista_fases_teoricas = trim($request['lista_fases_teoricas']);
        $course->lista_fases_practicas = trim($request['lista_fases_practicas']);
        $course->observation = trim($request['observation']);
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
        $course->place = trim($request['name']);
        $course->resume = trim($request['resume']);
        $course->career_id = $request['career'];
        $course->course_period_id = $request['course_period'];
        $course->user_id = $request['user_id'];
        $course->username = strtoupper(trim($request['username']));
        $course->course_type_id = $request['course_type'];
        $course->modality_id = $request['modality'];
        $course->participant_type_id = $request['participant_type'];
        $course->lista_necesidades = trim($request['lista_necesidades']);
        $course->photo = $request['photo'];
        $course->area_id = $request['area'];
        $course->specialty_id = $request['specialty'];
        $course->lista_requisitos = trim($request['lista_requisitos']);
        $course->lista_temas_principales = trim($request['lista_temas_principales']);
        $course->lista_temas_secundarios = trim($request['lista_temas_secundarios']);
        $course->lista_temas_transversales = trim($request['lista_temas_transversales']);
        $course->lista_evaluaciones_diagnosticas = trim($request['lista_evaluaciones_diagnosticas']);
        $course->lista_evaluaciones_procesos = trim($request['lista_evaluaciones_procesos']);
        $course->lista_evaluaciones_finales = trim($request['lista_evaluaciones_finales']);
        $course->practice_hours = intval($request['practice_hours']);
        $course->theory_hours = intval($request['theory_hours']);
        $course->bibliographys = trim($request['bibliographys']);
        $course->lista_instalaciones = trim($request['lista_instalaciones']);
        $course->lista_fases_teoricas = trim($request['lista_fases_teoricas']);
        $course->lista_fases_practicas = trim($request['lista_fases_practicas']);
        $course->observation = trim($request['observation']);
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

    public function destroy($id){
        $course = Course::findOrFail($id);
        $course->delete();
        //$course->save(); hacer un save con la condicion de status 1 activo 2 inactivo
        return ['message' => 'curso eliminado'];

    }



}

    


