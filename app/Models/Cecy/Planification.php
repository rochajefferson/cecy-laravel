<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Planification extends Model
{
    protected $connection = 'pgsql-cecy';
    use HasFactory;
    protected $fillable = [
        'date',
        'needs',
    ];
    protected $casts = [
        'needs' => 'array',  
        'date' => 'date:Y-m-d',
    ];
    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function schoolPeriod(){
        return $this->belongsTo(SchoolPeriod::class);
    }
    public function state(){
        return $this->belongsTo(State::class);
    }
    public function status(){
        return $this->belongsTo(Catalogue::class,'status_id');
    }

    public function responsible(){
        return $this->belongsTo(Authority::class,'responsible_id');
    }
    //solo faltan relacione
}
