<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedules extends Model
{
    protected $connection = 'pgsql-cecy';
    use HasFactory;
    protected $fillable = [
        'start_time',
        'end_time',
    ];
    public function day(){
        return $this->belongsTo(Catalogue::class,'day_id');
    }
    public function state(){
        return $this->belongsTo(State::class);
    }
    
}
