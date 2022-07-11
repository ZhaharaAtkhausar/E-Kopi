<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PajakPenghasilan extends Model
{
    use HasFactory;
    protected $table = 'pajak_penghasilans';
    protected $primaryKey = 'id_pajak_penghasilan';
    protected $fillable = [
        'koperasi_id',
        'pajak_penghasilan',
        'pajak_penghasilan2',
    ];

    public function koperasi()
    {
        return $this->belongsTo('App\Koperasi', 'koperasi_id');
    }
}
