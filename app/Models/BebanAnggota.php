<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BebanAnggota extends Model
{
    use HasFactory;
    protected $table = 'beban_anggotas';
    protected $primaryKey = 'id_beban_anggota';
    protected $fillable = [
        'koperasi_id',
        'simpanan_anggota',
        'simpanan_berjangka_anggota',
        'simpanan_anggota2',
        'simpanan_berjangka_anggota2'
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
