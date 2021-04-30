<?php

namespace App\Http\Controllers\Cecy;

use App\Http\Controllers\Controller;

use App\Models\Ignug\Career;
use App\Models\Ignug\Catalogue;
use App\Models\Ignug\SchoolPeriod;
use App\Models\Ignug\Teacher;
use App\Models\Ignug\Classroom;
use App\Models\Cecy\Course;

class CombosController extends Controller
{
  public function show()
  {

    $carrer = Career::get(["id", "name"]);
    $academic_period = Catalogue::where('type', 'academic_period')->get(["id", "name"]);
    $modality = Catalogue::where('type', 'career_modality')->get(["id", "name"]);
    $participant_type = Catalogue::where('type', 'participant_type')->get(["id", "name"]);
    $course_type = Catalogue::where('type', 'course_type')->get(["id", "name"]);
    $day = Catalogue::where('type', 'day')->get(["id", "name"]);
    $start_time = Catalogue::where('type', 'start_time')->get(["id", "name"]);
    $end_time = Catalogue::where('type', 'end_time')->get(["id", "name"]);
    $area = Catalogue::where('type', 'area')->get(["id", "name"]);
    $specialty = Catalogue::where('type', 'specialty')->get(["id", "name"]);
    $workday_type = Catalogue::where('type', 'workday_type')->get(["id", "name"]);
    $paralel = Catalogue::where('type', 'paralel')->get(["id", "name"]);
    $status_cecy = Catalogue::where('type', 'status_cecy')->get(["id", "name"]);
    $teacher = Teacher::with('user')->get();
    $school_period = Catalogue::where('type', 'school_period')->get(["id", "name"]);
    $classroom = Catalogue::where('type', 'classroom')->get(["id", "name"]);
    $courses_existing = Course::get(["id", "name"]);

    $combos = array(
      "career" => $carrer,
      "academic_period" => $academic_period,
      "modality" => $modality,
      "participant_type" => $participant_type,
      "course_type" => $course_type,
      "day" => $day,
      "start_time" => $start_time,
      "end_time" => $end_time,
      "area" => $area,
      "specialty" => $specialty,
      "workday_type" => $workday_type,
      "paralel" => $paralel,
      "status_cecy" => $status_cecy,
      "teacher" => $teacher,
      "school_period" => $school_period,
      "classroom" => $classroom,
      "courses_existing" => $courses_existing
    );

    return $combos;
  }

  public function showData()
  {

    $carrer = Career::get(["id", "name"]);
    $academic_period = Catalogue::where('type', 'academic_period')->get(["id", "name"]);
    $modality = Catalogue::where('type', 'career_modality')->get(["id", "name"]);
    $participant_type = Catalogue::where('type', 'participant_type')->get(["id", "name"]);
    $course_type = Catalogue::where('type', 'course_type')->get(["id", "name"]);
    $day = Catalogue::where('type', 'day')->get(["id", "name"]);
    $start_time = Catalogue::where('type', 'start_time')->get(["id", "name"]);
    $end_time = Catalogue::where('type', 'end_time')->get(["id", "name"]);
    $area = Catalogue::where('type', 'area')->get(["id", "name"]);
    $specialty = Catalogue::where('type', 'specialty')->get(["id", "name"]);
    $workday_type = Catalogue::where('type', 'workday_type')->get(["id", "name"]);
    $paralel = Catalogue::where('type', 'paralel')->get(["id", "name"]);
    $status_cecy = Catalogue::where('type', 'status_cecy')->get(["id", "name"]);
    $teacher = Teacher::with('user')->get();
    $school_period = Catalogue::where('type', 'school_period')->get(["id", "name"]);
    $classroom = Catalogue::where('type', 'classroom')->get(["id", "name"]);
    $courses_existing = Course::get(["id", "name"]);

    $combos_edicion = array(
      "career" => $carrer,
      "academic_period" => $academic_period,
      "modality" => $modality,
      "participant_type" => $participant_type,
      "course_type" => $course_type,
      "day" => $day,
      "start_time" => $start_time,
      "end_time" => $end_time,
      "area" => $area,
      "specialty" => $specialty,
      "workday_type" => $workday_type,
      "paralel" => $paralel,
      "status_cecy" => $status_cecy,
      "teacher" => $teacher,
      "school_period" => $school_period,
      "classroom" => $classroom,
      "courses_existing" => $courses_existing
    );

    return $combos_edicion;
  }

}
