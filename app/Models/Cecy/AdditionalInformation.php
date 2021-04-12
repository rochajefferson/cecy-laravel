<?php

namespace App\Models\Cecy;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class AdditionalInformation extends Model
{

    protected $connection = 'pgsql-cecy';
    use HasFactory;
    protected $fillable = [
        'company_name',
        'company_address',
        'company_phone',
        'company_activity',
        'company_sponsor',
        'name_contact',
        'works',
        'know_course',
        'course_follow'
    ];
    protected $casts = [
        'know_course' => 'array', 
        'course_follow' => 'array',
    ]; 
    public function state(){
        return $this->belongsTo(State::class);
    }
    public function registration(){
        return $this->belongsTo(Registration::class);
    }
    public function levelInstruction(){
        return $this->belongsTo(Catalogue::class,'level_instruction');
    }
}
