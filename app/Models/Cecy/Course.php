<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $connection = 'pgsql-cecy';
    
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = 
    [
        'id','name','code','free','cost','hours_duration','capacity','place','resume',
        'career_id','course_period_id','user_id','username','course_type_id','modality_id',
        'participant_type_id','lista_necesidades','photo','area_id','specialty_id','lista_requisitos',
        'lista_temas_principales','lista_temas_secundarios','lista_temas_transversales',
        'lista_evaluaciones_diagnosticas','lista_evaluaciones_procesos','lista_evaluaciones_finales',
        'practice_hours','theory_hours','lista_bibliografias','lista_instalaciones','lista_fases_teoricas',
        'lista_fases_practicas', 'lista_prerequisitos','observation', 'state','status','created_at','updated_at'
    ];

    protected $guarded = 
    [

    ];

}
