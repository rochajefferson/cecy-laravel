<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Topic extends Model
{
    protected $connection = 'pgsql-cecy';
    use HasFactory;
    protected $fillable = [
        'description'
    ];
    public function state(){
        return $this->belongsTo(State::class);
    }

    public function course(){
        return $this->belongsTo(Course::class);
    }
    public function type(){
        return $this->belongsTo(Catalogue::class,'type_id');
    }
}
