<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;
    protected $table = 'desas';
    protected $fillable = ['kecamatan_id' , 'nama_desa'];

    public function kecamatan()
    {
        return $this->belongsTo('App\Kecamatan', 'kecamatan_id');
    }

    public function koperasi()
    {
        return $this->hasMany('App\Koperasi');
    }
}
