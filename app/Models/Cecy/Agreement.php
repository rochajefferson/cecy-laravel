<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Agreement extends Model
{
    protected $connection = 'pgsql-cecy';
    use HasFactory;
    protected $fillable = [
        'name'
    ]; 
    public function state(){
        return $this->belongsTo(State::class);
    }
    //faltan las relaciones
}
