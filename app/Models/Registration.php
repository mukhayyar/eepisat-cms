<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'email',
        'no_hp',
        'nrp',
        'jurusan',
        'years',
        'divisi',
        'team_work_engage',
        'goals_and_contribute',
        'achievement',
        'solutions_to_difficult',
        'cv',
        'portfolio',
        'motivation_letter',
        'mbti',
        'mbti_image',
        'owned_device',
        'class_finish_hour',
        'medical_record',
        'parental_consent',
    ];
}
