<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koperasi extends Model
{
    use HasFactory;
    protected $table = 'koperasis';
    protected $fillable = ['nik', 'nama', 'no_badan_hukum', 'tgl_badan_hukum', 'telp', 'data_tahun_buku', 'alamat', 'kabupaten', 'provinsi', 'ketua', 'telp_ketua', 'sekretaris', 'telp_sekretaris', 'bendahara', 'telp_bendahara', 'anggota_pria', 'anggota_wanita', 'anggota_total', 'rat', 'modal_sendiri', 'modal_luar', 'asset', 'volume_usaha', 'modal_total', 'shu', 'keaktifan', 'desa_id', 'kecamatan_id', 'jenis_id', 'bentuk_id', 'kel_id', 'sektor_id'];

    public function kecamatan()
    {
        return $this->belongsTo('App\Kecamatan', 'kecamatan_id');
    }

    public function desa()
    {
        return $this->belongsTo('App\Desa', 'desa_id');
    }

    public function tatakelola()
    {
        return $this->hasOne('App\TataKelola');
    }

    public function profilresiko()
    {
        return $this->hasOne('App\ProfilResiko');
    }

    public function aktivalancar()
    {
        return $this->hasOne('App\AktivaLancar');
    }

    public function investasi()
    {
        return $this->hasOne('App\Investasi');
    }

    public function aktivatetap()
    {
        return $this->hasOne('App\AktivaTetap');
    }

    public function aktivatidakberwujud()
    {
        return $this->hasOne('App\AktivaTidakBerwujud');
    }

    public function hutangpendek()
    {
        return $this->hasOne('App\HutangPendek');
    }

    public function hutangpanjang()
    {
        return $this->hasOne('App\HutangPanjang');
    }

    public function ekuitas()
    {
        return $this->hasOne('App\Ekuitas');
    }

    public function partisipasianggota()
    {
        return $this->hasOne('App\PartisipasiAnggota');
    }

    public function pendapatannonanggota()
    {
        return $this->hasOne('App\PendapatanNonanggota');
    }

    public function bebananggota()
    {
        return $this->hasOne('App\BebanAnggota');
    }

    public function bebannonanggota()
    {
        return $this->hasOne('App\BebanNonanggota');
    }

    public function bebanusaha()
    {
        return $this->hasOne('App\BebanUsaha');
    }

    public function bebanperkoperasian()
    {
        return $this->hasOne('App\BebanPerkoperasian');
    }

    public function pendapatanlain()
    {
        return $this->hasOne('App\PendapatanLain');
    }

    public function biayalain()
    {
        return $this->hasOne('App\BiayaLain');
    }

    public function pajakpenghasilan()
    {
        return $this->hasOne('App\PajakPenghasilan');
    }

    public function pembiayaanbermasalah()
    {
        return $this->hasOne('App\PembiayaanBermasalah');
    }

    public function agunan()
    {
        return $this->hasOne('App\Agunan');
    }
}
