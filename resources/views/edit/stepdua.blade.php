@extends('layouts.main')
@section('title', 'Input Data')
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><strong> Input Profil Resiko </strong></h3>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" id="frmProfilResiko" method="post">
                            @csrf
                            <h5 class="text-center"><strong>Risiko Operasional</strong></h5>
                            <hr>
                            <br/>
                            {{-- inputan no 1.1:1 --}}
                            <h6 class="text-justify"><strong>1. Skala usaha dan struktur organisasi</strong></h6>

                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Skala usaha koperasi didukung dengan kapasitas sumber daya yang cukup dan memadai. </h6>
                                        <select class="form-control" id="ro_a1" name="ro_a1">
                                            <option value="1">  Terpenuhi </option>
                                            <option value="0"> Tidak Terpenuhi </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Struktur organisasi terpenuhi lengkap sesuai ketentuan tata kelola Koperasi. </h6>
                                        <select name="ro_a2" class="form-control" id="ro_a2">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Terdapat peran aktif dari  pihak yang terdapat pada struktur organisasi koperasi. </h6>
                                        <select class="form-control" id="ro_a3" name="ro_a3">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Pihak yang tercantum dalam struktur organisasi memberikan kontribusi positif atas uraian tugas yang diberikan </h6>
                                        <select name="ro_a4" class="form-control" id="ro_a4">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            {{-- inputan no 1.1:2 --}}
                            <h6 class="text-justify"><strong>2. Keberagaman produk dan/atau jasa</strong></h6>
                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Koperasi memiliki produk/jasa yang beragam selain kegiatan usaha utama. </h6>
                                        <select name="ro_b1" class="form-control" id="ro_b1">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Layanan produk/jasa selain yang utama didukung dengan kemampuan dan keahlian internal koperasi. </h6>
                                        <select name="ro_b2" class="form-control" id="ro_b2">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Layanan produk/jasa selain yang utama masih sesuai dengan pelayanan utama koperasi</h6>
                                        <select name="ro_b3" class="form-control" id="ro_b3">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Ragam layanan produk/jasa dilaksanakan secara langsung dengan dukungan sumber daya koperasi.</h6>
                                        <select name="ro_b4" class="form-control" id="ro_b4">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            <hr>
                            <h5 class="text-center"><strong>RISIKO KEPATUHAN</strong></h5>
                            <hr>
                            <br/>

                            {{-- inputan no 1.2:1 --}}
                            <h6 class="text-justify"><strong>1. Jenis, signifikansi, dan frekuensi pelanggaran yang dilakukan koperasi</strong></h6>
                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Tidak terdapat pelanggaran yang dilakukan koperasi selama periode penilaian.</h6>
                                        <select name="rk_a1" class="form-control" id="rk_a1">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Koperasi tidak dalam hukuman sanksi.</h6>
                                        <select name="rk_a2" class="form-control" id="rk_a2">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Koperasi tidak dalam proses hukum karena pelanggaran kepatuhan koperasi.</h6>
                                        <select name="rk_a3" class="form-control" id="rk_a3">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Koperasi tidak dalam proses hukum karena pelanggaran kepatuhan koperasi dan berakibat kepada tindakan pidana.</h6>
                                        <select name="rk_a4" class="form-control" id="rk_a4">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            {{-- inputan no 1.2:2 --}}
                            <h6 class="text-justify"><strong>2. Signifikansi tindak lanjut atas temuan pelanggaran</strong></h6>

                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Ada evaluasi atas temuan pelanggaran sebelumnya.</h6>
                                        <select name="rk_b1" class="form-control" id="rk_b1">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Temuan pelanggaran ditindaklanjuti untuk perbaikan.</h6>
                                        <select name="rk_b2" class="form-control" id="rk_b2">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Tidak terdapat pelanggaran berulang atas pelanggaran sebelumnya.</h6>
                                        <select name="rk_b3" class="form-control" id="rk_b3">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Terdapat penurunan frekuensi pelanggaran.</h6>
                                        <select name="rk_b4" class="form-control" id="rk_b4">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            <hr>
                            <h5 class="text-center"><strong>RISIKO LIKUIDITAS</strong></h5>
                            <hr>
                            <br/>

                            {{-- input no 1.3:1 --}}
                            <h6 class="text-justify"><strong>1. Penilaian terhadap seberapa luas atau seberapa besar koperasi memiliki komitmen pendanaan yang dapat digunakan jika dibutuhkan</strong></h6>
                            <br/>

                            <div class="row">
                                <div class="col-sm-3 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Reputasi Koperasi sangat baik.</h6>
                                        <select name="rl_a2" class="form-control" id="rl_a2">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <h6 class="text-justify">Akses koperasi pada sumber pendanaan sangat memadai.</h6>
                                        <select name="rl_a1" class="form-control" id="rl_a1">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <h6 class="text-justify">Terdapat potensi untuk modal penyertaan.</h6>
                                        <select name="rl_a5" class="form-control" id="rl_a5">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Pinjaman bank yang sewaktu-waktu dapat ditarik sangat memadai.</h6>
                                        <select name="rl_a3" class="form-control" id="rl_a3">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Terdapat komitmen/ dukungan dari anggota koperasi untuk sumber pinjaman anggota</h6>
                                        <select name="rl_a4" class="form-control" id="rl_a4">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            <hr/>
                            <h5 class="text-center"><strong> Kualitas Penerapan Manajemen Risiko Operasional</strong></h5>
                            <hr>
                            <br/>

                            {{-- input no 2.a:1 --}}
                            <h6 class="text-justify"><strong>1. Pengawasan oleh pengurus dan pengawas koperasi</strong></h6>

                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Pengawas telah memberikan persetujuan terhadap kebijakan Manajemen Risiko operasional yang disusun oleh pengurus dan melakukan evaluasi secara berkala</h6>
                                        <select name="kpmro_a1" class="form-control" id="kpmro_a1">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Pengurus telah menyusun kebijakan Manajemen Risiko operasional, melaksanakan secara konsisten, dan melakukan pengkinian secara berkala</h6>
                                        <select name="kpmro_a2" class="form-control" id="kpmro_a2">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Pengurus telah menyusun kebijakan Manajemen Risiko operasional, melaksanakan secara konsisten, dan melakukan pengkinian secara berkala</h6>
                                        <select name="kpmro_a3" class="form-control" id="kpmro_a3">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Pengurus memiliki kemampuan untuk mengambil tindakan yang diperlukan dalam rangka mitigasi Risiko operasional</h6>
                                        <select name="kpmro_a4" class="form-control" id="kpmro_a4">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            {{-- input no 2.b:2 --}}
                            <h6 class="text-justify"><strong>2. Kebijakan, Prosedur dan Limit Risiko</strong></h6>

                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Koperasi telah memiliki kecukupan organisasi yang menangani fungsi operasional dan fungsi Manajemen Risiko operasional.</h6>
                                        <select name="kpmro_b1" class="form-control" id="kpmro_b1">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Koperasi memiliki prosedur Manajemen Risiko operasional dan penetapan limit Risiko operasional yang ditetapkan oleh pengurus.</h6>
                                        <select name="kpmro_b2" class="form-control" id="kpmro_b2">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-10 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Pengurus telah menerapkan kebijakan pengelolaan SDM dalam rangka penerapan Manajemen Risiko operasional.</h6>
                                        <select name="kpmro_b3" class="form-control" id="kpmro_b3">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            {{-- inputan no 2.c:3 --}}
                            <h6 class="text-justify"><strong>3. Proses dan Sistem Informasi Manajemen Risiko</strong></h6>

                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Koperasi telah memiliki sistem informasi Manajemen Risiko yang mendukung pengurus dalam pengambilan keputusan terkait Risiko operasional.</h6>
                                        <select name="kpmro_c1" class="form-control" id="kpmro_c1">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Sistem pengendalian intern terhadap Risiko operasional telah dilaksanakan.</h6>
                                        <select name="kpmro_c2" class="form-control" id="kpmro_c2">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Koperasi memiliki kebijakan dan prosedur penyelenggaraan teknologi informasi terkait mitigasi risiko operasional.</h6>
                                        <select name="kpmro_c3" class="form-control" id="kpmro_c3">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Melaksanakan audit secara berkala terhadap penerapan Manajemen Risiko operasional, menyampaikan laporan hasil audit intern, dan memastikan tindaklanjut atas temuan pemeriksaan.</h6>
                                        <select name="kpmro_c4" class="form-control" id="kpmro_c4">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            <hr>
                            <h5 class="text-center"><strong>Kualitas Penerapan Manajemen Risiko Kepatuhan</strong></h5>
                            <hr><br/>

                            {{-- input no 3.a:1 --}}
                            <h6 class="text-justify"><strong>1. Pengawasan oleh pengurus dan pengawas koperasi</strong></h6>

                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Pengawas telah memberikan persetujuan terhadap kebijakan Manajemen Risiko kepatuhan yang disusun oleh pengurus dan melakukan evaluasi secara berkala.</h6>
                                        <select name="kpmrk_a1" class="form-control" id="kpmrk_a1">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Pengawas melakukan evaluasi terhadap pertanggungjawaban pengurus atas pelaksanaan kebijakan Manajemen Risiko kepatuhan secara berkala dan memastikan tindak lanjut hasil evaluasi pada rapat anggota.</h6>
                                        <select name="kpmrk_a2" class="form-control" id="kpmrk_a2">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Pengurus telah menyusun kebijakan Manajemen Risiko kepatuhan, melaksanakan secara konsisten, dan melakukan pengkinian secara berkala.</h6>
                                        <select name="kpmrk_a3" class="form-control" id="kpmrk_a3">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Pengurus memiliki kemampuan untuk mengambil tindakan yang diperlukan dalam rangka mitigasi Risiko kepatuhan.</h6>
                                        <select name="kpmrk_a4" class="form-control" id="kpmrk_a4">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            {{-- input no 3.b:2 --}}
                            <h6 class="text-justify"><strong>2. Kebijakan, Prosedur dan Limit Risiko</strong></h6>

                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Koperasi telah memiliki kecukupan organisasi yang menangani fungsi operasional dan fungsi Manajemen Risiko kepatuhan.</h6>
                                        <select name="kpmrk_b1" class="form-control" id="kpmrk_b1">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Koperasi memiliki prosedur Manajemen Risiko kepatuhan dan penetapan limit Risiko kepatuhan yang ditetapkan oleh pengurus</h6>
                                        <select name="kpmrk_b2" class="form-control" id="kpmrk_b2">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Pengurus telah menerapkan kebijakan pengelolaan SDM dalam rangka penerapan Manajemen Risiko kepatuhan.</h6>
                                        <select name="kpmrk_b3" class="form-control" id="kpmrk_b3">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Pengurus telah menyusun kebijakan internal yang mendukung terselenggaranya fungsi kepatuhan, memberikan perhatian terhadap ketentuan peraturan perundang- undangan perkoperasian.</h6>
                                        <select name="kpmrk_b4" class="form-control" id="kpmrk_b4">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            {{-- input no 3.c:3 --}}
                            <h6 class="text-justify"><strong>3. Proses dan Sistem Informasi Manajemen Risiko</strong></h6>

                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Koperasi telah memiliki sistem informasi Manajemen Risiko yang mendukung pengurus dalam pengambilan keputusan terkait Risiko kepatuhan.</h6>
                                        <select name="kpmrk_c1" class="form-control" id="kpmrk_c1">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Sistem pengendalian intern terhadap Risiko kepatuhan telah dilaksanakan</h6>
                                        <select name="kpmrk_c2" class="form-control" id="kpmrk_c2">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Koperasi memiliki kebijakan dan prosedur penyelenggaraan teknologi informasi terkait mitigasi</h6>
                                        <select name="kpmrk_c3" class="form-control" id="kpmrk_c3">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Melaksanakan audit secara berkala terhadap penerapan Manajemen Risiko kepatuhan, menyampaikan laporan hasil audit intern, dan memastikan tindaklanjut atas temuan pemeriksaan.</h6>
                                        <select name="kpmrk_c4" class="form-control" id="kpmrk_c4">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            <hr>
                            <h5 class="text-center"><strong>Kualitas Penerapan Manajemen Risiko Likuiditas Risiko likuiditas</strong></h5>
                            <hr><br/>

                            {{-- input no 4.a:1 --}}
                            <h6 class="text-justify"><strong>1. Pengawasan oleh pengurus dan pengawas koperasi</strong></h6>

                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Pengawas telah memberikan persetujuan terhadap kebijakan Manajemen Risiko likuiditas yang disusun oleh pengurus dan melakukan evaluasi secara berkala.</h6>
                                        <select name="kpmrl_a1" class="form-control" id="kpmrl_a1">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Pengawas melakukan evaluasi terhadap pertanggungjawaban pengurus atas pelaksanaan kebijakan Manajemen Risiko likuiditas secara berkala dan memastikan tindak lanjut hasil evaluasi pada rapat anggota.</h6>
                                        <select name="kpmrl_a2" class="form-control" id="kpmrl_a2">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Pengurus telah menyusun kebijakan Manajemen Risiko likuiditas, melaksanakan secara konsisten, dan melakukan pengkinian secara berkala.</h6>
                                        <select name="kpmrl_a3" class="form-control" id="kpmrl_a3">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Pengurus memiliki kemampuan untuk mengambil tindakan yang diperlukan dalam rangka mitigasi Risiko likuiditas.</h6>
                                        <select name="kpmrl_a4" class="form-control" id="kpmrl_a4">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            {{-- input no 4.b:2 --}}
                            <h6 class="text-justify"><strong>2. Kebijakan, Prosedur dan Limit Risiko</strong></h6>

                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Koperasi telah memiliki kecukupan organisasi yang menangani fungsi operasional dan fungsi Manajemen Risiko likuiditas.</h6>
                                        <select name="kpmrl_b1" class="form-control" id="kpmrl_b1">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Koperasi memiliki prosedur Manajemen Risiko likuiditas dan penetapan limit Risiko likuiditas yang ditetapkan oleh pengurus.</h6>
                                        <select name="kpmrl_b2" class="form-control" id="kpmrl_b2">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Pengurus telah menerapkan kebijakan pengelolaan SDM dalam rangka penerapan Manajemen Risiko likuiditas.</h6>
                                        <select name="kpmrl_b3" class="form-control" id="kpmrl_b3">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Pengurus telah menyusun kebijakan internal yang mendukung terselenggaranya fungsi ketersediaan likuiditas, memberikan perhatian terhadap ketentuan peraturan perundang- undangan perkoperasian.</h6>
                                        <select name="kpmrl_b4" class="form-control" id="kpmrl_b4">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 offset-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Penanganan permasalahan Risiko konsentrasi likuiditas, pencegahan ketergantungan terhadap sumber pendanaan tertentu, dan disusun dengan mempertimbangk an visi, misi, skala usaha dan kompleksitas bisnis, serta kecukupan SDM. </h6>
                                        <select name="kpmrl_b5" class="form-control" id="kpmrl_b5">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            {{-- input 4.c:3 --}}
                            <h6 class="text-justify"><strong>3. Proses dan Sistem Informasi Manajemen Risiko</strong></h6>

                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify">Koperasi telah memiliki sistem informasi Manajemenlikuiditas yang mendukung pengurus dalam pengambilan keputusan terkait Risiko likuiditas.</h6>
                                        <select name="kpmrl_c1" class="form-control" id="kpmrl_c1">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify">Melaksanakan audit secara berkala terhadap penerapan Manajemen Risiko likuiditas, menyampaikan laporan hasil audit intern, dan memastikan tindaklanjut atas temuan pemeriksaan.</h6>
                                        <select name="kpmrl_c4" class="form-control" id="kpmrl_c4">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 offset-sm-1">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Koperasi memiliki kebijakan dan prosedur penyelenggaraan teknologi informasi terkait mitigasi risiko likuiditas.</h6>
                                        <select name="kpmrl_c3" class="form-control" id="kpmrl_c3">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <h6 class="text-justify"> Sistem pengendalian intern terhadap Risiko likuiditas telah dilaksanakan </h6>
                                        <select name="kpmrl_c2" class="form-control" id="kpmrl_c2">
                                            <option value="1">Terpenuhi</option>
                                            <option value="0">Tidak Terpenuhi</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br />

                            <div class="text-right">
                                <button id="btnPrev" class="btn btn-info mr-2" type="submit">Sebelumnya</button>
                                <button id="btnNext" class="btn btn-info mr-2" type="submit">Selanjutnya</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
        $(function() {

            let data = {};
            let kopId = localStorage.getItem('kopId');

            if (kopId == null) {
                window.location.href = '/input/pilih-koperasi';
            }

            $('#btnNext').click(function (e) {
                e.preventDefault();

                console.log(localStorage.getItem('kopId'));
                $('#frmProfilResiko').each(function (index, element) {
                    $('select').map(function() {
                        console.log(this.id);
                        console.log(this.value);

                        let nama = this.id;
                        let isi = this.value;

                        data[nama] = isi;
                        data['koperasi_id'] = kopId;

                    });
                });
                localStorage.setItem('profil', JSON.stringify(data));

                window.location.href = '/edit/sertifikat/aktivalancar';

            });
            $('#btnPrev').click(function (e) {
                e.preventDefault();
                $('#formdk').each(function (index, element) {
                    $("input[name='input']").each(function() {
                        console.log( this.id);
                        console.log(this.value);

                        let nama = this.id;
                        let nilai = this.value;
                        let isi = nilai.replace(/\./g,'').replace(/\,/g,'');

                        if (isi == "" | isi == null) {
                            isi = '0';
                        }

                        data[nama] = isi;
                        data['koperasi_id'] = kopId;

                    });
                });
                localStorage.setItem('profil', JSON.stringify(data));
                window.location.href = '/edit/sertifikat/tatakelola';
            });
        });
        </script>
    @endpush

@endsection
