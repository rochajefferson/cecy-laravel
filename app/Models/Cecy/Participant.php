<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Participant extends Model
{
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function person_type()
    {
        return $this->belongsTo(Catalogue::class,'person_type_id');
    }

    public function user()
    {
        return $this->belongsTo(Instructor::class,'person_type_id');
    }
    //solo relaciones
}
