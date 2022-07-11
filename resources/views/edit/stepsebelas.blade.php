@extends('layouts.main')
@section('title', 'Input Data')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><strong> Input Data Keuangan | Partisipasi Bruto Anggota </strong></h3>
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
                                    <h6>Pendapatan Jasa Pinjaman anggota</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="jasa_pinjaman">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="jasa_pinjaman2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Pendapatan Administrasi Anggota</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="administrasi_anggota">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="administrasi_anggota2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Pendapatan Provisi Anggota</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="provisi_anggota">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="provisi_anggota2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Pendapatan Jasa Pelayanan Lainnya Anggota</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="pelayanan_lain">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="pelayanan_lain2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Penjualan pada anggota</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="penjualan_anggota">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="penjualan_anggota2">
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
            let local = JSON.parse(localStorage.getItem('partisipasianggota'));
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
                    url: "/sertifikat/partisipasianggota/" + kopId,
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
                localStorage.setItem('partisipasianggota', JSON.stringify(data));

                window.location.href = '/edit/sertifikat/pendaptannonanggota';

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
                localStorage.setItem('partisipasianggota', JSON.stringify(data));
                window.location.href = '/edit/sertifikat/ekuitas';
            });
        });
        </script>
    @endpush
@endsection
