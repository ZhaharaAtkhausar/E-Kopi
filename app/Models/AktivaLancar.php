<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktivaLancar extends Model
{
    use HasFactory;
    protected $table = 'aktiva_lancars';
    protected $primaryKey = 'id_aktiva_lancar';
    protected $fillable = [
        'koperasi_id',
        'kas',
        'giro',
        'tabungan',
        'deposito',
        'simpanan_sukarela',
        'simpanan_berjangka_koplain',
        'surat_berharga',
        'piutang_dagang',
        'piutang_anggota',
        'piutang_calon',
        'piutang_koplain',
        'piutang_bunga',
        'piutang_lain',
        'penyisihan_pinjaman',
        'premi_asuransi',
        'perkap_kantor',
        'beban_dimuka',
        'pendapatan_aknditerima',
        'barang_dagang',
        'lainnya',
        'kas2',
        'giro2',
        'tabungan2',
        'deposito2',
        'simpanan_sukarela2',
        'simpanan_berjangka_koplain2',
        'surat_berharga2',
        'piutang_dagang2',
        'piutang_anggota2',
        'piutang_calon2',
        'piutang_koplain2',
        'piutang_bunga2',
        'piutang_lain2',
        'penyisihan_pinjaman2',
        'premi_asuransi2',
        'perkap_kantor2',
        'beban_dimuka2',
        'pendapatan_aknditerima2',
        'barang_dagang2',
        'lainnya2',
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
