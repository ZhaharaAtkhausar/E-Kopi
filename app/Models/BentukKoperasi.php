<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BentukKoperasi extends Model
{
    use HasFactory;
    protected $table = 'bentuk_koperasis';
    protected $fillable = ['bentuk_koperasi'];
}
