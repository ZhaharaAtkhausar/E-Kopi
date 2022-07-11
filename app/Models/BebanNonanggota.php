<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BebanNonanggota extends Model
{
    use HasFactory;
    protected $table = 'beban_nonanggotas';
    protected $primaryKey = 'id_beban_nonanggota';
    protected $fillable = [
        'koperasi_id',
        'jasa_simpanan',
        'simpanan_nonberjangka',
        'jasa_hutang_bank',
        'pinjaman_lpdb',
        'modal_penyertaan',
        'pihak_ketiga',
        'jasa_simpanan2',
        'simpanan_nonberjangka2',
        'jasa_hutang_bank2',
        'pinjaman_lpdb2',
        'modal_penyertaan2',
        'pihak_ketiga2',
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
