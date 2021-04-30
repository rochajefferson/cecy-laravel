<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanningDetail extends Model
{
    protected $connection = 'pgsql-cecy';
    
    use HasFactory;

    protected $table = 'plannig_details';

    protected $fillable = 
    [
        "capacity",
        "classroom_id",
        "code_certificate",
        "days",
        "develop_day_id",
        "end_time_id",
        "course_id",
        "planning_id",
        "dateFinal",
        "dateEnd",
        "dateStart",
        "instructor_id",
        "paralel_id",
        "resumen_planning",
        "start_time_id",
        "state_certificate",
        "status_cecy_id",
        "workday_type_id",
        'created_at',
        'updated_at'
    ];

    protected $guarded = 
    [

    ];
}
