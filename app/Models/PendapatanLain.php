<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendapatanLain extends Model
{
    use HasFactory;
    protected $table = 'pendapatan_lains';
    protected $primaryKey = 'id_pendapatan_lain';
    protected $fillable = [
        'koperasi_id',
        'pendapatan_deviden',
        'pendapatan_sewa',
        'pendapatan_lain',
        'pendapatan_deviden2',
        'pendapatan_sewa2',
        'pendapatan_lain2',
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
