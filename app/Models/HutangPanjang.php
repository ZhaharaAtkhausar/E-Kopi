<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HutangPanjang extends Model
{
    use HasFactory;
    protected $table = 'hutang_panjangs';
    protected $primaryKey = 'id_hutang_panjang';
    protected $fillable = [
        'koperasi_id',
        'hutang_bank_panjang',
        'hutang_koplain',
        'pasiva',
        'simpanan_berjangka',
        'titipan_dana_panjang',
        'hutang_lpdb_panjang',
        'hutang_sewa_panjang',
        'hutang_lain',
        'hutang_bank_panjang2',
        'hutang_koplain2',
        'pasiva2',
        'simpanan_berjangka2',
        'titipan_dana_panjang2',
        'hutang_lpdb_panjang2',
        'hutang_sewa_panjang2',
        'hutang_lain2'
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
