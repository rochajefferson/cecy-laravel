<?php

namespace App\Http\Controllers\Cecy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cecy\Planning;
use App\Models\Cecy\Course;
use App\Models\Cecy\PlanningDetail;

class PlanningDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plannig_details = PlanningDetail::get();
        return $plannig_details;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $plannig_details = new PlanningDetail;            
        $plannig_details->course_id = $request['course_id'];  
        $plannig_details->planning_id = $request['planning_id'];  
        $plannig_details->capacity = strtoupper(trim($request['capacity']));
        $plannig_details->classroom_id = $request['classroom_id'];  
        $plannig_details->develop_day_id = $request['develop_day_id'];  
        $plannig_details->end_time_id = $request['end_time_id'];  
        $plannig_details->start_time_id = $request['start_time_id'];  
        $plannig_details->paralel_id = $request['paralel_id'];       
        $plannig_details->workday_type_id = $request['workday_type_id']; 
        $plannig_details->instructor_id = $request['instructor_id']; 
        $plannig_details->status_cecy_id = $request['status_cecy_id']; 
        $plannig_details->dateFinal = $request['dateFinal'];
        $plannig_details->dateEnd = $request['dateEnd'];
        $plannig_details->dateStart = $request['dateStart'];
        $plannig_details->code_certificate = trim($request['code_certificate']);
        $plannig_details->state_certificate = trim($request['state_certificate']);
        $plannig_details->resumen_planning = trim($request['resumen_planning']);
        $plannig_details->days = intval($request['days']);
        $plannig_details->save();

        return response()->json([
            'data' => $plannig_details->id,
            'msg' => [
                'summary' => 'success',
                'detail' => 'Detalle Planificación Añadido Exitosamente',
                'code' => '200'
            ]], 200);    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function show(Request $request)
    {
        $curso_id = $request['id'];
        $plannig_details = PlanningDetail::where('course_id',$curso_id)->get();
        return $plannig_details;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // le mandas el php artisan optimize antes de probar porque cambiamos el route
     
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $plannig_details = PlanningDetail::findOrFail($request['id']);    
        $plannig_details->classroom_id = $request['classroom_id'];  
        $plannig_details->develop_day_id = $request['develop_day_id'];  
        $plannig_details->end_time_id = $request['end_time_id'];  
        $plannig_details->start_time_id = $request['start_time_id'];  
        $plannig_details->paralel_id = $request['paralel_id'];       
        $plannig_details->workday_type_id = $request['workday_type_id']; 
        $plannig_details->instructor_id = $request['instructor_id']; 
        $plannig_details->status_cecy_id = $request['status_cecy_id']; 
        $plannig_details->dateFinal = $request['dateFinal'];
        $plannig_details->dateEnd = $request['dateEnd'];
        $plannig_details->dateStart = $request['dateStart'];
        $plannig_details->code_certificate = trim($request['code_certificate']);
        $plannig_details->state_certificate = trim($request['state_certificate']);
        $plannig_details->resumen_planning = trim($request['resumen_planning']);    
              
        $plannig_details->save();

        return response()->json([
            'data' => $plannig_details->id,
            'msg' => [
                'summary' => 'success',
                'detail' => 'Detalle Planificación Editada Exitosamente',
                'code' => '200'
            ]], 200);
    }

    /**
     * Remove the specified resource from storage.
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $plannig_details = PlanningDetail::findOrFail($request['id'])->delete();
        return response()->json([
            'data' => $plannig_details,
            'msg' => [
                'summary' => 'success',
                'detail' => 'Detalle Planificación Eliminado Exitosamente',
                'code' => '200'
            ]], 200);
    }
}
