<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HutangPendek extends Model
{
    use HasFactory;
    protected $table = 'hutang_pendeks';
    protected $primaryKey = 'id_hutang_pendek';
    protected $fillable = [
        'koperasi_id',
        'tabungan_anggota',
        'tabungan_nonanggota',
        'simpanan_bjkanggota',
        'simpanan_bjkcalon',
        'hutang_bank',
        'hutang_lpdb',
        'hutang_pajak',
        'beban_hrsdibayar',
        'pendapatan_dimuka',
        'hutang_biaya',
        'dana_bagian',
        'titipan_dana',
        'titipan_jaminan',
        'titipan_zakat',
        'hutang_sewa',
        'kewajiban_lain',
        'tabungan_anggota2',
        'tabungan_nonanggota2',
        'simpanan_bjkanggota2',
        'simpanan_bjkcalon2',
        'hutang_bank2',
        'hutang_lpdb2',
        'hutang_pajak2',
        'beban_hrsdibayar2',
        'pendapatan_dimuka2',
        'hutang_biaya2',
        'dana_bagian2',
        'titipan_dana2',
        'titipan_jaminan2',
        'titipan_zakat2',
        'hutang_sewa2',
        'kewajiban_lain2',
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
