<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Scheduleable extends Model
{
    protected $connection = 'pgsql-cecy';
    use HasFactory;
    protected $fillable = [
        'scheduleable',
    ];
    public function state(){
        return $this->belongsTo(State::class);
    }
    public function schedule(){
        return $this->belongsTo(Schedule::class);
    }
    public function classroom(){
        return $this->belongsTo(Classroom::class,'classroom_id');
    }
      // modelo por verificar si ese campo es de esa manera, faltan relacioesn
}
