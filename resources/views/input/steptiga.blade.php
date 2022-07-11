@extends('layouts.main')
@section('title', 'Input Data')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><strong> Input Data Keuangan | Aktiva Lancar </strong></h3>
                    </div>
                    <div class="card-body">
                        <form id="formdk" class="forms-sample">
                            @csrf

                            <div class="row">
                                <div class="col-md-3 offset-5">
                                    <h6 class="text-center"><strong> Tahun Berjalan </strong></h6>
                                </div>
                                <div class="col-md-3">
                                    <h6 class="text-center"><strong> Tahun Lalu </strong></h6>
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Kas</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" type="text" name="input" id="kas">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input" id="kas2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Giro</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="giro">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="giro2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Tabungan</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="tabungan">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="tabungan2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Deposito</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="deposito">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="deposito2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Simpanan Sukarela pada koperasi lain</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="simpanan_sukarela">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="simpanan_sukarela2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Simpanan Berjangka pada koperasi lain</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="simpanan_berjangka_koplain">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="simpanan_berjangka_koplain2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Surat Berharga (Investasi Jangka Pendek)</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="surat_berharga">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="surat_berharga2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Piutang Dagang</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="piutang_dagang">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="piutang_dagang2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Piutang anggota</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="piutang_anggota">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="piutang_anggota2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Piutang pada calon anggota</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="piutang_calon">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="piutang_calon2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Piutang yang diberikan pada koperasi lain</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="piutang_koplain">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="piutang_koplain2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Piutang Bunga</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="piutang_bunga">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="piutang_bunga2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Piutang lain-lain</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="piutang_lain">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="piutang_lain2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Penyisihan pinjaman yang tidak tertagih</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="penyisihan_pinjaman">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="penyisihan_pinjaman2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Premi asuransi</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="premi_asuransi">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="premi_asuransi2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Perlengkapan Kantor</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="perkap_kantor">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="perkap_kantor2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Beban Dibayar Dimuka</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="beban_dimuka">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="beban_dimuka2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Pendapatan Yang Masih Akan Diterima</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="pendapatan_aknditerima">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="pendapatan_aknditerima2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Persediaan Barang Dagang</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input" id="barang_dagang">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="barang_dagang2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Aktiva Lancar Lainnya</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input" id="lainnya">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang"  type="text" name="input"  id="lainnya2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-right">
                                        {{-- <a class="btn btn-primary" href="#tabs-1">Kembali</a> --}}
                                        <button id="btnPrev" class="btn btn-info mr-2" type="submit">Sebelumnya</button>
                                        <button id="btnNext" class="btn btn-info mr-2" type="submit">Selanjutnya</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
        $(function() {
            let local = JSON.parse(localStorage.getItem('aktivalancar'));
            console.log(local);
            let data = {};
            let kopId = localStorage.getItem('kopId');

            if (kopId == null) {
                window.location.href = '/input/pilih-koperasi';
            }
            // console.log(keys);

            if (local != null) {
                delete local["koperasi_id"];
                // console.log(local);

                let form = $('#formdk').find("input[name='input']");
                // console.log(form);

                for (let i = 0; i < form.length; i++) {
                    $(form[i]).val(local[ Object.keys(local)[i] ]).trigger('input');
                }
            }

            $('#btnNext').click(function (e) {
                e.preventDefault();

                console.log(localStorage.getItem('kopId'));
                $('#formdk').each(function (index, element) {
                    $("input[name='input']").each(function() {
                        console.log(this.id);

                        console.log(this.value);

                        let nama = this.id;
                        let nilai = this.value;
                        let isi = nilai.replace(/\./g,'').replace(/\,/g,'');


                        console.log(isi);

                        if (isi == "" | isi == null) {
                            isi = '0';
                        }

                        data[nama] = isi;
                        data['koperasi_id'] = kopId;

                    });
                });
                localStorage.setItem('aktivalancar', JSON.stringify(data));

                window.location.href = '/input/sertifikat/investasipanjang';

            });

            $('#btnPrev').click(function (e) {
                e.preventDefault();
                $('#formdk').each(function (index, element) {
                    $("input[name='input']").each(function() {
                        console.log( this.id);
                        console.log(this.value);

                        let nama = this.id;
                        let nilai = this.value;
                        let isi = nilai.replace('.','').replace(',','');

                        if (isi == "" | isi == null) {
                            isi = '0';
                        }

                        data[nama] = isi;
                        data['koperasi_id'] = kopId;

                    });
                });
                localStorage.setItem('aktivalancar', JSON.stringify(data));
                window.location.href = '/input/sertifikat/profilresiko';
            });
        });
        </script>
    @endpush
@endsection
