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
        "code",
        "course_id",
        "dateCreation",
        "list_needs_planning",
        "school_period_id", 
        "teacher_id",
        'state',
        'created_at',
        'updated_at'
    ];

    protected $guarded = 
    [

    ];
}
