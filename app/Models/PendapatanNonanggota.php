<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendapatanNonanggota extends Model
{
    use HasFactory;
    protected $table = 'pendapatan_nonanggotas';
    protected $primaryKey = 'id_pendapatan_nonanggota';
    protected $fillable = [
        'koperasi_id',
        'jasa_pinjaman_non',
        'administrasi',
        'provisi',
        'jasa_pelayanan',
        'penjualan',
        'beban_penjualan',
        'jasa_pinjaman_non2',
        'administrasi2',
        'provisi2',
        'jasa_pelayanan2',
        'penjualan2',
        'beban_penjualan2',
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
