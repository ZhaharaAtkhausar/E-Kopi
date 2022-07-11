<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Koperasi;
use App\Models\TataKelola;
use App\Models\BiayaLain;
use App\Models\ProfilResiko;
use App\Models\AktivaLancar;
use App\Models\Investasi;
use App\Models\AktivaTetap;
use App\Models\AktivaTidakBerwujud;
use App\Models\AktivaLain;
use App\Models\HutangPendek;
use App\Models\HutangPanjang;
use App\Models\Ekuitas;
use App\Models\PartisipasiAnggota;
use App\Models\PendapatanNonanggota;
use App\Models\BebanAnggota;
use App\Models\BebanNonanggota;
use App\Models\BebanUsaha;
use App\Models\BebanPerkoperasian;
use App\Models\PendapatanLain;
use App\Models\PajakPenghasilan;
use App\Models\PembiayaanBermasalah;
use App\Models\Agunan;

class InputController extends Controller
{
    public function input(Request $request)
    {
        $koperasi = new Koperasi();
            $koperasi->nik              = $request->nik;
            $koperasi->nama             = $request->nama;
            $koperasi->jenis            = $request->jenis;
            $koperasi->no_badan_hukum   = $request->no_badan_hukum;
            $koperasi->telp             = $request->telp;
            $koperasi->email            = $request->email;
            $koperasi->data_tahun_buku  = $request->data_tahun_buku;
            $koperasi->almt_terakhir    = $request->almt_terakhir;
            $koperasi->almt_akta        = $request->almt_akta;
            $koperasi->save();

        $tataKelola = new TataKelola();
            $tataKelola->koperasi_id    = $koperasi->id;
            $tataKelola->pk_1a = $request->pk_1a;
            $tataKelola->pk_1b = $request->pk_1b;
            $tataKelola->pk_1c = $request->pk_1c;
            $tataKelola->pk_1d = $request->pk_1d;
            $tataKelola->pk_2a = $request->pk_2a;
            $tataKelola->pk_2b = $request->pk_2b;
            $tataKelola->pk_2c = $request->pk_2c;
            $tataKelola->pk_2d = $request->pk_2d;
            $tataKelola->pk_2e = $request->pk_2e;
            $tataKelola->pk_3a = $request->pk_3a;
            $tataKelola->pk_3b = $request->pk_3b;
            $tataKelola->pk_3c = $request->pk_3c;
            $tataKelola->pk_4a = $request->pk_4a;
            $tataKelola->pk_4b = $request->pk_4b;
            $tataKelola->pk_4c = $request->pk_4c;
            $tataKelola->pk_4d = $request->pk_4d;
            $tataKelola->pk_5a = $request->pk_5a;
            $tataKelola->pk_5b = $request->pk_5b;
            $tataKelola->pk_5c = $request->pk_5c;
            $tataKelola->pk_5d = $request->pk_5d;
            $tataKelola->pk_6a = $request->pk_6a;
            $tataKelola->pk_6b = $request->pk_6b;
            $tataKelola->pk_6c = $request->pk_6c;
            $tataKelola->pk_6d = $request->pk_6d;
            $tataKelola->pk_7a = $request->pk_7a;
            $tataKelola->pk_7b = $request->pk_7b;
            $tataKelola->pk_7c = $request->pk_7c;
            $tataKelola->pk_7d = $request->pk_7d;
            $tataKelola->pk_21a = $request->pk_21a;
            $tataKelola->pk_21b = $request->pk_21b;
            $tataKelola->pk_21c = $request->pk_21c;
            $tataKelola->pk_22a = $request->pk_22a;
            $tataKelola->pk_22b = $request->pk_22b;
            $tataKelola->pk_22c = $request->pk_22c;
            $tataKelola->pk_23a = $request->pk_23a;
            $tataKelola->pk_23b = $request->pk_23b;
            $tataKelola->pk_23c = $request->pk_23c;
            $tataKelola->pk_23d = $request->pk_23d;
            $tataKelola->pk_23e = $request->pk_23e;
            $tataKelola->pk_23f = $request->pk_23f;
            $tataKelola->pk_23g = $request->pk_23g;
            $tataKelola->pk_23h = $request->pk_23h;
            $tataKelola->pk_23i = $request->pk_23i;
            $tataKelola->pk_23j = $request->pk_23j;
            $tataKelola->pk_23k = $request->pk_23k;
            $tataKelola->pk_23l = $request->pk_23l;
            $tataKelola->pk_23m = $request->pk_23m;
            $tataKelola->pk_23n = $request->pk_23n;
            $tataKelola->pk_23o = $request->pk_23o;
            $tataKelola->pk_23p = $request->pk_23p;
            $tataKelola->pk_23q = $request->pk_23q;
            $tataKelola->pk_24a = $request->pk_24a;
            $tataKelola->pk_24b = $request->pk_24b;
            $tataKelola->pk_24c = $request->pk_24c;
            $tataKelola->pk_24d = $request->pk_24d;
            $tataKelola->pk_25a = $request->pk_25a;
            $tataKelola->pk_25b = $request->pk_25b;
            $tataKelola->pk_25c = $request->pk_25c;
            $tataKelola->pk_31a = $request->pk_31a;
            $tataKelola->pk_31b = $request->pk_31b;
            $tataKelola->pk_31c = $request->pk_31c;
            $tataKelola->pk_32a = $request->pk_32a;
            $tataKelola->pk_32b = $request->pk_32b;
            $tataKelola->pk_32c = $request->pk_32c;
            $tataKelola->pk_32d = $request->pk_32d;
            $tataKelola->pk_33a = $request->pk_33a;
            $tataKelola->pk_33b = $request->pk_33b;
            $tataKelola->pk_33c = $request->pk_33c;
            $tataKelola->pk_33d = $request->pk_33d;
            $tataKelola->pk_34a = $request->pk_34a;
            $tataKelola->pk_34b = $request->pk_34b;
            $tataKelola->pk_34c = $request->pk_34c;
            $tataKelola->pk_34d = $request->pk_34d;
            $tataKelola->pk_35a = $request->pk_35a;
            $tataKelola->pk_35b = $request->pk_35b;
            $tataKelola->pk_35c = $request->pk_35c;
            $tataKelola->pk_35d = $request->pk_35d;
            $tataKelola->save();

        $profilResiko = new ProfilResiko();
            $profilResiko->koperasi_id  = $koperasi->id;
            $profilResiko->ro_a1 = $request->ro_a1;
            $profilResiko->ro_a2 = $request->ro_a2;
            $profilResiko->ro_a3 = $request->ro_a3;
            $profilResiko->ro_a4 = $request->ro_a4;
            $profilResiko->ro_b1 = $request->ro_b1;
            $profilResiko->ro_b2 = $request->ro_b2;
            $profilResiko->ro_b3 = $request->ro_b3;
            $profilResiko->ro_b4 = $request->ro_b4;
            $profilResiko->rk_a1 = $request->rk_a1;
            $profilResiko->rk_a2 = $request->rk_a2;
            $profilResiko->rk_a3 = $request->rk_a3;
            $profilResiko->rk_a4 = $request->rk_a4;
            $profilResiko->rk_b1 = $request->rk_b1;
            $profilResiko->rk_b2 = $request->rk_b2;
            $profilResiko->rk_b3 = $request->rk_b3;
            $profilResiko->rk_b4 = $request->rk_b4;
            $profilResiko->rl_a1 = $request->rl_a1;
            $profilResiko->rl_a2 = $request->rl_a2;
            $profilResiko->rl_a3 = $request->rl_a3;
            $profilResiko->rl_a4 = $request->rl_a4;
            $profilResiko->rl_a5 = $request->rl_a5;
            $profilResiko->kpmro_a1 = $request->kpmro_a1;
            $profilResiko->kpmro_a2 = $request->kpmro_a2;
            $profilResiko->kpmro_a3 = $request->kpmro_a3;
            $profilResiko->kpmro_a4 = $request->kpmro_a4;
            $profilResiko->kpmro_b1 = $request->kpmro_b1;
            $profilResiko->kpmro_b2 = $request->kpmro_b2;
            $profilResiko->kpmro_b3 = $request->kpmro_b3;
            $profilResiko->kpmro_c1 = $request->kpmro_c1;
            $profilResiko->kpmro_c2 = $request->kpmro_c2;
            $profilResiko->kpmro_c3 = $request->kpmro_c3;
            $profilResiko->kpmro_c4 = $request->kpmro_c4;
            $profilResiko->kpmrk_a1 = $request->kpmrk_a1;
            $profilResiko->kpmrk_a2 = $request->kpmrk_a2;
            $profilResiko->kpmrk_a3 = $request->kpmrk_a3;
            $profilResiko->kpmrk_a4 = $request->kpmrk_a4;
            $profilResiko->kpmrk_b1 = $request->kpmrk_b1;
            $profilResiko->kpmrk_b2 = $request->kpmrk_b2;
            $profilResiko->kpmrk_b3 = $request->kpmrk_b3;
            $profilResiko->kpmrk_b4 = $request->kpmrk_b4;
            $profilResiko->kpmrk_c1 = $request->kpmrk_c1;
            $profilResiko->kpmrk_c2 = $request->kpmrk_c2;
            $profilResiko->kpmrk_c3 = $request->kpmrk_c3;
            $profilResiko->kpmrk_c4 = $request->kpmrk_c4;
            $profilResiko->kpmrl_a1 = $request->kpmrl_a1;
            $profilResiko->kpmrl_a2 = $request->kpmrl_a2;
            $profilResiko->kpmrl_a3 = $request->kpmrl_a3;
            $profilResiko->kpmrl_a4 = $request->kpmrl_a4;
            $profilResiko->kpmrl_b1 = $request->kpmrl_b1;
            $profilResiko->kpmrl_b2 = $request->kpmrl_b2;
            $profilResiko->kpmrl_b3 = $request->kpmrl_b3;
            $profilResiko->kpmrl_b4 = $request->kpmrl_b4;
            $profilResiko->kpmrl_b5 = $request->kpmrl_b5;
            $profilResiko->kpmrl_c1 = $request->kpmrl_c1;
            $profilResiko->kpmrl_c2 = $request->kpmrl_c2;
            $profilResiko->kpmrl_c3 = $request->kpmrl_c3;
            $profilResiko->kpmrl_c4 = $request->kpmrl_c4;
            $profilResiko->save();

        $aktivaLancar = new AktivaLancar();
            $aktivaLancar->koperasi_id = $koperasi->id;
            $aktivaLancar->kas = $request->kas;
            $aktivaLancar->giro = $request->giro;
            $aktivaLancar->tabungan = $request->tabungan;
            $aktivaLancar->deposito = $request->deposito;
            $aktivaLancar->simpanan_sukarela = $request->simpanan_sukarela;
            $aktivaLancar->simpanan_berjangka = $request->simpanan_berjangka;
            $aktivaLancar->surat_berharga = $request->surat_berharga;
            $aktivaLancar->piutang_dagang = $request->piutang_dagang;
            $aktivaLancar->piutang_anggota = $request->piutang_anggota;
            $aktivaLancar->piutang_calon = $request->piutang_calon;
            $aktivaLancar->piutang_koplain = $request->piutang_koplain;
            $aktivaLancar->piutang_bunga = $request->piutang_bunga;
            $aktivaLancar->piutang_lain = $request->piutang_lain;
            $aktivaLancar->penyisihan_pinjaman = $request->penyisihan_pinjaman;
            $aktivaLancar->premi_asuransi = $request->premi_asuransi;
            $aktivaLancar->perkap_kantor = $request->perkap_kantor;
            $aktivaLancar->beban_dimuka = $request->beban_dimuka;
            $aktivaLancar->pendapatan_aknditerima = $request->pendapatan_aknditerima;
            $aktivaLancar->barang_dagang = $request->barang_dagang;
            $aktivaLancar->lainnya = $request->lainnya;
            $aktivaLancar->kas2 = $request->kas2;
            $aktivaLancar->giro2 = $request->giro2;
            $aktivaLancar->tabungan2 = $request->tabungan2;
            $aktivaLancar->deposito2 = $request->deposito2;
            $aktivaLancar->simpanan_sukarela2 = $request->simpanan_sukarela2;
            $aktivaLancar->simpanan_berjangka2 = $request->simpanan_berjangka2;
            $aktivaLancar->surat_berharga2 = $request->surat_berharga2;
            $aktivaLancar->piutang_dagang2 = $request->piutang_dagang2;
            $aktivaLancar->piutang_anggota2 = $request->piutang_anggota2;
            $aktivaLancar->piutang_calon2 = $request->piutang_calon2;
            $aktivaLancar->piutang_koplain2 = $request->piutang_koplain2;
            $aktivaLancar->piutang_bunga2 = $request->piutang_bunga2;
            $aktivaLancar->piutang_lain2 = $request->piutang_lain2;
            $aktivaLancar->penyisihan_pinjaman2 = $request->penyisihan_pinjaman2;
            $aktivaLancar->premi_asuransi2 = $request->premi_asuransi2;
            $aktivaLancar->perkap_kantor2 = $request->perkap_kantor2;
            $aktivaLancar->beban_dimuka2 = $request->beban_dimuka2;
            $aktivaLancar->pendapatan_aknditerima2 = $request->pendapatan_aknditerima2;
            $aktivaLancar->barang_dagang2 = $request->barang_dagang2;
            $aktivaLancar->lainnya2 = $request->lainnya2;
            $aktivaLancar->save();

        $investasi = new Investasi();
            $investasi->koperasi_id     = $koperasi->id;
            $investasi->simpanan_berjangka = $request->simpanan_berjangka;
            $investasi->surat_berharga = $request->surat_berharga;
            $investasi->simpanan_lain = $request->simpanan_lain;
            $investasi->penyertaan_koplain = $request->penyertaan_koplain;
            $investasi->penyertaan_lemkeulain = $request->penyertaan_lemkeulain;
            $investasi->inv_jplain = $request->inv_jplain;
            $investasi->properti_inv = $request->properti_inv;
            $investasi->akm_peny_prop = $request->akm_peny_prop;
            $investasi->simpanan_berjangka2 = $request->simpanan_berjangka2;
            $investasi->surat_berharga2 = $request->surat_berharga2;
            $investasi->simpanan_lain2 = $request->simpanan_lain2;
            $investasi->penyertaan_koplain2 = $request->penyertaan_koplain2;
            $investasi->penyertaan_lemkeulain2 = $request->penyertaan_lemkeulain2;
            $investasi->inv_jplain2 = $request->inv_jplain2;
            $investasi->properti_inv2 = $request->properti_inv2;
            $investasi->akm_peny_prop2 = $request->akm_peny_prop2;
            $investasi->save();

        $aktivaTetap = new AktivaTetap();
            $aktivaTetap->koperasi_id = $koperasi->id;
            $aktivaTetap->tanah = $request->tanah;
            $aktivaTetap->bangunan = $request->bangunan;
            $aktivaTetap->kendaraan = $request->kendaraan;
            $aktivaTetap->inv_perkap = $request->inv_perkap;
            $aktivaTetap->akm_peny = $request->akm_peny;
            $aktivaTetap->tanah2 = $request->tanah2;
            $aktivaTetap->bangunan2 = $request->bangunan2;
            $aktivaTetap->kendaraan2 = $request->kendaraan2;
            $aktivaTetap->inv_perkap2 = $request->inv_perkap2;
            $aktivaTetap->akm_peny2 = $request->akm_peny2;
            $aktivaTetap->save();

        $aktivaTidakBerwujud = new AktivaTidakBerwujud();
            $aktivaTidakBerwujud->koperasi_id     = $koperasi->id;
            $aktivaTidakBerwujud->aktiva_tdk_berwujud = $request->aktiva_tdk_berwujud;
            $aktivaTidakBerwujud->aktiva_tdk_berwujud2 = $request->aktiva_tdk_berwujud2;
            $aktivaTidakBerwujud->save();

        $aktivaLain = new AktivaLain();
            $aktivaLain->koperasi_id     = $koperasi->id;
            $aktivaLain->beban_ditangguhkan = $request->beban_ditangguhkan;
            $aktivaLain->amortisasi_beban = $request->amortisasi_beban;
            $aktivaLain->agunan_diambil = $request->agunan_diambil;
            $aktivaLain->beban_praoperasional = $request->beban_praoperasional;
            $aktivaLain->amortisasi_biaya = $request->amortisasi_biaya;
            $aktivaLain->lain = $request->lain;
            $aktivaLain->beban_ditangguhkan2 = $request->beban_ditangguhkan2;
            $aktivaLain->amortisasi_beban2 = $request->amortisasi_beban2;
            $aktivaLain->agunan_diambil2 = $request->agunan_diambil2;
            $aktivaLain->beban_praoperasional2 = $request->beban_praoperasional2;
            $aktivaLain->amortisasi_biaya2 = $request->amortisasi_biaya2;
            $aktivaLain->lain2 = $request->lain2;
            $aktivaLain->save();

        $hutangPendek = new HutangPendek();
            $hutangPendek->koperasi_id     = $koperasi->id;
            $hutangPendek->tabungan_anggota = $request->tabungan_anggota;
            $hutangPendek->tabungan_nonanggota = $request->tabungan_nonanggota;
            $hutangPendek->simpanan_bjkanggota = $request->simpanan_bjkanggota;
            $hutangPendek->simpanan_bjkcalon = $request->simpanan_bjkcalon;
            $hutangPendek->hutang_bank = $request->hutang_bank;
            $hutangPendek->hutang_lpdb = $request->hutang_lpdb;
            $hutangPendek->hutang_pajak = $request->hutang_pajak;
            $hutangPendek->beban_hrsdibayar = $request->beban_hrsdibayar;
            $hutangPendek->pendapatan_dimuka = $request->pendapatan_dimuka;
            $hutangPendek->hutang_biaya = $request->hutang_biaya;
            $hutangPendek->dana_bagian = $request->dana_bagian;
            $hutangPendek->titipan_dana = $request->titipan_dana;
            $hutangPendek->titipan_jaminan = $request->titipan_jaminan;
            $hutangPendek->titipan_zakat = $request->titipan_zakat;
            $hutangPendek->hutang_sewa = $request->hutang_sewa;
            $hutangPendek->kewajiban_lain = $request->kewajiban_lain;
            $hutangPendek->tabungan_anggota2 = $request->tabungan_anggota2;
            $hutangPendek->tabungan_nonanggota2 = $request->tabungan_nonanggota2;
            $hutangPendek->simpanan_bjkanggota2 = $request->simpanan_bjkanggota2;
            $hutangPendek->simpanan_bjkcalon2 = $request->simpanan_bjkcalon2;
            $hutangPendek->hutang_bank2 = $request->hutang_bank2;
            $hutangPendek->hutang_lpdb2 = $request->hutang_lpdb2;
            $hutangPendek->hutang_pajak2 = $request->hutang_pajak2;
            $hutangPendek->beban_hrsdibayar2 = $request->beban_hrsdibayar2;
            $hutangPendek->pendapatan_dimuka2 = $request->pendapatan_dimuka2;
            $hutangPendek->hutang_biaya2 = $request->hutang_biaya2;
            $hutangPendek->dana_bagian2 = $request->dana_bagian2;
            $hutangPendek->titipan_dana2 = $request->titipan_dana2;
            $hutangPendek->titipan_jaminan2 = $request->titipan_jaminan2;
            $hutangPendek->titipan_zakat2 = $request->titipan_zakat2;
            $hutangPendek->hutang_sewa2 = $request->hutang_sewa2;
            $hutangPendek->kewajiban_lain2 = $request->kewajiban_lain2;
            $hutangPendek->save();

        $hutangPanjang = new HutangPanjang();
            $hutangPanjang->koperasi_id     = $koperasi->id;
            $hutangPanjang->hutang_bank = $request->hutang_bank;
            $hutangPanjang->hutang_koplain = $request->hutang_koplain;
            $hutangPanjang->pasiva = $request->pasiva;
            $hutangPanjang->simpanan_berjangka = $request->simpanan_berjangka;
            $hutangPanjang->titipan_dana = $request->titipan_dana;
            $hutangPanjang->hutang_lpdb = $request->titipan_dana;
            $hutangPanjang->hutang_sewa = $request->hutang_sewa;
            $hutangPanjang->hutang_lain = $request->hutang_lain;
            $hutangPanjang->hutang_bank2 = $request->hutang_bank2;
            $hutangPanjang->hutang_koplain2 = $request->hutang_koplain2;
            $hutangPanjang->pasiva2 = $request->pasiva2;
            $hutangPanjang->simpanan_berjangka2 = $request->simpanan_berjangka2;
            $hutangPanjang->titipan_dana2 = $request->titipan_dana2;
            $hutangPanjang->hutang_lpdb2 = $request->hutang_lpdb2;
            $hutangPanjang->hutang_sewa2 = $request->hutang_sewa2;
            $hutangPanjang->hutang_lain2 = $request->hutang_lain2;
            $hutangPanjang->save();

        $ekuitas = new Ekuitas();
            $ekuitas->koperasi_id     = $koperasi->id;
            $ekuitas->simpanan_pokok = $request->simpanan_pokok;
            $ekuitas->simpanan_wajib = $request->simpanan_wajib;
            $ekuitas->modal_penyetaraan = $request->modal_penyetaraan;
            $ekuitas->modal_penyertaan = $request->modal_penyertaan;
            $ekuitas->modal_sumbangan = $request->modal_sumbangan;
            $ekuitas->cadangan_umum = $request->cadangan_umum;
            $ekuitas->cadangan_tujuan = $request->cadangan_tujuan;
            $ekuitas->shu_sebelum = $request->shu_sebelum;
            $ekuitas->shu_berjalan = $request->shu_berjalan;
            $ekuitas->simpanan_pokok2 = $request->simpanan_pokok2;
            $ekuitas->simpanan_wajib2 = $request->simpanan_wajib2;
            $ekuitas->modal_penyetaraan2 = $request->modal_penyetaraan2;
            $ekuitas->modal_penyertaan2 = $request->modal_penyertaan2;
            $ekuitas->modal_sumbangan2 = $request->modal_sumbangan2;
            $ekuitas->cadangan_umum2 = $request->cadangan_umum2;
            $ekuitas->cadangan_tujuan2 = $request->cadangan_tujuan2;
            $ekuitas->shu_sebelum2 = $request->shu_sebelum2;
            $ekuitas->shu_berjalan2 = $request->shu_berjalan2;
            $ekuitas->save();

        $partisipasiAnggota = new PartisipasiAnggota();
            $partisipasiAnggota->koperasi_id     = $koperasi->id;
            $partisipasiAnggota->jasa_pinjaman = $request->jasa_pinjaman;
            $partisipasiAnggota->administrasi_anggota = $request->administrasi_anggota;
            $partisipasiAnggota->provisi_anggota = $request->provisi_anggota;
            $partisipasiAnggota->pelayanan_lain = $request->pelayanan_lain;
            $partisipasiAnggota->penjualan_anggota = $request->penjualan_anggota;
            $partisipasiAnggota->jasa_pinjaman2 = $request->jasa_pinjaman2;
            $partisipasiAnggota->administrasi_anggota2 = $request->administrasi_anggota2;
            $partisipasiAnggota->provisi_anggota2 = $request->administrasi_anggota2;
            $partisipasiAnggota->pelayanan_lain2 = $request->pelayanan_lain2;
            $partisipasiAnggota->penjualan_anggota2 = $request->penjualan_anggota2;
            $partisipasiAnggota->save();

        $pendapatanNonanggota = new PendapatanNonanggota();
            $pendapatanNonanggota->koperasi_id     = $koperasi->id;
            $pendapatanNonanggota->jasa_pinjaman = $request->jasa_pinjaman;
            $pendapatanNonanggota->administrasi = $request->administrasi;
            $pendapatanNonanggota->provisi = $request->provisi;
            $pendapatanNonanggota->jasa_pelayanan = $request->jasa_pelayanan;
            $pendapatanNonanggota->penjualan = $request->penjualan;
            $pendapatanNonanggota->beban_penjualan = $request->beban_penjualan;
            $pendapatanNonanggota->jasa_pinjaman2 = $request->jasa_pinjaman2;
            $pendapatanNonanggota->administrasi2 = $request->administrasi2;
            $pendapatanNonanggota->provisi2 = $request->provisi2;
            $pendapatanNonanggota->jasa_pelayanan2 = $request->jasa_pelayanan2;
            $pendapatanNonanggota->penjualan2 = $request->penjualan2;
            $pendapatanNonanggota->beban_penjualan2 = $request->beban_penjualan2;
            $pendapatanNonanggota->save();

        $bebanAnggota = new BebanAnggota();
            $bebanAnggota->koperasi_id     = $koperasi->id;
            $bebanAnggota->simpanan_anggota = $request->simpanan_anggota;
            $bebanAnggota->simpanan_berjangka = $request->simpanan_berjangka;
            $bebanAnggota->simpanan_anggota2 = $request->simpanan_anggota2;
            $bebanAnggota->simpanan_berjangka2 = $request->simpanan_berjangka2;
            $bebanAnggota->save();

        $bebanNonanggota = new BebanNonanggota();
            $bebanNonanggota->koperasi_id     = $koperasi->id;
            $bebanNonanggota->jasa_simpanan = $request->jasa_simpanan;
            $bebanNonanggota->simpanan_berjangka = $request->simpanan_berjangka;
            $bebanNonanggota->hutang_bank = $request->hutang_bank;
            $bebanNonanggota->pinjaman_lpdb = $request->pinjaman_lpdb;
            $bebanNonanggota->modal_penyertaan = $request->modal_penyertaan;
            $bebanNonanggota->pihak_ketiga = $request->pihak_ketiga;
            $bebanNonanggota->jasa_simpanan2 = $request->jasa_simpanan2;
            $bebanNonanggota->simpanan_berjangka2 = $request->simpanan_berjangka2;
            $bebanNonanggota->hutang_bank2 = $request->hutang_bank2;
            $bebanNonanggota->pinjaman_lpdb2 = $request->pinjaman_lpdb2;
            $bebanNonanggota->modal_penyertaan2 = $request->modal_penyertaan2;
            $bebanNonanggota->pihak_ketiga2 = $request->pihak_ketiga2;
            $bebanNonanggota->save();

        $bebanUsaha = new BebanUsaha();
            $bebanUsaha->koperasi_id     = $koperasi->id;
            $bebanUsaha->biaya_penyisihan = $request->biaya_penyisihan;
            $bebanUsaha->biaya_bunga = $request->biaya_bunga;
            $bebanUsaha->honor_karyawan = $request->honor_karyawan;
            $bebanUsaha->biaya_perkap = $request->biaya_perkap;
            $bebanUsaha->biaya_asuransi = $request->biaya_asuransi;
            $bebanUsaha->biaya_listrik = $request->biaya_listrik;
            $bebanUsaha->biaya_penyusutan = $request->biaya_penyusutan;
            $bebanUsaha->biaya_lain = $request->biaya_lain;
            $bebanUsaha->biaya_pemeliharaan = $request->biaya_pemeliharaan;
            $bebanUsaha->biaya_promosi = $request->biaya_promosi;
            $bebanUsaha->biaya_akomodasi = $request->biaya_akomodasi;
            $bebanUsaha->biaya_transportasi = $request->biaya_transportasi;
            $bebanUsaha->biaya_administrasi = $request->biaya_administrasi;
            $bebanUsaha->biaya_pajak = $request->biaya_pajak;
            $bebanUsaha->biaya_sewa = $request->biaya_sewa;
            $bebanUsaha->biaya_operasional = $request->biaya_operasional;
            $bebanUsaha->biaya_penyisihan2 = $request->biaya_penyisihan2;
            $bebanUsaha->biaya_bunga2 = $request->biaya_bunga2;
            $bebanUsaha->honor_karyawan2 = $request->honor_karyawan2;
            $bebanUsaha->biaya_perkap2 = $request->biaya_perkap2;
            $bebanUsaha->biaya_asuransi2 = $request->biaya_asuransi2;
            $bebanUsaha->biaya_listrik2 = $request->biaya_listrik2;
            $bebanUsaha->biaya_penyusutan2 = $request->biaya_penyusutan2;
            $bebanUsaha->biaya_lain2 = $request->biaya_lain2;
            $bebanUsaha->biaya_pemeliharaan2 = $request->biaya_pemeliharaan2;
            $bebanUsaha->biaya_promosi2 = $request->biaya_promosi2;
            $bebanUsaha->biaya_akomodasi2 = $request->biaya_akomodasi2;
            $bebanUsaha->biaya_transportasi2 = $request->biaya_transportasi2;
            $bebanUsaha->biaya_administrasi2 = $request->biaya_administrasi2;
            $bebanUsaha->biaya_pajak2 = $request->biaya_pajak2;
            $bebanUsaha->biaya_sewa2 = $request->biaya_sewa2;
            $bebanUsaha->biaya_operasional2 = $request->biaya_operasional2;
            $bebanUsaha->save();

        $bebanPerkoperasian = new BebanPerkoperasian();
            $bebanPerkoperasian->koperasi_id     = $koperasi->id;
            $bebanPerkoperasian->beban_pengawas  = $request->beban_pengawas;
            $bebanPerkoperasian->beban_pembinaan  = $request->beban_pembinaan;
            $bebanPerkoperasian->beban_rapat  = $request->beban_rapat;
            $bebanPerkoperasian->beban_pengawas2  = $request->beban_pengawas2;
            $bebanPerkoperasian->beban_pembinaan2  = $request->beban_pembinaan2;
            $bebanPerkoperasian->beban_rapat2  = $request->beban_rapat2;
            $bebanPerkoperasian->save();

        $pendapatanLain = new PendapatanLain();
            $pendapatanLain->koperasi_id     = $koperasi->id;
            $pendapatanLain->pendapatan_deviden = $request->pendapatan_deviden;
            $pendapatanLain->pendapatan_sewa = $request->pendapatan_sewa;
            $pendapatanLain->pendapatan_lain = $request->pendapatan_lain;
            $pendapatanLain->pendapatan_deviden2 = $request->pendapatan_deviden2;
            $pendapatanLain->pendapatan_sewa2 = $request->pendapatan_sewa2;
            $pendapatanLain->pendapatan_lain2 = $request->pendapatan_lain2;
            $pendapatanLain->save();

        $pajakPenghasilan = new PajakPenghasilan();
            $pajakPenghasilan->koperasi_id     = $koperasi->id;
            $pajakPenghasilan->pajak_penghasilan = $request->pajak_penghasilan;
            $pajakPenghasilan->pajak_penghasilan2 = $request->pajak_penghasilan2;
            $pajakPenghasilan->save();

        $biayaLain = new BiayaLain();
            $biayaLain->koperasi_id     = $koperasi->id;
            $biayaLain->biaya_lain      = $request->biaya_lain;
            $biayaLain->biaya_lain2     = $request->biaya_lain2;
            $biayaLain->save();

        $pembiayaanBermasalah = new PembiayaanBermasalah();
            $pembiayaanBermasalah->koperasi_id     = $koperasi->id;
            $pembiayaanBermasalah->pkl = $request->pkl;
            $pembiayaanBermasalah->pdr = $request->pdr;
            $pembiayaanBermasalah->macet = $request->macet;
            $pembiayaanBermasalah->pkl2 = $request->pkl2;
            $pembiayaanBermasalah->pdr2 = $request->pdr2;
            $pembiayaanBermasalah->macet2 = $request->macet2;
            $pembiayaanBermasalah->save();

        $agunan = new Agunan();
            $agunan->koperasi_id     = $koperasi->id;
            $agunan->agunan_pkl = $request->agunan_pkl;
            $agunan->agunan_pdr = $request->agunan_pdr;
            $agunan->agunan_macet = $request->agunan_macet;
            $agunan->agunan_pkl2 = $request->agunan_pkl2;
            $agunan->agunan_pdr2 = $request->agunan_pdr2;
            $agunan->agunan_macet2 = $request->agunan_macet2;
            $agunan->save();

        return response()->json(['Status' => 'Data Berhasil Disimpan'], 200);
    }
}
