<?php

namespace App\Models\Cecy;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $connection = 'pgsql-cecy';
    
    use HasFactory;

    protected $table = 'participants';

    protected $fillable = 
    [
        'id',
        'user_id',
        'type'
    ];

    protected $guarded = 
    [

    ];
}
