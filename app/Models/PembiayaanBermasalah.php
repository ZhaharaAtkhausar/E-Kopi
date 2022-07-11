<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembiayaanBermasalah extends Model
{
    use HasFactory;
    protected $table = 'pembiayaan_bermasalahs';
    protected $primaryKey = 'id_pembiayaan_bermasalah';
    protected $fillable = [
        'koperasi_id',
        'pkl',
        'pdr',
        'macet',
        'pkl2',
        'pdr2',
        'macet2',
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
