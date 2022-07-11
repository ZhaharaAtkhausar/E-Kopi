<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartisipasiAnggota extends Model
{
    use HasFactory;
    protected $table = 'partisipasi_anggotas';
    protected $primaryKey = 'id_partisipasi_anggota';
    protected $fillable = [
        'koperasi_id',
        'jasa_pinjaman',
        'administrasi_anggota',
        'provisi_anggota',
        'pelayanan_lain',
        'penjualan_anggota',
        'jasa_pinjaman2',
        'administrasi_anggota2',
        'provisi_anggota2',
        'pelayanan_lain2',
        'penjualan_anggota2',
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
