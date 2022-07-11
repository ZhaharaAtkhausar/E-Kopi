<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiayaLain extends Model
{
    use HasFactory;
    protected $table = 'biaya_lains';
    protected $primaryKey = 'id_biaya_lain';
    protected $fillable = [
        'koperasi_id',
        'biaya_lain',
        'biaya_lain2'
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
