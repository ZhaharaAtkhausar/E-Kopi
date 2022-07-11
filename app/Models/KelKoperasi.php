<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelKoperasi extends Model
{
    use HasFactory;
    protected $table = 'kel_koperasis';
    protected $fillable = ['kel_koperasi'];
}
