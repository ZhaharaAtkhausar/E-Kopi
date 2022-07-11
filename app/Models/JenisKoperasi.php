<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKoperasi extends Model
{
    use HasFactory;
    protected $table = "jenis_koperasis";
    protected $fillable = ['jenis_koperasi'];
}
