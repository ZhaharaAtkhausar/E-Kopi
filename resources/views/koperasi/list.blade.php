@extends('layouts.main')
@section('title', 'Data Koperasi')
@section('content')

    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/select2/dist/css/select2.min.css') }}">
    @endpush

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-file bg-blue"></i>
                        <div class="d-inline">
                            <h5>Koperasi</h5>
                            <span> List Koperasi </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <nav class="breadcrumb-container" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('dashboard')}}"><i class="ik ik-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">Koperasi</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header row">
                        <div class="col col-sm-1">
                            <div class="card-options d-inline-block">
                                <div class="dropdown d-inline-block">
                                    <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="ik ik-more-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="moreDropdown">
                                        <a class="dropdown-item" href="#">Delete</a>
                                        <a class="dropdown-item" href="#">More Action</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col col-sm-6">
                            <div class="card-search with-adv-search dropdown">
                                <form method="get" action="">
                                    <input type="text" class="form-control global_filter" id="search" placeholder="Search.." >
		                            <button type="submit" class="btn btn-icon"><i class="ik ik-search"></i></button>
		                            <button type="button" id="adv_wrap_toggler_1" class="adv-btn ik ik-chevron-down dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
		                            <div class="adv-search-wrap dropdown-menu dropdown-menu-right" aria-labelledby="adv_wrap_toggler_1" id="cari">
		                                <div class="row">
		                                    <div class="col-md-6">
		                                        <div class="form-group">
                                                    <select class="form-control" id="kecamatan_id">
                                                        <option selected value="" hidden> Kecamatan : </option>
                                                        @foreach ($kecamatan as $kc)
                                                            <option value="{{ $kc->id_kecamatan }}">{{ $kc->nama_kecamatan }}</option>
                                                        @endforeach
                                                    </select>
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <select class="form-control" id="desa_id">
                                                        <option selected value="" hidden> Desa : </option>
                                                    </select>
		                                        </div>
		                                    </div>
		                                </div>
                                        <div class="row">
		                                    <div class="col-md-6">
		                                        <div class="form-group">
                                                    <select class="form-control" id="bentuk_id">
                                                        <option selected value="" hidden> Bentuk Koperasi : </option>
                                                        @foreach ($bentuk as $bk)
                                                            <option value="{{ $bk->id_bentuk_koperasi }}">{{ $bk->bentuk_koperasi }}</option>
                                                        @endforeach
                                                    </select>
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <select class="form-control" id="jenis_id">
                                                        <option selected value="" hidden> Jenis Koperasi : </option>
                                                        @foreach ($jenis as $js)
                                                            <option value="{{ $js->id_jenis_koperasi }}">{{ $js->jenis_koperasi }}</option>
                                                        @endforeach
                                                    </select>
		                                        </div>
		                                    </div>
		                                </div>
                                        <div class="row">
		                                    <div class="col-md-6">
		                                        <div class="form-group">
                                                    <select class="form-control" id="kel_id">
                                                        <option selected value=""  hidden> Kelompok Koperasi : </option>
                                                        @foreach ($kelompok as $kl)
                                                            <option value="{{ $kl->id_kel_koperasi }}">{{ $kl->kel_koperasi }}</option>
                                                        @endforeach
                                                    </select>
		                                        </div>
		                                    </div>
		                                    <div class="col-md-6">
		                                        <div class="form-group">
		                                            <select class="form-control" id="sektor_id">
                                                        <option selected value="" hidden> Sektor Usaha : </option>
                                                        @foreach ($sektor as $sr)
                                                            <option value="{{ $sr->id_sektor_usaha }}">{{ $sr->sektor_usaha }}</option>
                                                        @endforeach
                                                    </select>
		                                        </div>
		                                    </div>
		                                </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button id="btnSearch" class="btn btn-primary"> Cari </button>
                                            </div>
                                        </div>
		                            </div>
                                </form>
                            </div>
                        </div>
                        <div class="col col-sm-5">
                            <div class="card-options text-right">
                                <a href="{{ url('koperasi/tambah') }}" class=" btn btn-outline-primary btn-semi-rounded "> Tambah Koperasi </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="advanced_table" class="table">
                            <thead>
                                <tr>
                                    <th> Nik </th>
                                    <th> Nama </th>
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
                                        <td> {{$kp->data_tahun_buku}} </td>
                                        <td> {{$kp->telp}} </td>
                                        <td>
                                            <a href="#productView" data-toggle="modal" data-id="{{ $kp->id }}" data-target="#productView" id="detail">
                                                <i class="ik ik-eye f-16 mr-15"></i>
                                            </a>
                                            <a href="#editKoperasi" data-toggle="modal" data-id="{{ $kp->id }}" data-target="#editKoperasi" id="edit">
                                                <i class="ik ik-edit f-16 mr-15 text-green"></i>
                                            </a>
                                            <a href="#" data-id="{{ $kp->id }}" id="delete"><i class="ik ik-trash-2 f-16 text-red"></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
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
                    <br/>
                    <div class="row">
                        <div class="col-mdS-6">
                            <a href="#" id="input" class="btn btn-info">
                                Input Serifikat Kesehatan
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" id="sertifikat" class="btn btn-info">
                                Sertifikat Kesehatan
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade edit-layout-modal pr-0" id="editKoperasi" tabindex="-1" role="dialog" aria-labelledby="productViewLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="productViewLabel"> Detail Koperasi </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <form class="forms-sample" method="post" action="">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Koperasi </label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label> No. Badan Hukum </label>
                                            <input type="text" class="form-control" id="no_badan_hukum" name="no_badan_hukum" placeholder="Masukkan No Badan Hukum">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Telephone</label>
                                            <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukkan Telephone">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Data Tahun Buku</label>
                                            <input type="text" class="form-control" id="data_tahun_buku" name="data_tahun_buku" placeholder="Masukkan Tahun Buku">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>{{ __('Email address')}}</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Kecamatan</label>
                                            <select class="form-control" id="selectKecEdit" name="kecamatan_id">
                                                <option selected hidden> Kecamatan : </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Desa</label>
                                            <select class="form-control" id="selectDesaEdit" name="desa_id">
                                                <option selected hidden> Desa : </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Jenis</label>
                                            <select class="form-control" id="jenis" name="jenis">
                                                <option selected hidden> Jenis : </option>
                                                <option value="4"> Produsen </option>
                                                <option value="3"> Pemasaran </option>
                                                <option value="2"> Konsumen </option>
                                                <option value="1"> Jasa </option>
                                                <option value="5"> Simpan Pinjam </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label> Alamat Sekarang </label>
                                    <textarea class="form-control" id="almt_terakhir" name="almt_terakhir" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label> Alamat Sesuai Akta </label>
                                    <textarea class="form-control" id="almt_akta_edit" name="almt_akta" rows="4"></textarea>
                                </div>
                                <button id="btnEdit" type="submit" class="btn btn-primary mr-2">{{ __('Submit')}}</button>
                            </form>
                        </div>
                    </div>

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
        <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
        <script src="{{ asset('js/product.js') }}"></script>
        <script>
            $(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                //Fungsi Delete
                $('body').on('click', '#delete', function (event) {
                    // console.log("btn delete diklik");
                    let id = $(this).attr('data-id');

                    $.ajax(
                        {
                        url: "/koperasi/" + id,
                        type: 'GET',
                        data: {
                            id: id
                        },
                        success: function (response){
                            window.location.reload();
                        },
                    });
                });

                //Fungsi Detail
                $('body').on('click', '#detail', function () {
                  let id = $(this).data("id");
                  let url = '/koperasi/detail/' + id;
                //   console.log(url);

                  fetch(url)
                    .then( data => data.json())
                    .then( response => {
                        // console.log( response.koperasi );
                        localStorage.setItem('kopName', response.koperasi.nama);
                        $("#nama_kop").text(response.koperasi.nama);
                        $("#kop_jenis").text(response.koperasi.jenis);
                        $("#no_badan_kop").text(response.koperasi.no_badan_hukum);
                        $("#email_kop").text(response.koperasi.email);
                        $("#almt_terbaru").text(response.koperasi.almt_terakhir);
                        $("#almt_akta").text(response.koperasi.almt_akta);
                    })

                  $("#input").click(function (e) {
                    e.preventDefault();
                    localStorage.setItem('kopId', id);
                    window.location.href = '/input/sertifikat/tatakelola';
                  });

                  $("#sertifikat").click(function (e) {
                    e.preventDefault();
                    window.location.href = '/sertifikat/' + id;
                  });

                });

                //Fungsi Search
                $('#search').on('keyup',function() {

                    let query = $(this).val();
                    console.log(query);

                    $.ajax({

                        url:"/search",
                        type:"GET",
                        data:{'search':query},

                        success:function (data) {
                            $('#result').html(data);
                        }
                    })

                });

                let koperasi = [];
                let kecamatan = '';
                let desa = '';
                let jenis = '';
                let bentuk = '';
                let kelompok = '';
                let sektor = '';

                $('#kecamatan_id').on('change',function() {

                    let query = $(this).val();  
                    kecamatan = query;                  

                    $.ajax({

                        url:"/desa/select",
                        type:"GET",
                        data:{'desa':query},

                        success:function (data) {
                            $('#desa_id').html(data);
                        }
                    })

                    // $.ajax({

                    //     url:"/kecamatan/cari",
                    //     type:"GET",
                    //     data:{'search':query},

                    //     success:function (data) {
                    //         $('#result').html(data);
                    //     }
                    // })
                });

                $("#selectDesa").on("change", function () {
                    let query = $(this).val();
                    desa = query;

                    // $.ajax({

                    //     url:"/desa/cari",
                    //     type:"GET",
                    //     data:{'search':query},

                    //     success:function (data) {
                    //         $('#result').html(data);
                    //         // console.log(data);
                    //     }
                    // })
                });

                let select = $('#cari').find("select");
                // console.log(form);
                $.ajax({
                    type: "GET",
                    url: "/koperasi/cari",
                    success: function (response) {
                        koperasi = [...response];
                    }
                }); 

                $('#btnSearch').click(function (e) { 
                    e.preventDefault();
                    let data = {};
                    let filter = '';
                    let key = '';
                    let val = 0;
                    let filterKey = '';
                    let filterVal = 0;

                    // for (let i = 0; i < select.length; i++) {

                    //     key = $(select[i]).attr('id');
                    //     val = $(select[i]).val();
                    //     data[key] = val;

                    //     if ( val == "" ) {
                    //         delete data[key];
                    //     } else {
                    //         filterKey = key;
                    //         filterVal = val;
                    //     }

                        // let hasil = koperasi.filter(obj => obj[key] == val );
                        // let hasil = koperasi.filter(obj =>{
                            // console.log(key + ' = ' + val);
                        //     if ( filterVal != "") {
                        //       return obj[filterKey] == filterVal
                        //     }
                        // });

                        // let dataLength = Object.keys(data).length;
                        // if (dataLength == 2) {
                            // filter = koperasi.filter(obj => obj[filterKey] == filterVal);
                            // for (const [key, value] of Object.entries(data)) {
                            //     filter2 = koperasi.filter(obj => obj[key] == value);
                            // }
                            
                        // } else if (dataLength == 1) {
                            // let filter2 = koperasi.filter(obj => obj[filterKey] == filterVal);
                            // console.log(filterKey);
                        //     filter = koperasi.filter(obj => obj[filterKey] == filterVal);
                        // }
                        // console.log(filterKey);
                    }
                    
                    console.log(filter);
                    // if (data.kecamatan_id != '---') {
                    //     console.log(kecamatan);
                    // }
                    // if (data.desa_id != '---') {
                    //     desa = data.desa_id;
                    //     console.log(desa);
                    // }
                    // if (data.jenis_id != '---') {
                    //     jenis = data.jenis_id;
                    //     console.log(jenis);
                    // }  
                    // if (data.bentuk_id != '---') {
                    //     bentuk = data.bentuk_id;
                    //     console.log(bentuk);
                    // }  
                    // if (data.kel_id != '---') {
                    //     kelompok = data.kel_id;
                    //     console.log(kelompok);
                    // }  
                    // if (data.sektor_id != '---') {
                    //     sektor = data.sektor_id;
                    //     console.log(sektor);
                    // }

                    // let hasil = koperasi.filter(obj => obj.kecamatan_id == data.kecamatan_id && obj.desa_id == data.desa_id && obj.jenis_id == data.jenis_id && obj.bentuk_id == data.bentuk_id && obj.kel_id == data.kel_id && obj.sektor_id == data.sektor_id);
                    // console.log(hasil);
                });

                $("#selectJenis").on("change", function () {
                    let query = $(this).val();
                    jenis = query;
                    console.log(jenis);
                });

                $("#selectBentuk").on("change", function () {
                    let query = $(this).val();
                    bentuk = query;
                    console.log(bentuk);
                });

                $("#selectSek").on("change", function () {
                    let query = $(this).val();
                    sektor = query;
                    console.log(sektor);
                });

                $("#selectKel").on("change", function () {
                    let query = $(this).val();
                    kelompok = query;
                    console.log(kelompok);
                });

                // $('#btnSearch').click(function (e) { 
                //     e.preventDefault();
                //     $.ajax({
                //         type: "get",
                //         url: "/koperasi/cari",
                //         data: {
                //             // kelompok: kelompok,
                //             desa: desa,
                //             kecamatan : kecamatan,
                //             // sektor : sektor,
                //             // bentuk : bentuk,
                //             jenis : jenis
                //         },
                //         success: function (data) {
                //             $('#result').html(data);
                //             // console.log(data);
                //         }
                //     });
                // });

                //Fungsi Tampil Edit
                $("body").on("click","#edit",function(e){
                    e.preventDefault;

                    let id = $(this).data('id');
                    let url = "/koperasi/edit/" + id;
                    // console.log(id);

                    $.ajax({
                        url:"/kecamatan/select",
                        type:"GET",

                        success:function (data) {
                            $('#selectKecEdit').html(data);
                            // console.log(data);
                        }
                    })

                    $.get(url, row => {

                        $("#nik").val(row.nik);
                        $("#nama").val(row.nama);
                        $("#no_badan_hukum").val(row.no_badan_hukum);
                        $("#jenis").val(row.jenis).attr('selected','selected').change();
                        $("#data_tahun_buku").val(row.data_tahun_buku);
                        $("#email").val(row.email);
                        $("#telp").val(row.telp);
                        $("#almt_terakhir").val(row.almt_terakhir);
                        $("#almt_akta_edit").val(row.almt_akta);
                        $("#selectKecEdit").val(row.kecamatan_id).attr('selected','selected').change();
                        setTimeout(() => {
                            $("#selectDesaEdit").val(row.desa_id).attr('selected','selected').change();
                        }, 500);
                        
                        $("#selectKecEdit").on('change', function () {
                            let query = $(this).val(); 
                            // console.log("onchange jalan");

                            $.ajax({
                                url:"/desa/select",
                                type:"GET",
                                data:{'desa':query},

                                success:function (data) {
                                    $('#selectDesaEdit').html(data);
                                }
                            })
                        });

                        //Tombol Edit
                        $("body").on("click", "#btnEdit" ,function(e) {

                            e.preventDefault();
                            // console.log("btndiclick")
                            // console.log(id);

                            let nik = $("#nik").val();
                            let nama = $("#nama").val();
                            let jenis = $("#jenis").val();
                            let data_tahun_buku = $("#data_tahun_buku").val();
                            let no_badan_hukum = $("#no_badan_hukum").val();
                            let email = $("#email").val();
                            let telp = $("#telp").val();
                            let almt_terakhir = $("#almt_terakhir").val();
                            let almt_akta = $("#almt_akta_edit").val();
                            let kecamatan_id = $("#selectKecEdit").val();
                            let desa_id = $("#selectDesaEdit").val();

                            console.log(desa_id);
                            console.log(kecamatan_id);

                            $.ajax({
                                url: "/koperasi/edit/"+id,
                                type: "POST",
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                data: {
                                nik: nik,
                                nama : nama,
                                jenis : jenis,
                                data_tahun_buku : data_tahun_buku,
                                no_badan_hukum : no_badan_hukum,
                                email : email,
                                telp : telp,
                                almt_terakhir : almt_terakhir,
                                almt_akta : almt_akta,
                                kecamatan_id : kecamatan_id,
                                desa_id : desa_id,

                                },
                                dataType: 'json',
                                success: function (data) {
                                    window.location.reload();
                                }
                            });

                        });

                    });

                    setTimeout(() => {
                        let kecamatan = $("#selectKecEdit").val();
                        // console.log(kecamatan);
                        $.ajax({
                            url:"/desa/select",
                            type:"GET",
                            data:{'desa':kecamatan},

                            success:function (data) {
                                $('#selectDesaEdit').html(data);
                                // console.log(data);
                            }
                        })
                    }, 500);

                });
            });
        </script>
    @endpush

@endsection
