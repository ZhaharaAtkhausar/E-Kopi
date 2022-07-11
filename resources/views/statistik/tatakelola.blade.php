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
                                <th colspan="7" class="text-center">Prinsip Koperasi</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    <strong>Keanggotaan bersifat terbuka</strong><br/>
                                    Kepatuhan Koperasi untuk menerima anggota atau pengunduran anggota secara sukarela (tidak ada paksaan) dan terbuka ( bagi semua etnis, suku agama dan lain-lain) yang
                                </td>
                                <td class="text-center" id="tkr1"></td>
                                <td class="text-center" id="tkn1"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="tkk1"></td>
                                <td class="text-center" id="tks1"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <strong>Pengelolaan dilakukan secara Demokratis</strong><br/>
                                    Kepatuhan Koperasi dalam pengambilan keputusan dan penetapan kebijakan koperasi, pengelolaan koperasi dilakukan oleh anggota secara demokratis One man one vote, dalam Rapat Anggota. Semua anggota berhak dipilih dan memilih untuk menjadi pengurus/pengawas koperasi; Peraturan ditetapkan dengan melibatkan anggota koperasi
                                </td>
                                <td class="text-center" id="tkr2"></td>
                                <td class="text-center" id="tkn2"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="tkk2"></td>
                                <td class="text-center" id="tks2"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <strong>Pembagian sisa hasil usaha dilakukan secara adil sebanding dengan besarnya jasa usaha masing-masing anggota</strong><br/>
                                    Kepatuhan Koperasi membagi SHU dan bagian SHU untuk anggota dibagi proprosional dengan besarnya jasa usaha yang ketentuannya tercantum dalam AD/ART. Kepatuhan Koperasi membagi SHU dan bagian SHU untuk anggota dibagi proprosional dengan besarnya modal anggota kepada koperasi yang ketentuannya tercantum dalam AD/ART. Kepatuhan Koperasi membagi SHU dan bagian SHU untuk anggota dibagi tidak dibagi sama rata, yang ketentuannya tercantum dalam AD/ART
                                </td>
                                <td class="text-center" id="tkr3"></td>
                                <td class="text-center" id="tkn3"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="tkk3"></td>
                                <td class="text-center" id="tks3"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <strong>Pemberian balas jasa yang terbatas terhadap modal</strong><br/>
                                    Kepatuhan koperasi terkait dengan apakah simpanan sukarela diberikan balas jasa atau imbalan terbatas berupa imbalan (bunga) yang wajar dan disepakati di dalam Rapat Anggota.  Kepatuhan koperasi terkait dengan apakah modal penyertaan diberikan balas jasa atau imbalan terbatas berupa imbalan (bunga) yang wajar dan disepakati di dalam Rapat Anggota
                                </td>
                                <td class="text-center" id="tkr4"></td>
                                <td class="text-center" id="tkn4"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="tkk4"></td>
                                <td class="text-center" id="tks4"></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    <strong>Kemandirian</strong><br/>
                                    Pengelolaan koperasi yang dilakukan atas dasar pada kemampuan dan kekuatan internal koperasi dapat terlihat pada jumlah modal internal koperasi lebih besar dibandingkan dengan modal luar. Koperasi mengutamakan sumber modal sendiri, dan modal pinjaman anggota yang bersumber dari tabungan dan simpanan berjangka anggota. Ubtuk mengetahui ukuran ini lihat neraca koperasi bandingkan jumlah besaran item tersebut
                                </td>
                                <td class="text-center" id="tkr5"></td>
                                <td class="text-center" id="tkn5"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="tkk5"></td>
                                <td class="text-center" id="tks5"></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>
                                    <strong>Pengembangan Perkoperasian</strong><br/>
                                    Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi anggota pengurus, pengelola yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun. Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi pengawas yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun. Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi pengelola yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun. Laporan RAT terkait dengan upaya koperasi menjalin kerjasama organisasi, usaha dan permodalan antar koperasi di tingkat kabupaten/kota, provinsi, nasional dan internasional
                                </td>
                                <td class="text-center" id="tkr6"></td>
                                <td class="text-center" id="tkn6"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="tkk6"></td>
                                <td class="text-center" id="tks6"></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>
                                    <strong>Kerjasama koperasi</strong><br/>
                                    Upaya yang dilakukan oleh koperasi menjalin kerjasama baik dalam bidang usaha, organisasi, permodalan, pengembangan manusia, pemasaran dan sistem informasi baik antar koperasi dan institusi lainnya baik di tingkat kabupaten/kota, provinsi, nasional dan internasional
                                </td>
                                <td class="text-center" id="tkr7"></td>
                                <td class="text-center" id="tkn7"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="tkk7"></td>
                                <td class="text-center" id="tks7"></td>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">Prinsip Koperasi</th>
                                <th class="text-center" id="hpk1"></th>
                                <th class="text-center" id="hpk2"></th>
                                <th class="text-center" id="hpk3"></th>
                                <th class="text-center" colspan="2" id="hpk4"></th>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="7" class="text-center"> Kelembagaan </th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    <strong>Legalitas Badan Hukum Koperasi</strong><br/>
                                    Mengukur keabsahan dokumen badan hukum, tercantum dalam berita negara, kesesuaian jenis usaha dan kesesuaian lokasi koperasi dengan dokumen badan hukum
                                </td>
                                <td class="text-center" id="tkr8"></td>
                                <td class="text-center" id="tkn8"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="tkk8"></td>
                                <td class="text-center" id="tks8"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <strong>Izin Usaha Simpan Pinjam</strong><br/>
                                    Kelengkapan dan ketersedian dokumen Izin Usaha simpan pinjam, izin kantor cabang, ketersediaan papan nama
                                </td>
                                <td class="text-center" id="tkr9"></td>
                                <td class="text-center" id="tkn9"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="tkk9"></td>
                                <td class="text-center" id="tks9"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <strong>Anggaran Dasar </strong><br/>
                                    a. daftar nama pendiri; b. nama dan tempat kedudukan; c. jenis koperasi; d. maksud dan tujuan; e. jangka waktu berdirinya; f. keanggotaan; g. jumlah setoran simpanan pokok  dan simpanan wajib sebagai modal awal; h. permodalan; i. rapat anggota;<br/>j. pengurus; k. pengawas; l. pengelolaan dan pengendalian; m. bidang usaha; n. pembagian sisa hasil usaha; o. ketentuan mengenai pembubaran, penyelesaian, dan hapusnya status badan hukum;dan p. sanksi. q. persus
                                </td>
                                <td class="text-center" id="tkr10"></td>
                                <td class="text-center" id="tkn10"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="tkk10"></td>
                                <td class="text-center" id="tks10"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <strong>Keanggotaan</strong><br/>
                                    Ketersediaan buku daftar anggota, tidak terjadi penurunan anggota yang melebihi 20 orang, tingkat keaktifan anggota baik dari aspek simpanan maupun pinjaman, partisipasi dalam rapat anggota
                                </td>
                                <td class="text-center" id="tkr11"></td>
                                <td class="text-center" id="tkn11"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="tkk11"></td>
                                <td class="text-center" id="tks11"></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    <strong>Kelengkapan Organisasi</strong><br/>
                                    Pelaksanaan Rapat anggota, ketersediaan pengurus, Ketersediaan pengawas dan pengelola
                                </td>
                                <td class="text-center" id="tkr12"></td>
                                <td class="text-center" id="tkn12"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="tkk12"></td>
                                <td class="text-center" id="tks12"></td>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">Kelembagaan</th>
                                <th class="text-center" id="hk1"></th>
                                <th class="text-center" id="hk2"></th>
                                <th class="text-center" id="hk3"></th>
                                <th class="text-center" colspan="2" id="hk4"></th>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="7" class="text-center"> Manajemen </th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>
                                    <strong>Manajemen Umums</strong><br/>
                                    Ketersedian visi, misi dan tujuan koperasi; ketersedian rencana kerja baik jangka panjang dan jangka pendek; pengukuran dan evaluasi atas rencana kerja
                                </td>
                                <td class="text-center" id="tkr13"></td>
                                <td class="text-center" id="tkn13"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="tkk13"></td>
                                <td class="text-center" id="tks13"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>
                                    <strong>Manajemen Kelembagaan</strong><br/>
                                    Ketersedian struktur organisasi; uraian tugas; ketersediaan SOM dan SOP; sistem pengamanan dokumen
                                </td>
                                <td class="text-center" id="tkr14"></td>
                                <td class="text-center" id="tkn14"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="tkk14"></td>
                                <td class="text-center" id="tks14"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>
                                    <strong>Manajemen Permodalan</strong><br/>
                                    pertumbuhan modal sendiri; pertumbuhan simpanan anggota; peningkatan cadangan; investasi bersumber dari modal sendiri.
                                </td>
                                <td class="text-center" id="tkr15"></td>
                                <td class="text-center" id="tkn15"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="tkk15"></td>
                                <td class="text-center" id="tks15"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>
                                    <strong>Manajemen Asset</strong><br/>
                                    Pembiayaan yang diberikan dengan dukungan agunan; kolektibilitas pembayaran; tingkat pengembalian pembiayaan macet masih dapat tertagih; menjaga prinsip kehati-hatian dalam memberikan pinjman
                                </td>
                                <td class="text-center" id="tkr16"></td>
                                <td class="text-center" id="tkn16"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="tkk16"></td>
                                <td class="text-center" id="tks16"></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>
                                    <strong>Manajemen Likuiditas</strong><br/>
                                    Memiliki kebijakan tertulis mengenai pengendalian likuiditas; Ketersediaan fasilitas pembiyaan dari lembaga keuangan lain; peraturan khusus terkait standar likuiditas; Sistem informasi yang mendukung pemantauan likuiditas koperasi
                                </td>
                                <td class="text-center" id="tkr17"></td>
                                <td class="text-center" id="tkn17"></td>
                                <td class="text-center">76%</td>
                                <td class="text-center" id="tkk17"></td>
                                <td class="text-center" id="tks17"></td>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">Manajemen</th>
                                <th class="text-center" id="hm1"></th>
                                <th class="text-center" id="hm2"></th>
                                <th class="text-center" id="hm3"></th>
                                <th class="text-center" colspan="2" id="hm4"></th>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">TATA KELOLA</th>
                                <th class="text-center" id="htk1"></th>
                                <th class="text-center" id="htk2"></th>
                                <th class="text-center" id="htk3"></th>
                                <th class="text-center" colspan="2" id="htk4"></th>
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
        <script src="{{ asset('js/tatakelola.js') }}"></script>
    @endpush

@endsection
