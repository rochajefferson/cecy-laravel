<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailPlanificaction extends Model
{
    protected $connection = 'pgsql-cecy';
    use HasFactory;
    protected $fillable = [
        'date_start', 
        'date_end',
        'planned_end_date',
        'capacity',
        'workday',
        'paralel',
        'summary',
        'code_certified',
        'state_certified',
    ];
    protected $casts = [  
        'date_start' => 'date:Y-m-d',
        'date_end' => 'date:Y-m-d',
        'planned_end_date' => 'date:Y-m-d',
      ];
      public function detailRegistration(){
        return $this->belongsTo(DetailRegistation::class);
    }
    public function instructor(){
        return $this->belongsTo(Instructor::class);
    }
    public function day(){
        return $this->belongsTo(Catalogue::class,'day_id');
    }
    public function startTime(){
        return $this->belongsTo(Catalogue::class,'start_time_id');
    }
    public function endTime(){
        return $this->belongsTo(Catalogue::class,'end_timne_id');
    }
    public function nroDay(){
        return $this->belongsTo(Catalogue::class,'nro_day');
    }
    public function planification(){
        return $this->belongsTo(Planification::class);
    }
    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }
    public function state(){
        return $this->belongsTo(State::class);
    }
    public function status(){
        return $this->belongsTo(Catalogue::class,'status_id');
    }
    public function classroom(){
        return $this->belongsTo(Classroom::class,'classroom_id');
    }
      //solo faltan relaciones
}
