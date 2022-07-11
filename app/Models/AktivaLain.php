<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktivaLain extends Model
{
    use HasFactory;
    protected $table = 'aktiva_lains';
    protected $primaryKey = 'id_aktiva_lain';
    protected $fillable = [
        'koperasi_id',
        'beban_ditangguhkan',
        'amortisasi_beban',
        'agunan_diambil',
        'beban_praoperasional',
        'amortisasi_biaya',
        'lain',
        'beban_ditangguhkan2',
        'amortisasi_beban2',
        'agunan_diambil2',
        'beban_praoperasional2',
        'amortisasi_biaya2',
        'lain2',
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
