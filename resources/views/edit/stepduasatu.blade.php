@extends('layouts.main')
@section('title', 'Input Data')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><strong> Input Data Keuangan | Agunan</strong></h3>
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
                                    <h6>Nilai agunan pembiayaan kurang lancar</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="agunan_pkl">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="agunan_pkl2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Nilai agunan pembiayaan diragukan</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="agunan_pdr">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="agunan_pdr2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-4 offset-1">
                                    <h6>Nilai agunan Pembiayaan Macet</h6>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="agunan_macet">
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control uang" name="input" type="text" id="agunan_macet2">
                                </div>
                            </div>
                            <br/>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="text-right">
                                        {{-- <a class="btn btn-primary" href="#tabs-1">Kembali</a> --}}
                                        <button id="btnPrev" class="btn btn-info mr-2" type="submit">Kembali</button>
                                        <button id="btnNext" class="btn btn-info mr-2" type="submit">Simpan</button>
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
            // console.log(localStorage.getItem('aktivalancar'));
            let data = {};
            let kopId = localStorage.getItem('kopId');

            $.ajax({
                type: "GET",
                url: "/sertifikat/agunan/" + kopId,
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

            if (kopId == null) {
                window.location.href = '/input/pilih-koperasi';
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

                        if (isi == "" | isi == null) {
                            isi = '0';
                        }
                        console.log(isi);

                        data[nama] = isi;
                        data['koperasi_id'] = kopId;

                    });
                });
                localStorage.setItem('agunan', JSON.stringify(data));
                console.log(data);

                // Post ProfilResiko
                // fetch("/edit/sertifikat/profilresiko", {
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                //         'Accept': 'application/json',
                //         'Content-Type': 'application/json'
                //     },
                //     method: "POST",
                //     body: localStorage.getItem('profil'),
                // })
                //     .then( response => response.json())
                //     .then( res => console.log(res) )


                // // Post TataKelola
                // fetch("/edit/sertifikat/tatakelola", {
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                //         'Accept': 'application/json',
                //         'Content-Type': 'application/json'
                //     },
                //     method: "POST",
                //     body: localStorage.getItem('tk'),
                // })
                //     .then( response => response.json())
                //     .then( res => console.log(res) )

                // Post Aktiva Lancar
                fetch("/edit/sertifikat/aktivalancar/", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('aktivalancar'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )

                // Post Investasi Panjang
                fetch("/edit/sertifikat/investasipanjang", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('investasi'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )

                // // Post Aktiva Tetap
                fetch("/edit/sertifikat/aktivatetap", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('aktivatetap'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )

                // // Post Aktiva Tidak Berwujud
                fetch("/edit/sertifikat/aktivatdkberwujud", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('aktivatdkberwujud'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )

                // Post Aktiva Lain
                fetch("/edit/sertifikat/aktivalain", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('aktivalain'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )

                // Post Hutang Jangka Pendek
                fetch("/edit/sertifikat/hutangjangkapendek", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('hutangpendek'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )

                // Post Hutang Jangka Pendek
                fetch("/edit/sertifikat/hutangjangkapanjang", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('hutangpanjang'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )

                // Post Ekuitas
                fetch("/edit/sertifikat/ekuitas", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('ekuitas'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )

                // Post Partisipasi Anggota
                fetch("/edit/sertifikat/partisipasianggota", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('partisipasianggota'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )

                // Post Pendapatan Non Anggota
                fetch("/edit/sertifikat/pendaptannonanggota", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('pendapatannon'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )

                // Post Beban Anggota
                fetch("/edit/sertifikat/bebananggota", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('bebananggota'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )

                // Post Beban Non Anggota
                fetch("/edit/sertifikat/bebannonanggota", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('bebannon'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )

                // Post Beban Usaha
                fetch("/edit/sertifikat/bebanusaha", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('bebanusaha'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )

                // Post Beban Perkoperasian
                fetch("/edit/sertifikat/bebanperkoperasian", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('bebankoperasi'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )

                // Post Pendapatan Lain
                fetch("/edit/sertifikat/pendapatanlain", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('pendapatanlain'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )

                // Post Biaya Lain
                fetch("/edit/sertifikat/biayalain", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('biayalain'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )

                // Post Pajak Penghasilan
                fetch("/edit/sertifikat/pajakpenghasilan", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('pajakpenghasilan'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )

                // Post Pembiayaan Bermasalah
                fetch("/edit/sertifikat/pembiayaanbermasalah", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('pembiayaanbermasalah'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )

                // Post Agunan
                fetch("/edit/sertifikat/agunan", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('agunan'),
                })
                    .then( response => response.json())
                    .then( res => console.log(res) )


            //     localStorage.clear();
            });

            $("#btnPrev").click(function (e) {
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
                localStorage.setItem('agunan', JSON.stringify(data));
                window.location.href = '/edit/sertifikat/pembiayaanbermasalah';
            });
        });
        </script>
    @endpush
@endsection
