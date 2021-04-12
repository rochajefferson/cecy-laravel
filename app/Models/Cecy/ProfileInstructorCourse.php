<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProfileInstructorCourse extends Model
{
    protected $connection = 'pgsql-cecy';
    use HasFactory;
    protected $fillable = [
        'required_knowledge',
        'required_experience',
        'required_skills',
    ];
    public function state(){
        return $this->belongsTo(State::class);
    }
    public function course(){
        return $this->belongsTo(Course::class);
    }
    //solo faltan las relaciones
}
