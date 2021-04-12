<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlanificationInstructor extends Model
{
    public function state(){
        return $this->belongsTo(State::class);
    }

    public function planification(){
        return $this->belongsTo(Planification::class);
    }
    //solo relaciones
}
