@extends('layouts.main')
@section('title', 'Tambah Data Koperasi')
@section('content')

    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/select2/dist/css/select2.min.css') }}">
    @endpush

    <div class="container-fluid">
        <div class="page-header">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="ik ik-file-plus bg-blue"></i>
                        <div class="d-inline">
                            <h5> Koperasi </h5>
                            <span> Tambah Koperasi </span>
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
                                <a href="#">Tambah Koperasi</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3> Form Tambah Koperasi </h3>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" method="post" action="{{URL::to('koperasi/tambah')}}">
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
                                        <label>Nama Koperasi</label>
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
                                        <select class="form-control" id="selectKec" name="kecamatan_id">
                                            <option selected hidden> Kecamatan : </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Kecamatan</label>
                                        <select class="form-control" id="selectDesa" name="desa_id">
                                            <option selected hidden> Desa : </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Jenis</label>
                                        <select class="form-control select2" id="jenis" name="jenis">
                                            <option selected hidden> Pilih Jenis </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label> Alamat Sekarang </label>
                                <textarea placeholder="Masukkan Alamat Lengkap"class="form-control" id="almt_terakhir" name="almt_terakhir" rows="4"></textarea>
                            </div>
                            <div class="form-group">
                                <label> Alamat Sesuai Akta </label>
                                <textarea placeholder="Masukkan Alamat Lengkap" class="form-control" id="almt_akta" name="almt_akta" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">{{ __('Submit')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
        <script>
            $(function () {

                $.ajax({
                    url:"/kecamatan/select",
                    type:"GET",

                    success:function (data) {
                        $('#selectKec').html(data);
                        console.log(data);
                    }
                })

                $("#selectKec").on('change', function () {
                    let query = $(this).val(); 

                    $.ajax({
                        url:"/desa/select",
                        type:"GET",
                        data:{'desa':query},

                        success:function (data) {
                            $('#selectDesa').html(data);
                        }
                    })
                });
            });
        </script>
    @endpush

@endsection
