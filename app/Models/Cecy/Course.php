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
        'id',
        'name',
        'code',
        'free',
        'cost',
        'hours_duration',
        'capacity',
        'abbreviation',
        'place',
        'resume',
        'career_id',
        'course_period_id',
        'user_id',
        'username',
        'course_type_id',
        'modality_id',
        'participant_type_id',
        'list_needs',
        'photo',
        'area_id',
        'specialty_id',
        'list_requeriments',        
        'list_main_topics',
        'list_subtopics',
        'list_cross_topics',
        'list_evaluations_diagnostic',
        'list_evaluations_process',
        'list_evaluations_final',
        'practice_hours',
        'theory_hours',
        'list_bibliographic',
        'list_facilities',
        'list_phase_theore',
        'list_phase_practical', 
        'list_prerequisites',
        'observation', 
        'objective',
        'project',
        'list_required_installing_sources',
        'list_practice_required_resources',
        'list_aimtheory_required_resources',
        'list_learning_teaching_strategy',
        'list_teaching_strategies',
        'state',
        'status',
        'created_at',
        'updated_at'
    ];

    protected $guarded = 
    [

    ];

}
