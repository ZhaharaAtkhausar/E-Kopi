@extends('layouts.main')
@section('title', 'Input Data')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><strong> Input Data Keuangan | Investasi Jangka Panjang </strong></h3>
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
                                    <h6>Simpanan/Tabungan Berjangka</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="tabungan_berjangka">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="tabungan_berjangka2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Surat Berharga</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="surat_berharga_panjang">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="surat_berharga_panjang2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Simpanan di KSP lain</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="simpanan_lain">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="simpanan_lain2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Penyertaan pada Koperasi Lain</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="penyertaan_koplain">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="penyertaan_koplain2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Penyertaan pada Lembaga Keuangan lain </h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="penyertaan_lemkeulain">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="penyertaan_lemkeulain2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Investasi jangka panjang lainnya</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="inv_jplain">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="inv_jplain2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Properti Investasi</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="properti_inv">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="properti_inv2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Akumulasi penyusutan Properti Investasi</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="akm_peny_prop">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="akm_peny_prop2">
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
            let local = JSON.parse(localStorage.getItem('investasi'));
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
            } else {
                $.ajax({
                    type: "GET",
                    url: "/sertifikat/investasipanjang/" + kopId,
                    success: function (response) {
                        response.forEach(e => {
                            console.log(e);
                            let form = $('#formdk').find("input[name='input']");

                            for (let i = 0; i < form.length; i++) {
                                $(form[i]).val(e[ Object.keys(e)[i] ]).trigger('input');
                            }
                        });
                    }
                });
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
                localStorage.setItem('investasi', JSON.stringify(data));

                window.location.href = '/edit/sertifikat/aktivatetap';

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
                localStorage.setItem('investasi', JSON.stringify(data));
                window.location.href = '/edit/sertifikat/aktivalancar';
            });
        });
        </script>
    @endpush
@endsection
