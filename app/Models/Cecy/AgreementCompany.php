<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AgreementCompany extends Model
{
    protected $connection = 'pgsql-cecy';
    use HasFactory;
    protected $fillable = [
        'objective',
        'representative',
        'social_reason',
        'date_agreement_signature',
        'expiry_date'
    ];
    protected $casts = [
        'date_agreement_signature' => 'date:Y-m-d',  
        'expiry_date' => 'date:Y-m-d',
    ];
    public function state(){
        return $this->belongsTo(State::class);
    }

    public function agreement(){
        return $this->belongsTo(Agreement::class);
    }
     // faltam las relaciones
}
