<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktivaTidakBerwujud extends Model
{
    use HasFactory;
    protected $table = 'aktiva_tidak_berwujuds';
    protected $primaryKey = 'id_aktiva_tdk_berwujud';
    protected $fillable = [
        'koperasi_id',
        'aktiva_tdk_berwujud',
        'aktiva_tdk_berwujud2',
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
