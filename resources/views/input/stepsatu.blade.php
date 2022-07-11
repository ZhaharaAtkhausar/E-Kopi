@extends('layouts.main')
@section('title', 'Input Data')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><strong> Input Tata Kelola </strong></h3>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" id="frmTataKelola" method="post">
                            @csrf
                            <h5 class="text-center" ><strong>Prinsip Koperasi</strong></h5>
                            <hr>
                            <div class="row">
                                <div class="col-md-5">
                                    <h6><strong> 1. Keanggotaan bersifat terbuka </strong></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Kepatuhan Koperasi untuk menerima/pengunduran anggota secara sukarela (tidak ada paksaan)  yang tercantum dalam anggaran dasar dan anggaran rumah tangga </h6>
                                        <select class="form-control" id="pk_1a" name="pk_1a">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Kepatuhan Koperasi untuk menerima/Pengunduran anggota secara terbuka (bagi semua etnis, suku agama dan lain-lain) yang tercantum dalam anggaran dasar dan anggaran rumah tangga </h6>
                                        <select class="form-control" id="pk_1b" name="pk_1b">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Jumlah tambahan anggota baru yang masuk lebih besar daripada jumlah anggota yang keluar/mengundurkan diri </h6>
                                        <select class="form-control" id="pk_1c" name="pk_1c">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Dokumen pendukung terkait dengan penerimaan dan pengunduruan anggota valid </h6>
                                        <select class="form-control" id="pk_1d" name="pk_1d">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <h6 class="text-justify"><strong> 2. Pengelolaan dilakukan secara demokratis </strong></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-center">Kepatuhan Koperasi dalam pengambilan keputusan dan penetapan kebijakan koperasi, dilakukan oleh anggota secara demokratis One man one vote, dalam Rapat Anggota</h6>
                                        <select class="form-control" id="pk_2a" name="pk_2a">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Kepatuhan Koperasi dalam pengelolaan koperasi, dilakukan oleh anggota secara demokratis One man one vote, dalam Rapat Anggota</h6>
                                        <select class="form-control" id="pk_2b" name="pk_2b">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Semua anggota berhak dipilih dan memilih untuk menjadi pengurus koperasi </h6>
                                        <select class="form-control" id="pk_2c" name="pk_2c">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Semua anggota berhak dipilih dan memilih untuk menjadi pengawas koperasi  </h6>
                                        <select class="form-control" id="pk_2d" name="pk_2d">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Keterlibatan anggota dalam menetapkan peraturan  </h6>
                                        <select class="form-control" id="pk_2e" name="pk_2e">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-center"><strong> 3. Pembagian sisa hasil usaha dilakukan secara adil sebanding dengan besarnya jasa usaha masing-masing anggota</strong></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-center">Kepatuhan Koperasi membagi SHU dan bagian SHU untuk anggota dibagi proprosional dengan besarnya jasa usaha yang ketentuannya tercantum dalam AD/ART </h6>
                                        <select class="form-control" id="pk_3a" name="pk_3a">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Kepatuhan Koperasi membagi SHU dan bagian SHU untuk anggota dibagi proprosional dengan besarnya modal anggota kepada koperasi yang ketentuannya tercantum dalam AD/ART </h6>
                                        <select class="form-control" id="pk_3b" name="pk_3b">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Kepatuhan Koperasi membagi SHU dan bagian SHU untuk anggota dibagi tidak dibagi sama rata, yang ketentuannya tercantum dalam AD/ART </h6>
                                        <select class="form-control" id="pk_3c" name="pk_3c">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-justify"><strong> 4. Pemberian balas jasa yang terbatas terhadap modal</strong></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Kepatuhan koperasi terkait dengan simpanan sukarela diberikan balas jasa atau imbalan terbatas berupa imbalan (bunga) yang wajar dan disepakati di dalam Rapat Anggota </h6>
                                        <select class="form-control" id="pk_4a" name="pk_4a">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Kepatuhan koperasi terkait dengan simpanan berjangka diberikan balas jasa atau imbalan terbatas berupa imbalan (bunga) yang wajar dan disepakati di dalam Rapat Anggota </h6>
                                        <select class="form-control" id="pk_4b" name="pk_4b">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Kepatuhan koperasi terkait dengan modal penyertaan diberikan balas jasa atau imbalan terbatas berupa imbalan (bunga) yang wajar dan disepakati di dalam Rapat Anggota </h6>
                                        <select class="form-control" id="pk_4c" name="pk_4c">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Koperasi mempunyai ketentuan/peraturan khusus terkait dengan balas jasa </h6>
                                        <select class="form-control" id="pk_4d" name="pk_4d">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-justify"><strong> 5. Kemandirian</strong></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Kepatuhan koperasi terkait dengan pengelolaan koperasi dilakukan atas dasar pada kemampuan dan kekuatan internal koperasi (mandiri) </h6>
                                        <select class="form-control" id="pk_5a" name="pk_5a">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Kepatuhan koperasi terkait dengan pengelolaan koperasi dilakukan atas dasar tidak tergantung oleh pihak eksternal </h6>
                                        <select class="form-control" id="pk_5b" name="pk_5b">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Kepatuhan koperasi terkait dengan pengelolaan koperasi bahwa bantuan dana hanya digunakan sebagai sarana bukan tujuan berkoperasi </h6>
                                        <select class="form-control" id="pk_5c" name="pk_5c">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Ketersedian dokumen pendukung aspek kemandirian </h6>
                                        <select class="form-control" id="pk_5d" name="pk_5d">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-justify"><strong> 6. Pengembangan Koperasi</strong></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi pengurus yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun </h6>
                                        <select class="form-control" id="pk_6a" name="pk_6a">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi pengawas yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun </h6>
                                        <select class="form-control" id="pk_6b" name="pk_6b">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi pengelola yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun </h6>
                                        <select class="form-control" id="pk_6c" name="pk_6c">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Kepatuhan koperasi untuk menyisihkan bagian SHU untuk kepentingan pendidikan dan pelatihan perkoperasian bagi pengelola yang terstruktur dan dilaksanakan secara rutin dan berjenjang setiap tahun </h6>
                                        <select class="form-control" id="pk_6d" name="pk_6d">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-justify"><strong> 7. Kerjasama Koperasi</strong></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Ada kerjasama yang dilakukan koperasi dalam bidang usaha baik antar koperasi dan institusi lainnya baik di tingkat kabupaten/kota, provinsi, nasional dan internasional </h6>
                                        <select class="form-control" id="pk_7a" name="pk_7a">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Ada kerjasama yang dilakukan koperasi dalam bidang permodalan baik antar koperasi dan institusi lainnya baik di tingkat kabupaten/kota, provinsi, nasional dan internasional </h6>
                                        <select class="form-control" id="pk_7b" name="pk_7b">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Ada kerjasama yang dilakukan koperasi dalam bidang organisasi dan pengembangan sumber daya manusia, pemasaran dan sistem informasi baik antar koperasi dan institusi lainnya baik di tingkat kabupaten/kota, provinsi, nasional dan internasional </h6>
                                        <select class="form-control" id="pk_7c" name="pk_7c">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Kerjasama yang dilakukan  telah memberikan kontribusi bagi kemajuan koperasi dan anggota </h6>
                                        <select class="form-control" id="pk_7d" name="pk_7d">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <h5 class="text-center"><strong>Kelembagaan</strong></h5>
                            <hr>

                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-justify"><strong> 1. Legalitas Badan Hukum Koperasi</strong></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Keabsahan dokumen badan hukum </h6>
                                        <select class="form-control" id="pk_21a" name="pk_21a">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Kesesuaian jenis usaha dengan dokumen badan hukum </h6>
                                        <select class="form-control" id="pk_21b" name="pk_21b">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Kesesuaian lokasi koperasi dengan dokumen badan hukum </h6>
                                        <select class="form-control" id="pk_21c" name="pk_21c">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-justify"><strong> 2. Izin Usaha Simpan Pinjam</strong></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Mengukur keabsahan dokumen Izin Usaha simpan pinjam </h6>
                                        <select class="form-control" id="pk_22a" name="pk_22a">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Mengukur keabsahan dokumen Kantor cabang </h6>
                                        <select class="form-control" id="pk_22b" name="pk_22b">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Ketersediaan papan nama  </h6>
                                        <select class="form-control" id="pk_22c" name="pk_22c">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-justify"><strong> 3. Anggaran Dasar </strong></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Daftar nama pendiri </h6>
                                        <select class="form-control" id="pk_23a" name="pk_23a">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Nama dan tempat kedudukan </h6>
                                        <select class="form-control" id="pk_23b" name="pk_23b">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Jenis koperasi </h6>
                                        <select class="form-control" id="pk_23c" name="pk_23c">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Maksud dan tujuan </h6>
                                        <select class="form-control" id="pk_23d" name="pk_23d">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Jangka waktu berdirinya </h6>
                                        <select class="form-control" id="pk_23e" name="pk_23e">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Keanggotaan </h6>
                                        <select class="form-control" id="pk_23f" name="pk_23f">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-left"> Ketentuan mengenai pembubaran, penyelesaian, dan hapusnya status badan hukum </h6>
                                        <select class="form-control" id="pk_23o" name="pk_23o">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <h6 class="text-justify"> Pengelolaan dan pengendalian </h6>
                                                <select class="form-control" id="pk_23l" name="pk_23l">
                                                    <option value="1">  Terpenuhi </option>
                                                    <option > Tidak Terpenuhi </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-group">
                                                <h6 class="text-justify">Rapat Anggota </h6>
                                                <select class="form-control" id="pk_23i" name="pk_23i">
                                                    <option value="1">  Terpenuhi </option>
                                                    <option value="0"> Tidak Terpenuhi </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <h6 class="text-justify">Permodalan </h6>
                                                <select class="form-control" id="pk_23h" name="pk_23h">
                                                    <option value="1">  Terpenuhi </option>
                                                    <option value="0"> Tidak Terpenuhi </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <h6 class="text-justify"> Pengurus </h6>
                                                <select class="form-control" id="pk_23j" name="pk_23j">
                                                    <option value="1">  Terpenuhi </option>
                                                    <option value="0"> Tidak Terpenuhi </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <h6 class="text-justify"> Pengawas </h6>
                                                <select class="form-control" id="pk_23k" name="pk_23k">
                                                    <option value="1">  Terpenuhi </option>
                                                    <option value="0"> Tidak Terpenuhi </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-left"> Jumlah setoran simpanan pokok  dan simpanan wajib sebagai modal awal </h6>
                                        <select class="form-control" id="pk_23g" name="pk_23g">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <h6 class="text-justify"> Bidang usaha </h6>
                                                <select class="form-control" id="pk_23m" name="pk_23m">
                                                    <option value="1">  Terpenuhi </option>
                                                    <option value="0"> Tidak Terpenuhi </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <h6 class="text-justify"> Pembagian sisa hasil usaha </h6>
                                                <select class="form-control" id="pk_23n" name="pk_23n">
                                                    <option value="1">  Terpenuhi </option>
                                                    <option value="0"> Tidak Terpenuhi </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <h6 class="text-justify"> Sanksi  </h6>
                                                <select class="form-control" id="pk_23p" name="pk_23p">
                                                    <option value="1">  Terpenuhi </option>
                                                    <option value="0"> Tidak Terpenuhi </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <h6 class="text-justify"> Persus </h6>
                                                <select class="form-control" id="pk_23q" name="pk_23q">
                                                    <option value="1">  Terpenuhi </option>
                                                    <option value="0"> Tidak Terpenuhi </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-justify"><strong> 4. Keanggotaan</strong></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Ketersediaan buku daftar anggota </h6>
                                        <select class="form-control" id="pk_24a" name="pk_24a">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Tidak terjadi penurunan anggota yang melebihi 9 orang </h6>
                                        <select class="form-control" id="pk_24b" name="pk_24b">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Tingkat keaktifan anggota baik dari aspek simpanan maupun pinjaman </h6>
                                        <select class="form-control" id="pk_24c" name="pk_24c">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Partisipasi dalam rapat anggota </h6>
                                        <select class="form-control" id="pk_24d" name="pk_24d">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-justify"><strong> 5. Kelengkapan Organisasi</strong></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Pelaksanaan Rapat anggota </h6>
                                        <select class="form-control" id="pk_25a" name="pk_25a">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Ketersediaan pengawas dan pengelola </h6>
                                        <select class="form-control" id="pk_25c" name="pk_25c">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Ketersediaan pengurus </h6>
                                        <select class="form-control" id="pk_25b" name="pk_25b">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <h5 class="text-center"><strong>Manajemen</strong></h5>
                            <hr>

                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-justify"><strong> 1. Manajemen Umum</strong></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Ketersedian visi, misi dan tujuan koperasi </h6>
                                        <select class="form-control" id="pk_31a" name="pk_31a">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Ketersedian rencana kerja baik jangka panjang dan jangka pendek </h6>
                                        <select class="form-control" id="pk_31b" name="pk_31b">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Pengukuran dan evaluasi atas rencana kerja </h6>
                                        <select class="form-control" id="pk_31c" name="pk_31c">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-justify"><strong> 2. Manajemen Kelembagaan</strong></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Ketersedian struktur organisasi </h6>
                                        <select class="form-control" id="pk_32a" name="pk_32a">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Ketersedian uraian tugas </h6>
                                        <select class="form-control" id="pk_32b" name="pk_32b">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Ketersediaan SOM dan SOP </h6>
                                        <select class="form-control" id="pk_32c" name="pk_32c">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Sistem pengamanan dokumen </h6>
                                        <select class="form-control" id="pk_32d" name="pk_32d">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-justify"><strong> 3. Manajemen Permodalan</strong></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Pertumbuhan modal sendiri </h6>
                                        <select class="form-control" id="pk_33a" name="pk_33a">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Pertumbuhan simpanan anggota </h6>
                                        <select class="form-control" id="pk_33b" name="pk_33b">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Peningkatan cadangan </h6>
                                        <select class="form-control" id="pk_33c" name="pk_33c">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Investasi bersumber dari modal sendir </h6>
                                        <select class="form-control" id="pk_33d" name="pk_33d">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-justify"><strong> 4. Manajemen Asset</strong></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Pembiayaan yang diberikan dengan dukungan agunan </h6>
                                        <select class="form-control" id="pk_34a" name="pk_34a">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Kolektibilitas pembayaran </h6>
                                        <select class="form-control" id="pk_34b" name="pk_34b">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Tingkat pengembalian pembiayaan macet masih dapat tertagih </h6>
                                        <select class="form-control" id="pk_34c" name="pk_34c">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Menjaga prinsip kehati-hatian dalam memberikan pinjman </h6>
                                        <select class="form-control" id="pk_34d" name="pk_34d">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="text-justify"><strong> 5. Manajemen Likuiditas</strong></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Memiliki kebijakan tertulis mengenai pengendalian likuiditas </h6>
                                        <select class="form-control" id="pk_35a" name="pk_35a">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Ketersediaan fasilitas pembiyaan dari lembaga keuangan lain </h6>
                                        <select class="form-control" id="pk_35b" name="pk_35b">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Peraturan khusus terkait standar likuiditas </h6>
                                        <select class="form-control" id="pk_35c" name="pk_35c">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Sistem informasi yang mendukung pemantauan likuiditas koperasi </h6>
                                        <select class="form-control" id="pk_35d" name="pk_35d">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="text-right">
                                <button id="btnNext" class="btn btn-info mr-2" type="submit">Selanjutnya</button>
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
            let kopId = localStorage.getItem('kopId');
            if (kopId == null) {
                window.location.href = '/input/pilih-koperasi';
            }

            $('#btnNext').click(function (e) {
                e.preventDefault();
                let data = {};

                $('#frmTataKelola').each(function (index, element) {
                    $('select').map(function() {
                        console.log(this.id);
                        console.log(this.value);

                        let nama = this.id;
                        let isi = this.value;

                        data[nama] = isi;
                        data['koperasi_id'] = kopId;
                    });
                });

                localStorage.setItem('tk', JSON.stringify(data));
                console.log(data);

                window.location.href = '/input/sertifikat/profilresiko';
            });
        });
        </script>
    @endpush
@endsection
