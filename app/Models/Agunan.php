<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agunan extends Model
{
    use HasFactory;
    protected $table = 'agunans';
    protected $primaryKey = 'id_agunan';
    protected $fillable = [
        'koperasi_id',
        'agunan_pkl',
        'agunan_pdr',
        'agunan_macet',
        'agunan_pkl2',
        'agunan_pdr2',
        'agunan_macet2'
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
