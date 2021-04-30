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
        $planning->code = strtoupper(trim($request['code']));
        $planning->course_id = $request['course_id'];  
        $planning->dateCreation = $request['dateCreation']; 
        $planning->list_needs_planning = trim($request['list_needs_planning']);
        $planning->teacher_id = $request['teacher_id'];
        $planning->school_period_id = $request['school_period_id'];
        $planning->state = 2;  

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
    public function edit(Request $request)
    {
        $course_id = $request['id'];
        $planning = Course::select('courses.*', 'plannings.id as planning_id', 'plannings.*' )
                                    ->where('courses.id', $course_id)
                                    ->join('plannings', 'courses.id', 'plannings.course_id')
                                    ->get();
        return $planning;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $planning = Planning::findOrFail($request['planning_id']);
        $planning->code = strtoupper(trim($request['code']));
        $planning->course_id = $request['course_id'];
        $planning->dateCreation = $request['dateCreation'];
        $planning->list_needs_planning = trim($request['list_needs_planning']);
        $planning->teacher_id = $request['teacher_id'];
        $planning->school_period_id = $request['school_period_id'];
        $planning->state = 2;  
        
        $planning->save();

        $course = Course::findOrFail($request['course_id']);

        $course->code = strtoupper(trim($request['code']));
        
        $course->save();

        return response()->json([
            'data' => $planning->id,
            'msg' => [
                'summary' => 'success',
                'detail' => 'Planificación Editada Exitosamente',
                'code' => '200'
            ]], 200);
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
