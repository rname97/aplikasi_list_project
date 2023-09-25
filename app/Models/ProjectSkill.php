<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectSkill extends Model
{
    protected $table = "project_skill";

    protected $fillable = [
        'project_id', 'skill_id'
    ];
}
