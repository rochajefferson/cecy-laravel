<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prerequisite extends Model
{
    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }
    //solo relaciones
}
