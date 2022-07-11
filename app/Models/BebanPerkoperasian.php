<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BebanPerkoperasian extends Model
{
    use HasFactory;
    protected $table = 'beban_perkoperasians';
    protected $primaryKey = 'id_beban_perkoperasian';
    protected $fillable = [
        'koperasi_id',
        'beban_pengawas',
        'beban_pembinaan',
        'beban_rapat',
        'beban_pengawas2',
        'beban_pembinaan2',
        'beban_rapat2'
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
