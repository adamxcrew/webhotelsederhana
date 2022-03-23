<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasUmum extends Model
{
    use HasFactory;

    protected $table = 'fasilitas_umums';
    protected $guarded = ['id'];
}
