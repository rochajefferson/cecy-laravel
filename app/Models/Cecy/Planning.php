<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    protected $connection = 'pgsql-cecy';
    
    use HasFactory;

    protected $table = 'plannings';

    protected $fillable = 
    [
        "capacity","classroom_id","code","code_certificate","course_id","days","develop_day_id",
        "end_time_id","fechaCreacion","fechaFinal","fechaFinalizacion","fechaInicio","instructor_id",
        "lista_necesidades_planning","paralel_id","record","resumen_planning","school_period_id",
        "start_time_id","state_certificate","status_cecy_id","teacher_id","workday_type_id",'created_at','updated_at'
    ];

    protected $guarded = 
    [

    ];
}
