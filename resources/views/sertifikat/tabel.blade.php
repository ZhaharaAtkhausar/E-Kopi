<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print Tabel | E-Kopi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css" integrity="sha512-F7WyTLiiiPqvu2pGumDR15med0MDkUIo5VTVyyfECR5DZmCnDhti9q5VID02ItWjq6fvDfMaBaDl2J3WdL1uxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
</head>
<body>
      <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header row">
                    <div class="col col-sm-6">
                        <div class="card-search with-adv-search dropdown">
                        <select class="form-control select2" id="search">
                                <option id="hidden" selected> Pilih Koperasi </option>
                            @foreach ($koperasi as $kp)
                                <option value="{{ $kp->id }}">{{ $kp->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="col col-sm-6">
                        <div class="text-right">
                            <a href="#" class="btn btn-info mr-2" id="btncetak"> Cetak </a>
                        </div>
                    </div>
                </div>
                <div class="card-body" id="app">
                    <form id="frmdk">
                        <table id="tabledata" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th class="text-center">Aspek Pemeriksaan</th>
                                    <th class="text-center">Nilai</th>
                                    <th class="text-center">Rerata</th>
                                    <th class="text-center">Skor</th>
                                    <th class="text-center">Kriteria dan Kategori</th>
                                </tr>
                            </thead>
                            <tbody id="isibody">
                                <tr>
                                    <th>A</th>
                                    <th>
                                        <strong>TATA KELOLA</strong>
                                    </th>
                                    <th class="text-center" id="htk1"></th>
                                    <th class="text-center" id="htk2"></th>
                                    <th class="text-center" id="htk3"></th>
                                    <th class="text-center" id="htk4"></th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>1</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span>PRINSIP KOPERASI</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="hpk1"></td>
                                    <td class="text-center" id="hpk2"></td>
                                    <td class="text-center" id="hpk3"></td>
                                    <td class="text-center" id="hpk4"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>2</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span>KELEMBAGAAN</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="hk1"></td>
                                    <td class="text-center" id="hk2"></td>
                                    <td class="text-center" id="hk3"></td>
                                    <td class="text-center" id="hk4"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>3</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span>MANAJEMEN KOPERASI</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="hm1"></td>
                                    <td class="text-center" id="hm2"></td>
                                    <td class="text-center" id="hm3"></td>
                                    <td class="text-center" id="hm4"></td>
                                </tr>
                                <tr>
                                    <th>B</th>
                                    <th>
                                        <strong>PROFIL RISIKO</strong>
                                    </th>
                                    <th class="text-center" id="hpr1"></th>
                                    <th class="text-center" id="hpr2"></th>
                                    <th class="text-center" id="hpr3"></th>
                                    <th class="text-center" id="hpr4"></th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>1</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span>RISIKO INHEREN</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="hri1"></td>
                                    <td class="text-center" id="hri2"></td>
                                    <td class="text-center" id="hri3"></td>
                                    <td class="text-center" id="hri4"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>2</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span>KUALITAS PENERAPAN MANAJEMEN RISIKO</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="hmr1"></td>
                                    <td class="text-center" id="hmr2"></td>
                                    <td class="text-center" id="hmr3"></td>
                                    <td class="text-center" id="hmr4"></td>
                                </tr>
                                <tr>
                                    <th>C</th>
                                    <th>
                                        <strong>KINERJA KEUANGAN</strong>
                                    </th>
                                    <th class="text-center" id="ha1"></th>
                                    <th class="text-center" id="ha2"></th>
                                    <th class="text-center" id="ha3"></th>
                                    <th class="text-center" id="ha4"></th>
                                </tr>
                                <tr>
                                    <td>I</td>
                                    <td>
                                        <strong>EVALUASI KINERJA KEUANGAN</strong>
                                    </td>
                                    <td class="text-center" id="hekk1"></td>
                                    <td class="text-center" id="hekk2"></td>
                                    <td class="text-center" id="hekk3"></td>
                                    <td class="text-center" id="hekk4"></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        RENTABILITAS
                                    </td>
                                    <td class="text-center" id="hr1"></td>
                                    <td class="text-center" id="hr2"></td>
                                    <td class="text-center" id="hr3"></td>
                                    <td class="text-center" id="hr4"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>a</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span>Rentabilitas Aset (Return on Asset)</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr1"></td>
                                    <td class="text-center" id="kkn1"></td>
                                    <td class="text-center" id="kks1"></td>
                                    <td class="text-center" id="kkk1"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>b</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span>Rentabilitas Ekuitas (Return on Equity)</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr2"></td>
                                    <td class="text-center" id="kkn2"></td>
                                    <td class="text-center" id="kks2"></td>
                                    <td class="text-center" id="kkk2"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>c</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span>Kemandiriaan Operasional</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr3"></td>
                                    <td class="text-center" id="kkn3"></td>
                                    <td class="text-center" id="kks3"></td>
                                    <td class="text-center" id="kkk3"></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        EFISIENSI
                                    </td>
                                    <td class="text-center" id="he1"></td>
                                    <td class="text-center" id="he2"></td>
                                    <td class="text-center" id="he3"></td>
                                    <td class="text-center" id="he4"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>a</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span> Biaya Operasioanal terhadap Pendapatan Operasional </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr4"></td>
                                    <td class="text-center" id="kkn4"></td>
                                    <td class="text-center" id="kks4"></td>
                                    <td class="text-center" id="kkk4"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>b</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span> Biaya Usaha terhadap SHU Kotor </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr5"></td>
                                    <td class="text-center" id="kkn5"></td>
                                    <td class="text-center" id="kks5"></td>
                                    <td class="text-center" id="kkk5"></td>
                                </tr>
                                <tr>
                                    <td>II</td>
                                    <td>
                                        <strong>MANAJEMEN KEUANGAN</strong>
                                    </td>
                                    <td class="text-center" id="hmk1"></td>
                                    <td class="text-center" id="hmk2"></td>
                                    <td class="text-center" id="hmk3"></td>
                                    <td class="text-center" id="hmk4"></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        LIKUIDITAS
                                    </td>
                                    <td class="text-center" id="hl1"></td>
                                    <td class="text-center" id="hl2"></td>
                                    <td class="text-center" id="hl3"></td>
                                    <td class="text-center" id="hl4"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>a</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span>Kas dan Bank terhadap Kewajiban Jangka Pendek</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr6"></td>
                                    <td class="text-center" id="kkn6"></td>
                                    <td class="text-center" id="kks6"></td>
                                    <td class="text-center" id="kkk6"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>b</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span> Piutang terhadap dana yang diterima </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr7"></td>
                                    <td class="text-center" id="kkn7"></td>
                                    <td class="text-center" id="kks7"></td>
                                    <td class="text-center" id="kkk7"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>c</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span> Aset Lancar terhadap Kewajiban Jangka Pendek </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr8"></td>
                                    <td class="text-center" id="kkn8"></td>
                                    <td class="text-center" id="kks8"></td>
                                    <td class="text-center" id="kkk8"></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        MANAJEMEN AKTIVA DAN INVESTASI
                                    </td>
                                    <td class="text-center" id="ai1"></td>
                                    <td class="text-center" id="ai2"></td>
                                    <td class="text-center" id="ai3"></td>
                                    <td class="text-center" id="ai4"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>a</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span>Perputaran Persediaan</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr9"></td>
                                    <td class="text-center" id="kkn9"></td>
                                    <td class="text-center" id="kks9"></td>
                                    <td class="text-center" id="kkk9"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>b</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span> Periode Penagihan Rata-Rata </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr10"></td>
                                    <td class="text-center" id="kkn10"></td>
                                    <td class="text-center" id="kks10"></td>
                                    <td class="text-center" id="kkk10"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>c</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span> Perputaran Piutang </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr11"></td>
                                    <td class="text-center" id="kkn11"></td>
                                    <td class="text-center" id="kks11"></td>
                                    <td class="text-center" id="kkk11"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>d</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span> Perputaran Total Aktiva </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr12"></td>
                                    <td class="text-center" id="kkn12"></td>
                                    <td class="text-center" id="kks12"></td>
                                    <td class="text-center" id="kkk12"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>e</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span> Perputaran Total Aktiva </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr13"></td>
                                    <td class="text-center" id="kkn13"></td>
                                    <td class="text-center" id="kks13"></td>
                                    <td class="text-center" id="kkk13"></td>
                                </tr>
                                <tr>
                                    <td>III</td>
                                    <td>
                                        <strong>KESINAMBUNGAN KEUANGAN</strong>
                                    </td>
                                    <td class="text-center" id="hkk1"></td>
                                    <td class="text-center" id="hkk2"></td>
                                    <td class="text-center" id="hkk3"></td>
                                    <td class="text-center" id="hkk4"></td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        PERTUMBUHAN
                                    </td>
                                    <td class="text-center" id="pt1"></td>
                                    <td class="text-center" id="pt2"></td>
                                    <td class="text-center" id="pt3"></td>
                                    <td class="text-center" id="pt4"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>a</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span>Pertumbuhan Aset</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr14"></td>
                                    <td class="text-center" id="kkn14"></td>
                                    <td class="text-center" id="kks14"></td>
                                    <td class="text-center" id="kkk14"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>b</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span> Pertumbuhan Ekuitas </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr15"></td>
                                    <td class="text-center" id="kkn15"></td>
                                    <td class="text-center" id="kks15"></td>
                                    <td class="text-center" id="kkk15"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>c</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span> Pertumbuhan Hasil Usaha Bersih </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr16"></td>
                                    <td class="text-center" id="kkn16"></td>
                                    <td class="text-center" id="kks16"></td>
                                    <td class="text-center" id="kkk16"></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        ASPEK JATIDIRI
                                    </td>
                                    <td class="text-center" id="jd1"></td>
                                    <td class="text-center" id="jd2"></td>
                                    <td class="text-center" id="jd3"></td>
                                    <td class="text-center" id="jd4"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>a</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span>Pendapatan Utama terhadap Total Pendapatan</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr17"></td>
                                    <td class="text-center" id="kkn17"></td>
                                    <td class="text-center" id="kks17"></td>
                                    <td class="text-center" id="kkk17"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>b</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span> SHU Bersih terhadap Simpanan Pokok dan Simpanan Wajib </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr18"></td>
                                    <td class="text-center" id="kkn18"></td>
                                    <td class="text-center" id="kks18"></td>
                                    <td class="text-center" id="kkk18"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>c</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span> Partisipasi Simpanan Anggota </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kkr19"></td>
                                    <td class="text-center" id="kkn19"></td>
                                    <td class="text-center" id="kks19"></td>
                                    <td class="text-center" id="kkk19"></td>
                                </tr>
                                <tr>
                                    <th>D</th>
                                    <th>
                                        <strong>PERMODALAN</strong>
                                    </th>
                                    <th class="text-center" id="hp1"></th>
                                    <th class="text-center" id="hp2"></th>
                                    <th class="text-center" id="hp3"></th>
                                    <th class="text-center" id="hp4"></th>
                                </tr>
                                <tr>
                                    <td>I</td>
                                    <td>
                                        <strong>KECUKUPAN PERMODALAN</strong>
                                    </td>
                                    <td class="text-center" id="hkp1"></td>
                                    <td class="text-center" id="hkp2"></td>
                                    <td class="text-center" id="hkp3"></td>
                                    <td class="text-center" id="hkp4"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>a</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span> Ekuitas terhadap Total Aset </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kpr1"></td>
                                    <td class="text-center" id="kpn1"></td>
                                    <td class="text-center" id="kps1"></td>
                                    <td class="text-center" id="kpk1"></td>
                                </tr>
                                <tr>
                                    <td>II</td>
                                    <td>
                                        <strong>KECUKUPAN PENGELOLAAN PERMODALAN</strong>
                                    </td>
                                    <td class="text-center" id="hkpp1"></td>
                                    <td class="text-center" id="hkpp2"></td>
                                    <td class="text-center" id="hkpp3"></td>
                                    <td class="text-center" id="hkpp4"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>a</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span> Modal Pinjaman Anggota terhadap Total Aset </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kppr1"></td>
                                    <td class="text-center" id="kppn1"></td>
                                    <td class="text-center" id="kpps1"></td>
                                    <td class="text-center" id="kppk1"></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-md-1">
                                                <span>b</span>
                                            </div>
                                            <div class="col-md-10">
                                                <span> Kewajiban Jangka Panjang terhadap Ekuitas </span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center" id="kppr2"></td>
                                    <td class="text-center" id="kppn2"></td>
                                    <td class="text-center" id="kpps2"></td>
                                    <td class="text-center" id="kppk2"></td>
                                </tr>
                                <tr>
                                    <td colspan="6"></td>
                                </tr>
                                <tr>
                                    <th colspan="2">
                                        <strong>NILAI SKOR & PREDIKAT PEMERIKSAAN KESEHATAN</strong>
                                    </th>
                                    <th class="text-center" id="op1"></th>
                                    <th class="text-center" id="op2"></th>
                                    <th class="text-center" id="op3"></th>
                                    <th class="text-center" id="op4"></th>
                                </tr>
                            </tbody>
                        </table>
                    <form>
                </div>
            </div>
        </div>
      </div>
      <br/>

      <div class="row">
        <div class="col-md-4" style="float:left; margin-left: 30px width: 17rem;">
            <div class="card border-0" style="height: 14rem;">
                <div class="card-header bg-transparent border-0 text-center">Petugas Nilai</div>
                <div class="card-body">

                </div>
                <div class="card-footer bg-transparent border-top border-secondary"><hr/></div>
            </div>
        </div>
        <div class="col-md-4" style="float:left; margin-left: 30px width: 17rem;">
            <div class="card border-0" style="height: 14rem;">
                <div class="card-header bg-transparent border-0 text-center">Verifikasi</div>
                <div class="card-body">

                </div>
                <div class="card-footer bg-transparent border-top border-secondary"><hr class="height: 3px; background-color: #000000; color: #000000;"></div>
            </div>
        </div>
        <div class="col-md-4" style="float:left; margin-left: 30px width: 17rem;">
            <div class="card border-0" style="height: 14rem;">
                <div class="card-header bg-transparent border-0 text-center">Koordinator</div>
                <div class="card-body">

                </div>
                <div class="card-footer bg-transparent border-top border-secondary"><hr/></div>
            </div>
        </div>
      </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <script src="{{ asset('plugins/select2/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('js/product.js') }}"></script>
    <script src="{{ asset('js/tksehat.js') }}"></script>
    <script src="{{ asset('js/prsehat.js') }}"></script>
    <script src="{{ asset('js/keuangan.js') }}"></script>
    <script src="{{ asset('js/permodalan.js') }}"></script>
    <script src="{{ asset('js/sertifikat.js') }}"></script>
    <script>
        localStorage.clear();
        function cetak() {
          print({
            printable: "#app",
            type: "html",
            onPrintDialogClose: () => alert("Data Berhasil dicetak.")
          });
          window.location.href = "/koperasi/tabelkesehatan";
        }
        document.getElementById("btncetak").addEventListener("click", cetak);
    </script>
</body>
</html>
