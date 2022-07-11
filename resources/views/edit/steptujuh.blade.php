@extends('layouts.main')
@section('title', 'Input Data')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><strong> Input Data Keuangan | Aktiva Lain-Lain </strong></h3>
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
                                    <h6>Beban Ditangguhkan</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="beban_ditangguhkan">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="beban_ditangguhkan2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Amortisasi Beban Ditangguhkan</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="amortisasi_beban">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="amortisasi_beban2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Agunan Yang Diambil Alih</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="agunan_diambil">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="agunan_diambil2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Beban Pra Operasional</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="beban_praoperasional">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="beban_praoperasional2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Amortisasi Biaya Pra Operasional</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="amortisasi_biaya">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="amortisasi_biaya2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Lain - lain</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="lain">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="lain2">
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
            let local = JSON.parse(localStorage.getItem('aktivalain'));
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
                    url: "/sertifikat/aktivalain/" + kopId,
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
                localStorage.setItem('aktivalain', JSON.stringify(data));

                window.location.href = '/edit/sertifikat/hutangjangkapendek';

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
                localStorage.setItem('aktivalain', JSON.stringify(data));
                window.location.href = '/edit/sertifikat/aktivatdkberwujud';
            });
        });
        </script>
    @endpush
@endsection
