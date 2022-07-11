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
                fetch("/input/sertifikat/profilresiko", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('profil'),
                })
                    // .then( response => response.json())
                    .then( res => {
                        Swal.fire({
                            title: 'Tunggu Sebentar',
                            text: "Data sedang dimuat",
                            icon: 'info',
                            showCancelButton: false,
                            showConfirmButton: false
                        })
                    })


                // Post TataKelola
                fetch("/input/sertifikat/tatakelola", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('tk'),
                })
                    // .then( response => response.json())


                // Post Aktiva Lancar
                fetch("/input/sertifikat/aktivalancar", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('aktivalancar'),
                })
                    // .then( response => response.json())


                // Post Investasi Panjang
                fetch("/input/sertifikat/investasipanjang", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('investasi'),
                })
                    // .then( response => response.json())


                // Post Aktiva Tetap
                fetch("/input/sertifikat/aktivatetap", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('aktivatetap'),
                })
                    // .then( response => response.json())


                // Post Aktiva Tidak Berwujud
                fetch("/input/sertifikat/aktivatdkberwujud", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('aktivatdkberwujud'),
                })
                    // .then( response => response.json())


                // Post Aktiva Lain
                fetch("/input/sertifikat/aktivalain", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('aktivalain'),
                })
                    // .then( response => response.json())


                // Post Hutang Jangka Pendek
                fetch("/input/sertifikat/hutangjangkapendek", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('hutangpendek'),
                })
                    // .then( response => response.json())


                // Post Hutang Jangka Pendek
                fetch("/input/sertifikat/hutangjangkapanjang", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('hutangpanjang'),
                })
                    // .then( response => response.json())


                // Post Ekuitas
                fetch("/input/sertifikat/ekuitas", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('ekuitas'),
                })
                    // .then( response => response.json())


                // Post Partisipasi Anggota
                fetch("/input/sertifikat/partisipasianggota", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('partisipasianggota'),
                })
                    // .then( response => response.json())


                // Post Pendapatan Non Anggota
                fetch("/input/sertifikat/pendaptannonanggota", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('pendapatannon'),
                })
                    // .then( response => response.json())


                // Post Beban Anggota
                fetch("/input/sertifikat/bebananggota", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('bebananggota'),
                })
                    // .then( response => response.json())


                // Post Beban Non Anggota
                fetch("/input/sertifikat/bebannonanggota", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('bebannon'),
                })
                    // .then( response => response.json())


                // Post Beban Usaha
                fetch("/input/sertifikat/bebanusaha", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('bebanusaha'),
                })
                    // .then( response => response.json())


                // Post Beban Perkoperasian
                fetch("/input/sertifikat/bebanperkoperasian", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('bebankoperasi'),
                })
                    // .then( response => response.json())


                // Post Pendapatan Lain
                fetch("/input/sertifikat/pendapatanlain", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('pendapatanlain'),
                })
                    // .then( response => response.json())


                // Post Biaya Lain
                fetch("/input/sertifikat/biayalain", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('biayalain'),
                })
                    // .then( response => response.json())


                // Post Pajak Penghasilan
                fetch("/input/sertifikat/pajakpenghasilan", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('pajakpenghasilan'),
                })
                    // .then( response => response.json())


                // Post Pembiayaan Bermasalah
                fetch("/input/sertifikat/pembiayaanbermasalah", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('pembiayaanbermasalah'),
                })
                    // .then( response => response.json())


                // Post Agunan
                fetch("/input/sertifikat/agunan", {
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json',
                        'Content-Type': 'application/json'
                    },
                    method: "POST",
                    body: localStorage.getItem('pembiayaanbermasalah'),
                })
                    // .then( response => response.json())
                    .then( res => {
                        Swal.fire({
                            title: 'Sukses',
                            text: "Data telah diupload",
                            icon: 'success',
                        }).then(function() {
                            // Redirect the user
                            window.location.href = '/koperasi/tabelkesehatan';
                        })
                    })

                localStorage.clear();
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
                window.location.href = '/input/sertifikat/pembiayaanbermasalah';
            });
        });
        </script>
    @endpush
@endsection
