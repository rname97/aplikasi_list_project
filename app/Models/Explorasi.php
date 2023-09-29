<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Explorasi extends Model
{
    use HasFactory;

    protected $table = "explorasi";

    protected $filleble = ['explorasiName', 'explorasiDeskripsi','explorasiStatus', 'explorasiImageCover', 'kategori_id'. 'explorasiActivate'];
}
