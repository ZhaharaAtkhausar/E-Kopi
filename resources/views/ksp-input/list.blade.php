@extends('layouts.main')
@section('title', 'Data Koperasi')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header row">
                <div class="col col-sm-6">
                    <h5> Silahkan Pilih Koperasi </h5>
                </div>
                <div class="col col-sm-6">
                    <div class="card-search with-adv-search dropdown">
                        <form method="get" action="">
                            <input type="text" class="form-control global_filter" id="search" name="search" placeholder="Search....">
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="advanced_table" class="table">
                    <thead>
                        <tr>
                            <th> Nik </th>
                            <th> Nama </th>
                            <th>Jenis</th>
                            <th>Data Tahun Buku</th>
                            <th> Telephone </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="result">
                        @foreach ($koperasi as $kp)
                            <tr>
                                <td>{{ $kp->nik }}</td>
                                <td>{{ $kp->nama }}</td>
                                <td> {{$kp->jenis}} </td>
                                <td> {{$kp->data_tahun_buku}} </td>
                                <td> {{$kp->telp}} </td>
                                <td>
                                    <a href="#productView" data-toggle="modal" data-id="{{ $kp->id }}" data-target="#productView" class="btn btn-info" id="btnPilih"> Detail </a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade edit-layout-modal pr-0" id="productView" tabindex="-1" role="dialog" aria-labelledby="productViewLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productViewLabel"> Detail Koperasi </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <p>
                                </p><div id="kop_jenis" class="badge badge-pill badge-dark"></div>
                            <p></p>
                            <h1 class="text-danger"><strong id="nama_kop"></strong></h1>
                            <p class="text-green"></p>
                            <h6><strong>No Badan Hukum:</strong> <h6 id="no_badan_kop">  </h6> </h6>
                            <p></p>
                            <h6><strong>Email:</strong> <h6 id="email_kop">  </h6> </h6>
                            <p></p>
                            <h6><strong>Alamat Terbaru:</strong> <h6 id="almt_terbaru"> </h6> </h6>
                            <p></p>
                            <h6><strong>Alamat Akta:</strong> <h6 id="almt_akta"> </h6> </h6>
                        </div>
                    </div>
                    <p></p>
                    <a href="#" class="btn btn-primary" id="btnNext"> Pilih </a>

                    <a href="#" class="btn btn-primary" id="btnEdit"> Edit Data Keuangan</a>

                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script src="{{ asset('plugins/amcharts/amcharts.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/gauge.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/serial.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/themes/light.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/animate.min.js') }}"></script>
        <script src="{{ asset('plugins/amcharts/pie.js') }}"></script>
        <script src="{{ asset('plugins/ammap3/ammap/ammap.js') }}"></script>
        <script src="{{ asset('plugins/ammap3/ammap/maps/js/usaLow.js') }}"></script>
        <script src="{{ asset('js/product.js') }}"></script>
        <script>
            $(function() {
                let data = [];
                //Fungsi Search
                $('#search').on('keyup',function() {

                    let query = $(this).val();

                    $.ajax({

                        url:"/input/search",
                        type:"GET",
                        data:{'search':query},

                        success:function (data) {
                            $('#result').html(data);
                        }
                    })
                });

                $('body').on('click', '#btnPilih', function () {
                  let id = $(this).data("id");
                  let url = 'koperasi/' + id;
                  console.log(url);

                  fetch(url)
                    .then( data => data.json())
                    .then( response => {
                        console.log( response );
                        data = response;
                        console.log(data);
                        $("#nama_kop").text(response.nama);
                        $("#kop_jenis").text(response.jenis);
                        $("#no_badan_kop").text(response.no_badan_hukum);
                        $("#email_kop").text(response.email);
                        $("#almt_terbaru").text(response.almt_terakhir);
                        $("#almt_akta").text(response.almt_akta);
                    })

                });

                $('#btnNext').click(function (e) {
                    e.preventDefault();
                    localStorage.setItem('kopId', data.id);

                    window.location.href = '/input/sertifikat/tatakelola';
                });

                $('#btnEdit').click(function (e) {
                    e.preventDefault();
                    localStorage.setItem('kopId', data.id);

                    window.location.href = '/edit/sertifikat/tatakelola';
                });
            });
        </script>
    @endpush

@endsection
