@extends('layouts.main')
@section('title', 'Edit Data Koperasi')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3> Form Edit Koperasi </h3>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" method="post" action="{{URL::to('koperasi/edit' , [$koperasi->id])}}">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>NIK</label>
                                        <input value="{{ $koperasi->nik }}" type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Koperasi </label>
                                        <input value="{{ $koperasi->nama }}" type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> No. Badan Hukum </label>
                                        <input value="{{ $koperasi->no_badan_hukum }}" type="text" class="form-control" id="no_badan_hukum" name="no_badan_hukum" placeholder="Masukkan No Badan Hukum">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Jenis</label>
                                        <select class="form-control" id="jenis" name="jenis">
                                            <option selected> Pilih Jenis Koperasi </option>
                                            <option value="Produsen"> Produsen </option>
                                            <option value="Pemasaran"> Pemasaran </option>
                                            <option value="Konsumen"> Konsumen </option>
                                            <option value="Jasa"> Jasa </option>
                                            <option value="Simpan Pinjam"> Simpan Pinjam </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Data Tahun Buku</label>
                                        <input value="{{ $koperasi->data_tahun_buku }}" type="text" class="form-control" id="data_tahun_buku" name="data_tahun_buku" placeholder="Masukkan Tahun Buku">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ __('Email address')}}</label>
                                        <input value="{{ $koperasi->email }}" type="email" class="form-control" id="email" name="email"
                                            placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Telephone</label>
                                        <input value="{{ $koperasi->telp }}" type="text" class="form-control" id="telp" name="telp" placeholder="Masukkan Telephone">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label> Alamat Sekarang </label>
                                <textarea class="form-control" id="almt_terakhir" name="almt_terakhir" rows="4">{{ $koperasi->almt_terakhir }}</textarea>
                            </div>
                            <div class="form-group">
                                <label> Alamat Sesuai Akta </label>
                                <textarea class="form-control" id="almt_akta" name="almt_akta" rows="4">{{ $koperasi->almt_akta }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">{{ __('Submit')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
