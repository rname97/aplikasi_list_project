<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExplorasiImage extends Model
{
    protected $table = "explorasi_images";

    protected $fillable = [
        'explorasi_id', 'explorasiImage'
    ];
}
