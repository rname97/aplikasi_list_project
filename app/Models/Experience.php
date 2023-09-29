<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $table = "experience";

    protected $filleble = [
        'experienceName',
        'experienceCompany',
        'experienceLocation',
        'experienceDeskripsi',
        'experienceStatus',
        'experienceStart',
        'experienceEnd',
        'experienceActivate'
    ];
}
