<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktivaTetap extends Model
{
    use HasFactory;
    protected $table = 'aktiva_tetaps';
    protected $primaryKey = 'id_aktiva_tetap';
    protected $fillable = [
        'koperasi_id',
        'tanah',
        'bangunan',
        'kendaraan',
        'inv_perkap',
        'akm_peny',
        'tanah2',
        'bangunan2',
        'kendaraan2',
        'inv_perkap2',
        'akm_peny2',
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
