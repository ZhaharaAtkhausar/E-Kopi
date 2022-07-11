@extends('layouts.main')
@section('title', 'Data Koperasi')
@section('content')

    @push('head')
        <link rel="stylesheet" href="{{ asset('plugins/select2/dist/css/select2.min.css') }}">
    @endpush

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
                        <select class="form-control select2" id="search">
                                <option selected> Pilih Koperasi </option>
                            @foreach ($koperasi as $kp)
                                <option value="{{ $kp->id }}">{{ $kp->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col col-sm-5">
                    <div class="card-options text-right">
                        <span class="mr-5" id="top">1 - 50 of 2,500</span>
                        <a href="#"><i class="ik ik-chevron-left"></i></a>
                        <a href="#"><i class="ik ik-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form id="frmdk">
                    <table id="tabledata" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Aspek Pemeriksaan</th>
                                <th>Rasio</th>
                                <th>Nilai</th>
                                <th>Standar</th>
                                <th>Kategori</th>
                                <th>Skor</th>
                            </tr>
                        </thead>
                        <tbody id="isibody">
                            <tr>
                                <th colspan="7" class="text-center">KECUKUPAN PERMODALAN</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    <strong>Ekuitas terhadap Total Aset</strong><br/>
                                    Rasio yang menunjukkan perbandingan antara ekuitas dengan total aset. Penilaian rasio ekuitas terhadap total aset dimaksudkan untuk mengukur kemampuan ekuitas dalam mendukung pendanaan terhadap total aset. Rasio ekuitas terhadap total aset  menunjukkan kemampuan sumber dana internal yang berasal dari simpanan pokok, simpanan wajib, modal penyetaraan, modal/sumbangan/donasi, cadangan umum, cadangan tujuan risiko, dan hasil usaha belum dibagi terhadap total aset yang dimiliki KSP dan USP Koperasi pada tahun tertentu. Kategori optimal rasio modal sendiri terhadap total aset adalah sebesar 30%
                                </td>
                                <td class="text-center" id="kpr1"></td>
                                <td class="text-center" id="kpn1"></td>
                                <td class="text-center">30%</td>
                                <td class="text-center" id="kpk1"></td>
                                <td class="text-center" id="kps1"></td>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">KECUKUPAN PERMODALAN</th>
                                <th class="text-center" id="hkp1"></th>
                                <th class="text-center" id="hkp2"></th>
                                <th class="text-center" id="hkp3"></th>
                                <th class="text-center" colspan="2" id="hkp4"></th>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="7" class="text-center">KECUKUPAN PENGELOLAAN PERMODALAN</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    <strong>Modal Pinjaman Anggota tehadap Total Aset</strong><br/>
                                    Rasio Modal pinjaman anggota terhadap total aset merupakan perbandingan antara simpanan atau tabungan sukarela, simpanan berjangka milik anggota yang dihimpun oleh KSP dan USP Koperasi dengan total aset. Rasio ini menunjukkan kemampuan KSP dan USP Koperasi dalam menghimpun dana luar yang bersumber dari anggota untuk disalurkan kembali kepada anggota. Semakin baik rasio ini menunjukkan tingkat keaktifan anggota Koperasi dalam menyimpan dana kepada Koperasi. Kategori optimal rasio modal pinjaman anggota terhadap total aset adalah sebesar 30%
                                </td>
                                <td class="text-center" id="kppr1"></td>
                                <td class="text-center" id="kppn1"></td>
                                <td class="text-center">30%</td>
                                <td class="text-center" id="kppk1"></td>
                                <td class="text-center" id="kpps1"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <strong>Kewajiban Jangka Panjang terhadap Ekuitas </strong><br/>
                                    Rasio Kewajiban jangka panjang terhadap ekuitas merupakan rasio yang mengukur perbandingan antara hutang jangka panjang terhadap modal sendiri (ekuitas). Rasio ini merupakan persentase sumber modal pinjaman non anggota/modal luar koperasi dalam jangka panjang terhadap modal sendiri KSPPS dan USPPS Koperasi. KSP dan USP Koperasi yang mempunyai kewajiban jangka panjang lebih tinggi dibandingkan ekuitas memiliki potensi risiko yang tinggi jika terjadi kegagalan pembayaran atau pinjaman yang bermasalah dari pinjaman yang disalurkan. Kategori optimal rasio kewajiban jangka panjang terhadap modal sendiri adalah sebesar 100%
                                </td>
                                <td class="text-center" id="kppr2"></td>
                                <td class="text-center" id="kppn2"></td>
                                <td class="text-center">100%</td>
                                <td class="text-center" id="kppk2"></td>
                                <td class="text-center" id="kpps2"></td>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">KECUKUPAN PENGELOLAAN PERMODALAN</th>
                                <th class="text-center" id="hkpp1"></th>
                                <th class="text-center" id="hkpp2"></th>
                                <th class="text-center" id="hkpp3"></th>
                                <th class="text-center" colspan="2" id="hkpp4"></th>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">PERMODALAN</th>
                                <th class="text-center" id="hp1"></th>
                                <th class="text-center" id="hp2"></th>
                                <th class="text-center" id="hp3"></th>
                                <th class="text-center" colspan="2" id="hp4"></th>
                            </tr>
                        </tbody>
                    </table>
                <form>
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
        <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
        <script src="{{ asset('js/product.js') }}"></script>
        <script src="{{ asset('js/permodalan.js') }}"></script>
    @endpush

@endsection
