<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BebanUsaha extends Model
{
    use HasFactory;
    protected $table = 'beban_usahas';
    protected $primaryKey = 'id_beban_usaha';
    protected $fillable = [
        'koperasi_id',
        'biaya_penyisihan',
        'biaya_bunga',
        'honor_karyawan',
        'biaya_perkap',
        'biaya_asuransi',
        'biaya_listrik',
        'biaya_penyusutan',
        'biaya_lain',
        'biaya_pemeliharaan',
        'biaya_promosi',
        'biaya_akomodasi',
        'biaya_transportasi',
        'biaya_administrasi',
        'biaya_pajak',
        'biaya_sewa',
        'biaya_operasional',
        'biaya_penyisihan2',
        'biaya_bunga2',
        'honor_karyawan2',
        'biaya_perkap2',
        'biaya_asuransi2',
        'biaya_listrik2',
        'biaya_penyusutan2',
        'biaya_lain2',
        'biaya_pemeliharaan2',
        'biaya_promosi2',
        'biaya_akomodasi2',
        'biaya_transportasi2',
        'biaya_administrasi2',
        'biaya_pajak2',
        'biaya_sewa2',
        'biaya_operasional2',
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
