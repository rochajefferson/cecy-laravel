<?php

namespace App\Http\Controllers\Cecy;

use App\Http\Controllers\Controller;
use App\Models\Authentication\User;
use App\Models\Cecy\Participant;
use App\Models\Cecy\Teacher;
use App\Models\Ignug\Catalogue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = User::where('identification', '=', $request->identificacion)->get();
        Log::debug($user);
        return response()->json([
            'data' => $user,
            'msg' => [
                'summary' => 'success',
                'detail' => 'Planificación Editada Exitosamente',
                'code' => '200'
            ]], 200);

    }

   
    public function load()
    {
        $identification_type = Catalogue::where('type', 'IDENTIFICATION_TYPE')->get(["id", "name"]);
        $ethnic_origin = Catalogue::where('type', 'ETHNIC_ORIGIN_TYPE')->get(["id", "name"]);
        $blood_type = Catalogue::where('type', 'BLOOD_TYPE')->get(["id", "name"]);
        $sex = Catalogue::where('type', 'SEX_TYPE')->get(["id", "name"]);
        $gender = Catalogue::where('type', 'GENDER_TYPE')->get(["id", "name"]);
        $combos_participants = array(
            "identification_type" => $identification_type,
            "ethnic_origin" => $ethnic_origin,
            "blood_type" => $blood_type,
            "sex" => $sex,
            "gender" => $gender,
          );
      
        return $combos_participants;
    }

    public function store(Request $request)
    {

        Log::debug($request);

        $user = new User;

        $user->ethnic_origin_id = $request['ethnic_origin_id'];
        $user->address_id = 1;
        $user->identification_type_id = $request['identification_type_id'];
        $user->sex_id = $request['sex_id'];
        $user->gender_id = $request['gender_id'];
        $user->username = strtoupper(trim($request['username']));
        $user->identification = $request['identification'];
        $user->first_name = strtoupper(trim($request['first_name']));
        $user->second_name = strtoupper(trim($request['second_name']));
        $user->first_lastname = strtoupper(trim($request['first_lastname']));
        $user->second_lastname = strtoupper(trim($request['second_lastname']));
        $user->personal_email = $request['personal_email'];
        $user->birthdate = $request['birthdate'];
        $user->blood_type_id = $request['blood_type_id'];
        $user->email = $request['email'];
        $user->state_id = 1;
        $user->status_id = 1;
        $user->attempts = 3;
        $user->password = bcrypt($request['identification']);
        $user->save();
        
        if($request['participant_type'] == "PROFESOR"){

            $teacher = new Teacher();
            $teacher->user_id = $user->id;
            $teacher->type = 'EXTERNO';
            $teacher->save();

        } else if($request['participant_type'] == "ESTUDIANTE"){

            $participant = new Participant();
            $participant->user_id = $user->id;
            $participant->type = 'EXTERNO';
            $participant->save();

        }
    
        return response()->json([
            'data' => '',
            'msg' => [
                'summary' => 'success',
                'detail' => 'Participante Creado Exitosamente',
                'code' => '200'
            ]], 200);


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
