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
                                <th colspan="7">EVALUASI KINERJA KEUANGAN</th>
                            </tr>
                            <tr>
                                <th colspan="7" class="text-center">RENTABILITAS DAN KEMANDIRIAN</th>
                            </tr>
                            <tr>
                                <td>a.</td>
                                <td>
                                    <strong>Rentabilitas Aset (Return on Asset)</strong><br/>
                                    Rasio Rentabilitas aset  adalah perbandingan antara sisa hasil usaha setelah pajak yang diperoleh dengan aset yang dimiliki . Semakin tinggi rasio ini semakin baik. Kategori optimal rasio rentabilitas aset adalah sebesar 7%
                                </td>
                                <td class="text-center" id="kkr1"></td>
                                <td class="text-center" id="kkn1"></td>
                                <td class="text-center"> 7%</td>
                                <td class="text-center" id="kkk1"></td>
                                <td class="text-center" id="kks1"></td>
                            </tr>
                            <tr>
                                <td>b.</td>
                                <td>
                                    <strong>Rentabilitas Ekuitas (Return on Equity)</strong><br/>
                                    Rasio rentabilitas ekuitas adalah rasio yang mengukur SHU bersih setelah pajak dibandingkan total modal sendiri. Rasio rentabilitas ekuitas ini dimaksudkan untuk mengukur kemampuan koperasi dalam memperoleh laba atau keuntungan dari ekuitas yang dikelola. Semakin tinggi rasio ini semakin baik. Kategori optimal rasio rentabilitas ekuitas adalah sebesar 10%
                                </td>
                                <td class="text-center" id="kkr2"></td>
                                <td class="text-center" id="kkn2"></td>
                                <td class="text-center">10%</td>
                                <td class="text-center" id="kkk2"></td>
                                <td class="text-center" id="kks2"></td>
                            </tr>
                            <tr>
                                <td>c.</td>
                                <td>
                                    <strong>Kemandirian Operasional</strong><br/>
                                    Rasio kemandirian operasional pelayanan ini dimaksudkan untuk mengukur kemandirian koperasi dalam pelayanan operasional untuk anggota. Semakin tinggi semakin baik. Rasio kemandirian operasional adalah partisipasi netto dibandingkan biaya usaha ditambah biaya perkoperasian. Kategori optimal rasio kemandirian operasional adalah sebesar 120%
                                </td>
                                <td class="text-center" id="kkr3"></td>
                                <td class="text-center" id="kkn3"></td>
                                <td class="text-center">120%</td>
                                <td class="text-center" id="kkk3"></td>
                                <td class="text-center" id="kks3"></td>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">RENTABILITAS</th>
                                <th class="text-center" id="hr1"></th>
                                <th class="text-center" id="hr2"></th>
                                <th class="text-center" id="hr3"></th>
                                <th colspan="2" class="text-center" id="hr4"></th>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="7" class="text-center">EFISIENSI</th>
                            </tr>
                            <tr>
                                <td>a.</td>
                                <td>
                                    <strong>Biaya Operasional terhadap Pendapatan Operasional</strong><br/>
                                    Rasio biaya operasional terhadap pendapatan operasional merupakan perbandingan antara biaya operasional terhadap pendapatan operasional. Biaya operasional adalah biaya pokok ditambah dengan biaya usaha bagi anggota ditambah biaya perkoperasian. Untuk USP Koperasi, biaya perkoperasian dihitung secara proporsional. Semakin rendah nilai rasio  biaya operasional terhadap pendapatan operasional semakin baik nilai aspek efisiensi koperasi. Kategori optimal rasio biaya operasional pelayanan terhadap partisipasi bruto kurang dari 90%
                                </td>
                                <td class="text-center" id="kkr4"></td>
                                <td class="text-center" id="kkn4"></td>
                                <td class="text-center">80%</td>
                                <td class="text-center" id="kkk4"></td>
                                <td class="text-center" id="kks4"></td>
                            </tr>
                            <tr>
                                <td>b.</td>
                                <td>
                                    <strong>Biaya Usaha terhadap SHU Kotor</strong><br/>
                                    Rasio Biaya usaha terhadap SHU Kotor merupakan rasio yang mengukur perbandingan antara biaya usaha dengan SHU Kotor. Biaya usaha merupakan biaya tidak langsung yang muncul dari kegiatan dalam mendukung operasional KSP dan USP Koperasi. Biaya ini diharapkan tidak melebihi biaya pokok yang merupakan biaya langsung. Kategori optimal rasio biaya operasional pelayanan terhadap partisipasi bruto adalah kurang dari 40%
                                </td>
                                <td class="text-center" id="kkr5"></td>
                                <td class="text-center" id="kkn5"></td>
                                <td class="text-center">40%</td>
                                <td class="text-center" id="kkk5"></td>
                                <td class="text-center" id="kks5"></td>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">EFISIENSI KINERJA KEUANGAN</th>
                                <th class="text-center" id="he1"></th>
                                <th class="text-center" id="he2"></th>
                                <th class="text-center" id="he3"></th>
                                <th colspan="2" class="text-center" id="he4"></th>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">EVALUASI KINERJA KEUANGAN</th>
                                <th class="text-center" id="hekk1"></th>
                                <th class="text-center" id="hekk2"></th>
                                <th class="text-center" id="hekk3"></th>
                                <th colspan="2" class="text-center" id="hekk4"></th>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="7">MANAJEMEN KEUANGAN</th>
                            </tr>
                            <tr>
                                <th colspan="7" class="text-center">LIKUIDITAS</th>
                            </tr>
                            <tr>
                                <td>a.</td>
                                <td>
                                    <strong>Kas dan Bank terhadap Kewajiban Jangka Pendek</strong><br/>
                                    Rasio Kas dan bank terhadap kewajiban jangka pendek merupakan rasio yang menunjukkan perbandingan antara kas dan bank dengan kewajiban jangka pendek. Rasio kas dan bank terhadap kewajiban jangka pendek merupakan kemampuan dana yang paling likuid yang ada di koperasi dalam membayar kewajiban jangka pendeknya. Jumlah kas dan bank memang harus optimal, tidak juga terlalu besar karena dapat menimbulkan ketidakefisienan, namun juga tidak terlalu kecil karena ketika membayar kewajiban-kewajiban jangka pendek jangan sampai terhambat. Kategori optimal rasio kas dan bank terhadap kewajiban jangka pendek adalah sebesar 10%
                                </td>
                                <td class="text-center" id="kkr6"></td>
                                <td class="text-center" id="kkn6"></td>
                                <td class="text-center">10%</td>
                                <td class="text-center" id="kkk6"></td>
                                <td class="text-center" id="kks6"></td>
                            </tr>
                            <tr>
                                <td>b.</td>
                                <td>
                                    <strong>Piutang terhadap dana yang diterima</strong><br/>
                                    Rasio piutang yang diberikan terhadap dana yang diterima merupakan perbandingan piutang yang diberikan terhadap dana yang diterima. Rasio ini menunjukkan kemampuan koperasi yang seimbang dalam mengelola pinjaman yang diberikan serta kemampuan memperoleh pendanaan. Nilai rasio ini makin tinggi semakin baik. Kategori optimal rasio pinjaman yang diberikan terhaap dana yang diterima adalah sebesar 90%.
                                </td>
                                <td class="text-center" id="kkr7"></td>
                                <td class="text-center" id="kkn7"></td>
                                <td class="text-center">90%</td>
                                <td class="text-center" id="kkk7"></td>
                                <td class="text-center" id="kks7"></td>
                            </tr>
                            <tr>
                                <td>c</td>
                                <td>
                                    <strong>Aset Lancar terhadap Kewajiban Jangka Pendek</strong><br/>
                                    Rasio ini mengukur perbandingan aset lancar dengan kewajiban lancar. Makin tinggi nilai rasio ini menunjukkan tingkat likuiditas koperasi yang makin baik. Karena menunjukkan kemampuan aset lancar dalam memenuhi kewajiban jangka pendeknya. Kategori optimal rasio aset lancar terhadap kewajiban jangka pendek adalah sebesar 125%
                                </td>
                                <td class="text-center" id="kkr8"></td>
                                <td class="text-center" id="kkn8"></td>
                                <td class="text-center">125%</td>
                                <td class="text-center" id="kkk8"></td>
                                <td class="text-center" id="kks8"></td>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">LIKUIDITAS</th>
                                <th class="text-center" id="hl1"></th>
                                <th class="text-center" id="hl2"></th>
                                <th class="text-center" id="hl3"></th>
                                <th colspan="2" class="text-center" id="hl4"></th>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="7" class="text-center">MANAJEMEN AKTIVA DAN INVESTASI</th>
                            </tr>
                            <tr>
                                <td>a.</td>
                                <td>
                                    <strong>Perputaran Persediaan</strong><br/>
                                    Perputaran persediaan (inventory turnover ratio) mengukur kemampuan koperasi dalam menjual produknya dalam suatu periode tertentu dibandingkan dengan jumlah persediaan yang dimiliki. Rasio ini dikur dengan membandingkan harga pokok penjualan dibagi dengan jumlah persediaan. Rasio ini menunjukkan berapa kali persedian berputar sepanjang tahun.
                                </td>
                                <td class="text-center" id="kkr9"></td>
                                <td class="text-center" id="kkn9"></td>
                                <td class="text-center">10%</td>
                                <td class="text-center" id="kkk9"></td>
                                <td class="text-center" id="kks9"></td>
                            </tr>
                            <tr>
                                <td>b.</td>
                                <td>
                                    <strong>Periode Penagihan Rata-Rata</strong><br/>
                                    Periode Penagihan Rata-Rata (average collection period) merupakan rasio yang mengukur periode penagihan rata-rata koperasi. Untuk mengukur rasio ini dengan menggunkan formula Piutang/Penjualan per hari.
                                </td>
                                <td class="text-center" id="kkr10"></td>
                                <td class="text-center" id="kkn10"></td>
                                <td class="text-center">10%</td>
                                <td class="text-center" id="kkk10"></td>
                                <td class="text-center" id="kks10"></td>
                            </tr>
                            <tr>
                                <td>c</td>
                                <td>
                                    <strong>Perputaran Piutang</strong><br/>
                                    Perputaran Piutang merupakan rasio yang menunjukkan seberapa cepat koperasi melakukan penagihan piutangnya. Rasio ini dikur dengan membandingkan Penjualan dibagi dengan Piutang dagang. Semakin pendek waktu yang dinutuhkan semakin baik.
                                </td>
                                <td class="text-center" id="kkr11"></td>
                                <td class="text-center" id="kkn11"></td>
                                <td class="text-center">10%</td>
                                <td class="text-center" id="kkk11"></td>
                                <td class="text-center" id="kks11"></td>
                            </tr>
                            <tr>
                                <td>d.</td>
                                <td>
                                    <strong>Perputaran Total Modal</strong><br/>
                                    Perputaran Total Modal merupakan rasio yang mengukur kemampuan modal dalam meningkatkan penjualan. Rasio ini diukur dengan formula Penjualan dibagi dengan Total modal.
                                </td>
                                <td class="text-center" id="kkr12"></td>
                                <td class="text-center" id="kkn12"></td>
                                <td class="text-center">10%</td>
                                <td class="text-center" id="kkk12"></td>
                                <td class="text-center" id="kks12"></td>
                            </tr>
                            <tr>
                                <td>e.</td>
                                <td>
                                    <strong>Perputaran Total Aktiva.</strong><br/>
                                    Perputaran Total Aktiva merupakn rasio yang mengukur kemampuan dari total aset dalam berkontribusi bagi penjualan. Rasio ini diukur dengan membandingkan Penjualan dengan Total aktiva.
                                </td>
                                <td class="text-center" id="kkr13"></td>
                                <td class="text-center" id="kkn13"></td>
                                <td class="text-center">10%</td>
                                <td class="text-center" id="kkk13"></td>
                                <td class="text-center" id="kks13"></td>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">MANAJEMEN AKTIVA DAN INVESTASI</th>
                                <th class="text-center" id="ai1"></th>
                                <th class="text-center" id="ai2"></th>
                                <th class="text-center" id="ai3"></th>
                                <th colspan="2" class="text-center" id="ai4"></th>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">MANAJEMEN KEUANGAN</th>
                                <th class="text-center" id="hmk1"></th>
                                <th class="text-center" id="hmk2"></th>
                                <th class="text-center" id="hmk3"></th>
                                <th colspan="2" class="text-center" id="hmk4"></th>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="7">KESINAMBUNGAN KEUANGAN</th>
                            </tr>
                            <tr>
                                <th colspan="7" class="text-center">PERTUMBUHAN</th>
                            </tr>
                            <tr>
                                <td>a.</td>
                                <td>
                                    <strong>Pertumbuhan Aset</strong><br/>
                                    Rasio Kas dan bank terhadap kewajiban jangka pendek merupakan rasio yang menunjukkan perbandingan antara kas dan bank dengan kewajiban jangka pendek. Rasio kas dan bank terhadap kewajiban jangka pendek merupakan kemampuan dana yang paling likuid yang ada di koperasi dalam membayar kewajiban jangka pendeknya. Jumlah kas dan bank memang harus optimal, tidak juga terlalu besar karena dapat menimbulkan ketidakefisienan, namun juga tidak terlalu kecil karena ketika membayar kewajiban-kewajiban jangka pendek jangan sampai terhambat. Kategori optimal rasio kas dan bank terhadap kewajiban jangka pendek adalah sebesar 10%
                                </td>
                                <td class="text-center" id="kkr14"></td>
                                <td class="text-center" id="kkn14"></td>
                                <td class="text-center">5%</td>
                                <td class="text-center" id="kkk14"></td>
                                <td class="text-center" id="kks14"></td>
                            </tr>
                            <tr>
                                <td>b.</td>
                                <td>
                                    <strong>Pertumbuhan Ekuitas </strong><br/>
                                    Rasio Pertumbuhan ekuitas mengukur perubahan dari ekuitas  tahun berjalan dengan tahun sebelumnya. Semakin tinggi nilai rasio ini semakin baik. Kategori optimal rasio pertumbuhan ekuitas adalah sebesar 5%.
                                </td>
                                <td class="text-center" id="kkr15"></td>
                                <td class="text-center" id="kkn15"></td>
                                <td class="text-center">5%</td>
                                <td class="text-center" id="kkk15"></td>
                                <td class="text-center" id="kks15"></td>
                            </tr>
                            <tr>
                                <td>c</td>
                                <td>
                                    <strong>Pertumbuhan Hasil Usaha Bersih</strong><br/>
                                    Rasio Pertumbuhan Hasil Usaha Bersih merupakan rasio yang membandingkan antara hasil usaha bersih tahun tertentu dengan hasil usaha bersih tahun sebelumnya. Nilai yang tumbuh secara positif pada setiap tahunnya menunjukkan kondisi yang baik. Namun sebaliknya kondisi yang negatif menunjukkan kondisi yang kurang baik. Kategori optimal rasio pertumbuhan hasil usaha bersih sebesar 5%.
                                </td>
                                <td class="text-center" id="kkr16"></td>
                                <td class="text-center" id="kkn16"></td>
                                <td class="text-center">5%</td>
                                <td class="text-center" id="kkk16"></td>
                                <td class="text-center" id="kks16"></td>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">PERTUMBUHAN</th>
                                <th class="text-center" id="pt1"></th>
                                <th class="text-center" id="pt2"></th>
                                <th class="text-center" id="pt3"></th>
                                <th colspan="2" class="text-center" id="pt4"></th>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="7" class="text-center">ASPEK JATIDIRI</th>
                            </tr>
                            <tr>
                                <td>a.</td>
                                <td>
                                    <strong>Pendapatan Utama terhadap Total Pendapatan</strong><br/>
                                    Rasio pendapatan utama terhadap total pendapatan merupakan rasio yang membandingkan antara pendapatan operasional utama dengan total pendapatan. Semakin tinggi nilai ini semakin baik sebab sumber utama pendapatan adalah dari pinjaman yang diberikan kepada anggota. Kategori optomal rasio pendapatan utama terhadap total pendapatan adalah sebesar 85%
                                </td>
                                <td class="text-center" id="kkr17"></td>
                                <td class="text-center" id="kkn17"></td>
                                <td class="text-center">85%</td>
                                <td class="text-center" id="kkk17"></td>
                                <td class="text-center" id="kks17"></td>
                            </tr>
                            <tr>
                                <td>b.</td>
                                <td>
                                    <strong>SHU Bersih terhadap Simpanan Pokok dan Simpanan Wajib</strong><br/>
                                    Members Share Capital effect menunjukkan perbandingan SHU Bersih dengan simpanan pokok dan simpanan wajib. Rasio ini menunjukan kontribusi modal yang berasal dari anggota terhadap keuntungan. Selain itu, rasio ini menunjukan seberapa jauh tanggungan akhir yang dipikul oleh anggota ketika terjadi risiko. Kategori Optimal rasio members share capital effect sebesar 30%
                                </td>
                                <td class="text-center" id="kkr18"></td>
                                <td class="text-center" id="kkn18"></td>
                                <td class="text-center">30%</td>
                                <td class="text-center" id="kkk18"></td>
                                <td class="text-center" id="kks18"></td>
                            </tr>
                            <tr>
                                <td>c</td>
                                <td>
                                    <strong>Partisipasi Simpanan Anggota</strong><br/>
                                    Rasio partisipasi simpanan anggota menunjukkan tingkat keaktifan anggota dalam hal simpanan. Kategori optimal rasio partisipasi simpanan anggota sebesar 75%
                                </td>
                                <td class="text-center" id="kkr19"></td>
                                <td class="text-center" id="kkn19"></td>
                                <td class="text-center">75%</td>
                                <td class="text-center" id="kkk19"></td>
                                <td class="text-center" id="kks19"></td>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">JATIDIRI</th>
                                <th class="text-center" id="jd1"></th>
                                <th class="text-center" id="jd2"></th>
                                <th class="text-center" id="jd3"></th>
                                <th colspan="2" class="text-center" id="jd4"></th>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">KESINAMBUNGAN KEUANGAN</th>
                                <th class="text-center" id="hkk1"></th>
                                <th class="text-center" id="hkk2"></th>
                                <th class="text-center" id="hkk3"></th>
                                <th colspan="2" class="text-center" id="hkk4"></th>
                            </tr>
                            <tr>
                                <th colspan="7"></th>
                            </tr>
                            <tr>
                                <th colspan="2">KINERJA KEUANGAN</th>
                                <th class="text-center" id="ha1"></th>
                                <th class="text-center" id="ha2"></th>
                                <th class="text-center" id="ha3"></th>
                                <th colspan="2" class="text-center" id="ha4"></th>
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
        <script src="{{ asset('js/keuangan.js') }}"></script>
    @endpush

@endsection
