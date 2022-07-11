<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TataKelola extends Model
{
    use HasFactory;
    protected $table = 'tata_kelolas';
    protected $fillable = [
        'koperasi_id',
        'pk_1a',
        'pk_1b',
        'pk_1c',
        'pk_1d',
        'pk_2a',
        'pk_2b',
        'pk_2c',
        'pk_2d',
        'pk_2e',
        'pk_3a',
        'pk_3b',
        'pk_3c',
        'pk_4a',
        'pk_4b',
        'pk_4c',
        'pk_4d',
        'pk_5a',
        'pk_5b',
        'pk_5c',
        'pk_5d',
        'pk_6a',
        'pk_6b',
        'pk_6c',
        'pk_6d',
        'pk_7a',
        'pk_7b',
        'pk_7c',
        'pk_7d',
        'pk_21a',
        'pk_21b',
        'pk_21c',
        'pk_22a',
        'pk_22b',
        'pk_22c',
        'pk_23a',
        'pk_23b',
        'pk_23c',
        'pk_23d',
        'pk_23e',
        'pk_23f',
        'pk_23g',
        'pk_23h',
        'pk_23i',
        'pk_23j',
        'pk_23k',
        'pk_23l',
        'pk_23m',
        'pk_23n',
        'pk_23o',
        'pk_23p',
        'pk_23q',
        'pk_24a',
        'pk_24b',
        'pk_24c',
        'pk_24d',
        'pk_25a',
        'pk_25b',
        'pk_25c',
        'pk_31a',
        'pk_31b',
        'pk_31c',
        'pk_32a',
        'pk_32b',
        'pk_32c',
        'pk_32d',
        'pk_33a',
        'pk_33b',
        'pk_33c',
        'pk_33d',
        'pk_34a',
        'pk_34b',
        'pk_34c',
        'pk_34d',
        'pk_35a',
        'pk_35b',
        'pk_35c',
        'pk_35d',
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
