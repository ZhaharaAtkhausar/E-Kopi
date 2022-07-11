<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investasi extends Model
{
    use HasFactory;
    protected $table = 'investasis';
    protected $primaryKey = 'id_invjp';
    protected $fillable = [
        'koperasi_id',
        'tabungan_berjangka',
        'surat_berharga_panjang',
        'simpanan_lain',
        'penyertaan_koplain',
        'penyertaan_lemkeulain',
        'inv_jplain',
        'properti_inv',
        'akm_peny_prop',
        'tabungan_berjangka2',
        'surat_berharga_panjang2',
        'simpanan_lain2',
        'penyertaan_koplain2',
        'penyertaan_lemkeulain2',
        'inv_jplain2',
        'properti_inv2',
        'akm_peny_prop2',
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
