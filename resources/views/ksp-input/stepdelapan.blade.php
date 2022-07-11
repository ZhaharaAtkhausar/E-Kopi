@extends('layouts.main')
@section('title', 'Input Data')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><strong> Input Data Keuangan | Hutang Jangka Pendek</strong></h3>
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
                                    <h6>Tabungan/simpanan anggota</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="tabungan_anggota">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="tabungan_anggota2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Tabungan/simpanan non anggota</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="tabungan_nonanggota">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="tabungan_nonanggota2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Simpanan berjangka anggota</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="simpanan_bjkanggota">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="simpanan_bjkanggota2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Simpanan berjangka calon anggota & koperasi lain</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="simpanan_bjkcalon">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="simpanan_bjkcalon2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Hutang Bank (Bagian jatuh tempo kurang 1 tahun)</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="hutang_bank">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="hutang_bank2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Hutang LPDB (Bagian jatuh tempo kurang 1 tahun)</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="hutang_lpdb">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="hutang_lpdb2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Hutang Pajak</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="hutang_pajak">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="hutang_pajak2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Beban yang masih harus dibayar</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="beban_hrsdibayar">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="beban_hrsdibayar2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Pendapatan lain diterima dimuka</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="pendapatan_dimuka">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="pendapatan_dimuka2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Hutang biaya</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="hutang_biaya">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="hutang_biaya2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Dana bagian SHU</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="dana_bagian">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="dana_bagian2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Titipan dana kebajikan anggota</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="titipan_dana">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="titipan_dana2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Titipan jaminan kesehatan</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="titipan_jaminan">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="titipan_jaminan2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Titipan Zakat, Infaq dan Shadaqoh</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="titipan_zakat">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="titipan_zakat2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Hutang Sewa Guna Usaha (kurang 1 tahun)</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="hutang_sewa">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="hutang_sewa2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Kewajiban Jangka Pendek Lainnya</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="kewajiban_lain">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="kewajiban_lain2">
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
            let local = JSON.parse(localStorage.getItem('hutangpendek'));
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
                        console.log( this.id);
                        console.log(this.value);

                        let nama = this.id;
                        let nilai = this.value;
                        let isi = nilai.replace(/\./g,'').replace(/\,/g,'');

                        if (isi == "" | isi == null) {
                            isi = '0';
                        }

                        data[nama] = isi;
                        data['koperasi_id'] = kopId;

                    });
                });
                localStorage.setItem('hutangpendek', JSON.stringify(data));

                window.location.href = '/ksp-input/sertifikat/hutangjangkapanjang';

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
                localStorage.setItem('hutangpendek', JSON.stringify(data));
                window.location.href = '/ksp-input/sertifikat/aktivalain';
            });
        });
        </script>
    @endpush
@endsection
