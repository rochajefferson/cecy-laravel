<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailRegistration extends Model
{
    protected $connection = 'pgsql-cecy';
    use HasFactory;
    protected $fillable = [
        'final_grade',
        'certificate_withdrawn',
        'observation',
    ];
    protected $casts = [
        'observation' => 'array',  
        'certificate_withdrawn' => 'date:Y-m-d',
      ];
      public function registration(){
        return $this->belongsTo(Registration::class);
    }
    public function state(){
        return $this->belongsTo(State::class);
    }
    public function status(){
        return $this->belongsTo(Catalogue::class,'status_id');
    }
    public function statusCertificate(){
        return $this->belongsTo(Catalogue::class,'status_certificate_id');
    }
      //solo faltan relaciones
}
