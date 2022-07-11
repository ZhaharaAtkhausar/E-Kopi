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
                                <th colspan="7">Resiko Inheren</th>
                            </tr>
                            <tr>
                                <th colspan="7" class="text-center">Resiko Operasional</th>
                            </tr>
                            <tr>
                                <td>a.</td>
                                <td>
                                    <strong>Skala usaha dan struktur organisasi</strong><br/>
                                    Penilaian terhadap besar kecilnya skala usaha koperasi serta kelengkapan struktur organisasi koperasi. Semakin besar skala usaha yang tidak didukung oleh kelengkapan struktur organisasi, semakin tinggi Risiko bagi koperasi karena semakin besar kemungkinan koperasi mengalami Risiko operasional  karena  ketidakcukupan dan/atau tidak berfungsinya proses internal.
                                </td>
                                <td class="text-center" id="ror1"></td>
                                <td class="text-center" id="ron1"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="rok1"></td>
                                <td class="text-center" id="ros1"></td>
                            </tr>
                            <tr>
                                <td>b.</td>
                                <td>
                                    <strong>Keberagaman produk dan/atau jasa</strong><br/>
                                    Melakukan penilaian terhadap keberagaman dan kompleksitas jenis produk dan/atau jasa yang dikelola. Semakin tinggi keberagaman dan kompleksitas jenis produk dan/atau jasa yang dikelola, semakin tinggi Risiko karena semakin besar kemungkinan koperasi mengalami Risiko operasional sebagai akibat ketidakcukupan dan/atau tidak berfungsinya proses internal.
                                </td>
                                <td class="text-center" id="ror2"></td>
                                <td class="text-center" id="ron2"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="rok2"></td>
                                <td class="text-center" id="ros2"></td>
                            </tr>
                            <tr>
                                <th colspan="7" class="text-center">Resiko Kepatuhan</th>
                            </tr>
                            <tr>
                                <td>a.</td>
                                <td>
                                    <strong>Jenis, signifikansi, dan frekuensi pelanggaran yang dilakukan</strong><br/>
                                    Melakukan penilaian terhadap jenis, signifikansi, dan frekuensi pelanggaran ketentuan yang dilakukan oleh koperasi. Semakin tinggi frekuensi pelanggaran signifikan yang dilakukan oleh koperasi, semakin tinggi Risiko kepatuhan bagi koperasi.
                                </td>
                                <td class="text-center" id="rkr1"></td>
                                <td class="text-center" id="rkn1"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="rkk1"></td>
                                <td class="text-center" id="rks1"></td>
                            </tr>
                            <tr>
                                <td>b.</td>
                                <td>
                                    <strong>Signifikansi tindak lanjut atas temuan pelanggaran</strong><br/>
                                    Melakukan penilaian terhadap tindak lanjut yang dilakukan oleh Koperasi atas temuan pelanggaran ketentuan yang dilakukan oleh koperasi.
                                </td>
                                <td class="text-center" id="rkr2"></td>
                                <td class="text-center" id="rkn2"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="rkk2"></td>
                                <td class="text-center" id="rks2"></td>
                            </tr>
                            <tr>
                                <th colspan="7" class="text-center">Resiko Likuiditas</th>
                            </tr>
                            <tr>
                                <td>a.</td>
                                <td>
                                    <strong>Aset likuid terhadap total aset</strong><br/>
                                    melakukan penilaian terhadap komposisi aset likuid yang dimiliki, dibandingkan dengan total aset. Semakin rendah persentase komposisi rasio ini, koperasi memiliki Risiko yang semakin tinggi karena koperasi berpotensi mengalami Risiko likuiditas akibat tidak memiliki aset likuid yang memadai
                                </td>
                                <td class="text-center" id="rlr1"></td>
                                <td class="text-center" id="rln1"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="rlk1"></td>
                                <td class="text-center" id="rls1"></td>
                            </tr>
                            <tr>
                                <td>b.</td>
                                <td>
                                    <strong>Aset likuid terhadap kewajiban lancar</strong><br/>
                                    penilaian terhadap jumlah aset likuid  yang  dimiliki koperasi,  dibandingkan kewajiban lancar untuk mengetahui kemampuan aset likuid yang dimiliki  dalam  memenuhi  kewajiban  lancar. Semakin rendah persentase rasio, koperasi memiliki Risiko yang semakin tinggi karena koperasi berpotensi mengalami Risiko likuiditas akibat koperasi tidak memiliki aset likuid yang memadai untuk memenuhi kewajiban lancar.
                                </td>
                                <td class="text-center" id="rlr2"></td>
                                <td class="text-center" id="rln2"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="rlk2"></td>
                                <td class="text-center" id="rls2"></td>
                            </tr>
                            <tr>
                                <td>c</td>
                                <td>
                                    <strong>Penilaian terhadap seberapa luas atau seberapa besar koperasi memiliki komitmen pendanaan yang dapat digunakan jika dibutuhkan</strong><br/>
                                    Parameter penilaian terhadap seberapa luas atau seberapa besar koperasi memiliki komitmen pendanaan yang dapat digunakan jika dibutuhkan. Semakin besar akses pendanaan yang dimiliki oleh koperasi, semakin rendah Risiko likuiditas bagi koperasi.
                                </td>
                                <td class="text-center" id="rlr3"></td>
                                <td class="text-center" id="rln3"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="rlk3"></td>
                                <td class="text-center" id="rls3"></td>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">Resiko Inheren</th>
                                <th class="text-center" id="hri1"></th>
                                <th class="text-center" id="hri2"></th>
                                <th class="text-center" id="hri3"></th>
                                <th class="text-center" colspan="2" id="hri4"></th>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="7">KUALITAS PENERAPAN MANAJEMEN RISIKO (KPMR)</th>
                            </tr>
                            <tr>
                                <th colspan="7" class="text-center">Kualitas Penerapan Manajemen Risiko Operasional</th>
                            </tr>
                            <tr>
                                <td>a.</td>
                                <td>
                                    <strong>Pengawasan Pengurus dan Pengawas</strong><br/>
                                </td>
                                <td class="text-center" id="kror1"></td>
                                <td class="text-center" id="kron1"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="krok1"></td>
                                <td class="text-center" id="kros1"></td>
                            </tr>
                            <tr>
                                <td>b.</td>
                                <td>
                                    <strong>Kebijakan, Prosedur dan Limit Risiko</strong><br/>
                                </td>
                                <td class="text-center" id="kror2"></td>
                                <td class="text-center" id="kron2"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="krok2"></td>
                                <td class="text-center" id="kros2"></td>
                            </tr>
                            <tr>
                                <td>c.</td>
                                <td>
                                    <strong>Proses dan Sistem Informasi Manajemen Risiko </strong><br/>
                                </td>
                                <td class="text-center" id="kror3"></td>
                                <td class="text-center" id="kron3"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="krok3"></td>
                                <td class="text-center" id="kros3"></td>
                            </tr>
                            <tr>
                                <th colspan="7" class="text-center">Kualitas Penerapan Manajemen Risiko Kepatuhan</th>
                            </tr>
                            <tr>
                                <td>a.</td>
                                <td>
                                    <strong>Pengawasan Pengurus dan Pengawas</strong><br/>
                                </td>
                                <td class="text-center" id="krkr1"></td>
                                <td class="text-center" id="krkn1"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="krkk1"></td>
                                <td class="text-center" id="krks1"></td>
                            </tr>
                            <tr>
                                <td>b.</td>
                                <td>
                                    <strong>Kebijakan, Prosedur dan Limit Risiko</strong><br/>
                                </td>
                                <td class="text-center" id="krkr2"></td>
                                <td class="text-center" id="krkn2"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="krkk2"></td>
                                <td class="text-center" id="krks2"></td>
                            </tr>
                            <tr>
                                <td>c.</td>
                                <td>
                                    <strong>Proses dan Sistem Informasi Manajemen Risiko</strong><br/>
                                </td>
                                <td class="text-center" id="krkr3"></td>
                                <td class="text-center" id="krkn3"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="krkk3"></td>
                                <td class="text-center" id="krks3"></td>
                            </tr>
                            <tr>
                                <th colspan="7" class="text-center">Kualitas Penerapan Manajemen Risiko Likuiditas</th>
                            </tr>
                            <tr>
                                <td>a.</td>
                                <td>
                                    <strong>Pengawasan Pengurus dan Pengawas</strong><br/>
                                </td>
                                <td class="text-center" id="krlr1"></td>
                                <td class="text-center" id="krln1"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="krlk1"></td>
                                <td class="text-center" id="krls1"></td>
                            </tr>
                            <tr>
                                <td>b.</td>
                                <td>
                                    <strong>Kebijakan, Prosedur dan Limit Risiko</strong><br/>
                                </td>
                                <td class="text-center" id="krlr2"></td>
                                <td class="text-center" id="krln2"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="krlk2"></td>
                                <td class="text-center" id="krls2"></td>
                            </tr>
                            <tr>
                                <td>c.</td>
                                <td>
                                    <strong>Proses dan Sistem Informasi Manajemen Risiko</strong><br/>
                                </td>
                                <td class="text-center" id="krlr3"></td>
                                <td class="text-center" id="krln3"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="krlk3"></td>
                                <td class="text-center" id="krls3"></td>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">KUALITAS PENERAPAN MANAJEMEN RISIKO</th>
                                <th class="text-center" id="hmr1"></th>
                                <th class="text-center" id="hmr2"></th>
                                <th class="text-center" id="hmr3"></th>
                                <th class="text-center" colspan="2" id="hmr4"></th>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">PROFIL RISIKO</th>
                                <th class="text-center" id="hpr1"></th>
                                <th class="text-center" id="hpr2"></th>
                                <th class="text-center" id="hpr3"></th>
                                <th class="text-center" colspan="2" id="hpr4"></th>
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
        <script src="{{ asset('js/profil-resiko.js') }}"></script>
    @endpush

@endsection
