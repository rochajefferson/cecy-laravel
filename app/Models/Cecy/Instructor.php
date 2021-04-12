<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Instructor extends Model
{
    public function state(){
        return $this->belongsTo(State::class);
    }
    public function status(){
        return $this->belongsTo(Catalogue::class,'status_id');
    }
    public function users()
    {
        return $this->belongsToMany(User::class,'user_id');
    }

    public function responsible(){
        return $this->belongsTo(Authority::class,'responsible_id');
    }
    ///solo tiene relaciones
}


