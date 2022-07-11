<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilResiko extends Model
{
    use HasFactory;
    protected $table = 'profil_resikos';
    protected $fillable = [
        'koperasi_id',
        'ro_a1',
        'ro_a2',
        'ro_a3',
        'ro_a4',
        'ro_b1',
        'ro_b2',
        'ro_b3',
        'ro_b4',
        'rk_a1',
        'rk_a2',
        'rk_a3',
        'rk_a4',
        'rk_b1',
        'rk_b2',
        'rk_b3',
        'rk_b4',
        'rl_a1',
        'rl_a2',
        'rl_a3',
        'rl_a4',
        'rl_a5',
        'kpmro_a1',
        'kpmro_a2',
        'kpmro_a3',
        'kpmro_a4',
        'kpmro_b1',
        'kpmro_b2',
        'kpmro_b3',
        'kpmro_c1',
        'kpmro_c2',
        'kpmro_c3',
        'kpmro_c4',
        'kpmrk_a1',
        'kpmrk_a2',
        'kpmrk_a3',
        'kpmrk_a4',
        'kpmrk_b1',
        'kpmrk_b2',
        'kpmrk_b3',
        'kpmrk_b4',
        'kpmrk_c1',
        'kpmrk_c2',
        'kpmrk_c3',
        'kpmrk_c4',
        'kpmrl_a1',
        'kpmrl_a2',
        'kpmrl_a3',
        'kpmrl_a4',
        'kpmrl_b1',
        'kpmrl_b2',
        'kpmrl_b3',
        'kpmrl_b4',
        'kpmrl_b5',
        'kpmrl_c1',
        'kpmrl_c2',
        'kpmrl_c3',
        'kpmrl_c4',
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
