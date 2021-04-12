<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Attendance extends Model
{
    protected $connection = 'pgsql-cecy';
    use HasFactory;
    protected $fillable = [
        'duration',
        'date'
    ];
    protected $casts = [
        'date' => 'date:Y-m-d',  
    ];  
    public function type()
    {
        return $this->belongsTo(Catalogue::class,'type_id');
    }
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function detailRegistration(){
        return $this->belongsTo(DetailRegistration::class);
    }//faltan las relaciones
}
