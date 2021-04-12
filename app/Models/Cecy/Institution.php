<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Institution extends Model
{
    protected $connection = 'pgsql-cecy';
    use HasFactory;
    protected $fillable = [
        'name',
        'slogan',
        'code',
    ];
    public function state(){
        return $this->belongsTo(State::class);
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
    //solo faltan relaciones
}
