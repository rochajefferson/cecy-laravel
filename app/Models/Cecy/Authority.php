<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Authority extends Model
{
    protected $connection = 'pgsql-cecy';
    use HasFactory;
    protected $fillable = [
        'start_position',
        'end_position'

    ];
    protected $casts = [
        'start_position' => 'date:Y-m-d',  
        'end_position' => 'date:Y-m-d',
    ];
    public function state(){
        return $this->belongsTo(State::class);
    }
    public function status(){
        return $this->belongsTo(Catalogue::class,'status_id');
    }

    public function position(){
        return $this->belongsTo(Catalogue::class,'position_id');
    }
    public function institution(){
        return $this->belongsTo(Institution::class,'type_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'user_id');
    }
    //solo faltan relaciones
}
