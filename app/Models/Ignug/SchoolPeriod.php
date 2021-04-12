<?php

namespace App\Models\Ignug;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolPeriod extends Model
{
    protected $connection = 'pgsql-ignug';
    
    use HasFactory;

    protected $table = 'school_periods';
}
