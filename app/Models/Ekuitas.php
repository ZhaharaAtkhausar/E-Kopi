<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ekuitas extends Model
{
    use HasFactory;
    protected $table = 'ekuitas';
    protected $primaryKey = 'id_ekuitas';
    protected $fillable = [
        'koperasi_id',
        'simpanan_pokok',
        'simpanan_wajib',
        'modal_penyetaraan',
        'modal_penyertaan',
        'modal_sumbangan',
        'cadangan_umum',
        'cadangan_tujuan',
        'shu_sebelum',
        'shu_berjalan',
        'simpanan_pokok2',
        'simpanan_wajib2',
        'modal_penyetaraan2',
        'modal_penyertaan2',
        'modal_sumbangan2',
        'cadangan_umum2',
        'cadangan_tujuan2',
        'shu_sebelum2',
        'shu_berjalan2',
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
