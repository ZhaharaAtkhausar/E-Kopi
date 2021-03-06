<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $table = 'kecamatans';
    protected $fillable = ['nama_kecamatan'];

    public function koperasi()
    {
        return $this->hasMany('App\Koperasi');
    }

    public function desa()
    {
        return $this->hasMany('App\Desa');
    }
}
