<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registration extends Model
{
    protected $connection = 'pgsql-cecy';
    use HasFactory;
    protected $fillable = [
        'date_registration',
        'number',
    ];
    public function planification(){
        return $this->belongsTo(Planification::class);
    }
    public function state(){
        return $this->belongsTo(State::class);
    }
    public function type(){
        return $this->belongsTo(Catalogue::class,'type_id');
    }
    public function participant(){
        return $this->belongsTo(Instructor::class,'participant_id');
    }
    //solo faltan las relacione
}
