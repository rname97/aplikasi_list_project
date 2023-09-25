<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // use HasFactory;

    protected $table = "projects";

    protected $filleble = ['projectName', 'projectDeskripsi','projectStatus', 'projectStart', 'projectEnd', 'projectImageCover', 'kategori_id'. 'projectActivate'];
}
