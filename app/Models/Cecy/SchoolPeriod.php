<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SchoolPeriod extends Model
{
    protected $connection = 'pgsql-cecy';
    use HasFactory;
    protected $fillable = [
        'code',
        'name',
        'start_date',
        'end_date',
        'ordinary_start_date',
        'ordinary_end_date',
        'extraordinary_start_date',
        'extraordinary_end_date',
        'especial_start_date',
        'especial_end_date',
    ];
    protected $casts = [
        'start_date' => 'date:Y-m-d',
        'end_date' => 'date:Y-m-d',
        'ordinary_start_date' => 'date:Y-m-d',
        'ordinary_end_date' => 'date:Y-m-d',
        'extraordinary_start_date' => 'date:Y-m-d',
        'extraordinary_end_date' => 'date:Y-m-d',
        'especial_start_date' => 'date:Y-m-d',
        'especial_end_date' => 'date:Y-m-d',

    ];
    public function state(){
        return $this->belongsTo(State::class);
    }
    //solo faltan relacione
}
