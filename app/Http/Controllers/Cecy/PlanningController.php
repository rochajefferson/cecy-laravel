<?php

namespace App\Http\Controllers\Cecy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cecy\Planning;
use App\Models\Cecy\Course;

class PlanningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planning = Planning::get();
        return $planning;
    }

    public function create(Request $request)
    {
        $planning = new Planning;

        $planning->capacity = intval($request['capacity']);
        $planning->classroom_id = $request['classroom_id'];
        $planning->code = strtoupper(trim($request['code']));
        $planning->code_certificate = strtoupper(trim($request['code_certificate']));
        $planning->course_id = $request['course_id'];
        $planning->days = $request['days'];
        $planning->develop_day_id = $request['develop_day_id'];
        $planning->end_time_id = $request['end_time_id'];
        $planning->fechaCreacion = $request['fechaCreacion'];
        $planning->fechaFinal = $request['fechaFinal'];
        $planning->fechaFinalizacion = $request['fechaFinalizacion'];
        $planning->fechaInicio = $request['fechaInicio'];
        $planning->instructor_id= $request['instructor_id'];
        $planning->lista_necesidades_planning = trim($request['lista_necesidades_planning']);
        $planning->paralel_id = $request['paralel_id'];
        $planning->record = $request['record'];
        $planning->resumen_planning = $request['resumen_planning'];
        $planning->school_period_id = $request['school_period_id'];
        $planning->start_time_id = $request['start_time_id'];
        $planning->state_certificate = $request['state_certificate'];
        $planning->workday_type_id = $request['workday_type_id'];
        $planning->state = 1;
        $planning->teacher_id = $request['teacher_id'];
        $planning->status_cecy_id = $request['status_cecy_id'];

        $planning->save();

        Course::where('id', $request['course_id'])->update(
            [
                'status'=>2,
                'code' => strtoupper(trim($request['code']))
            ]
        );

        return response()->json([
            'data' => $planning->id,
            'msg' => [
                'summary' => 'success',
                'detail' => 'Planificación Añadida Exitosamente',
                'code' => '200'
            ]], 200);
    }

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
