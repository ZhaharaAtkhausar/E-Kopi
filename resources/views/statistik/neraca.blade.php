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
                                <th>Aktiva</th>
                                <th colspan="2">Jumlah</th>
                                <th>Kewajiban Dan Ekuitas</th>
                                <th colspan="2">Jumlah</th>
                            </tr>
                            <tr>
                                <th>Deskripsi</th>
                                <th>Tahun Sebelumnya</th>
                                <th>Tahun Lalu</th>
                                <th>Deskripsi</th>
                                <th>Tahun Sebelumnya</th>
                                <th>Tahun Berjalan</th>
                            </tr>
                        </thead>
                        <tbody id="isibody">
                            <tr>
                                <td colspan="3"><strong>Aktiva Lancar</strong></td>
                                <td><strong>Kewajiban Lancar</strong></td>
                            </tr>
                            <tr>
                                <td>KAS, BANK, SIMPANAN</td>
                                <td></td>
                                <td></td>
                                <td>Tabungan/Simpanan Anggota</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Kas</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td>Tabungan/Simpanan non Anggota</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Bank</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td>Simpanan Berjangka Anggota</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>    - Giro</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td>Simpanan Berjangka Calon Anggota & Koperasi Lain</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>    - Tabungan</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td>Hutang Bank(Bagian Jatuh Tempo Kurang 1 Tahun)</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>    - Deposito</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td>Hutang LPDB(Bagian Jatuh Tempo Kurang 1 Tahun)</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td><strong>Jumlah Kas Bank</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td>Hutang Pajak</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td><strong>Simpanan Pada Koperasi Lain</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td>Beban yang masih harus dibayar</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td> - Simpanan sukarela pada koperasi lain</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td>Pendapatan lain diterima dimuka</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td> - Simpanan berjangka pada koperasi lain</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td>Hutang biaya</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td><strong>Jumlah Simpanan Pada Koperasi Lainnya</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td>Dana Bagian SHU</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td><strong>Jumlah Kas, Bank, Simpanan Pada Koperasi Lainnya</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td><strong>Dana Titipan</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Surat Berharga(Investasi Jangka Pendek)</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td> - Titipan Dana Kebajikan Anggota</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Pinjaman/Piutang Usaha</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td> - Titipan jaminan kesehatan</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td> - Piutang Dagang</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td> - Piutang Anggota</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td> - Titipan Zakata/Infaq dan Shadaqoh</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Piutang pada Calon Anggota</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td><strong>Jumlah Dana Titipan</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Piutang yang diberikan pada koperasi lain</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td>Hutang sewa guna usaha(kurang 1 tahun)</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Piutang Bunga</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td>Kewajiban Jangka Pendek Lainnya</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Piutang Lain-Lain</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td><strong>Jumlah Kewajiban Lancar</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td><strong>Jumlah Pinjaman/Piutang Usaha</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td><strong>Kewajiban Jangka Panjang</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td> - Penyisihan Pinjaman Yang Tidak Tertagih</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td>Hutang Bank</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td><strong>Jumlah pinjaman yang diperkirakan dapat tertagih</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td>Hutang jangka panjang koperasi lain</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Premi Asuransi</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td>Antar Kantor Pasiva</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Perlengkapan Kantor</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td>Simpanan Berjangka</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Beban dibayar dimuka</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td>Titipan dana jangka panjang</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Pendapatan yang masih akan diterima</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td>Hutang LPDB</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Persediaan Barang Dagang</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td>Hutang sewa guna usaha</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Aktiva lancar Lainnya</td>
                                <td name="al" id="" ></td>
                                <td name="al" id="" ></td>
                                <td>Hutang jangka panjang lain</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td><strong>JUMLAH AKTIVA LANCAR</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td>Modal Penyertaan</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td><strong>INVESTASI JANGKA PANJANG</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td><strong>JUMLAH KEWAJIBAN JANGKA PANJANG</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Simpanan/tabungan berjangka</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td><strong>EKUITAS</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Surat berharga </td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td>Simpanan Pokok</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Simpanan di KSP lain</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td>Simpanan Wajib</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td><strong>PENYERTAAN</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td>Modal Penyertaan</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td> - Penyertaan pada koperasi lain</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td>Modal Sumbangan/Hibah/Donasi</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td> - Penyertaan pada lembaga keuangan lain</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td>Cadangan Umum</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td><strong>JUMLAH PENYERTAAN</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td>Cadangan Tujuan Resiko</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Investasi Jangka Panjang Lainnya</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td>SHU Belum dibagi</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td> - Properti Investasi</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td>SHU Periode Sebelumnya</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td> - Akumulasi Penyusutan Properti Investasi</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td>SHU Periode Berjalan</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td> - Properti investasi bersih</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td>Jumlah SHU Belum dibagi</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td><strong>JUMLAH INVESTASI JANGKA PANJANG</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td><strong>JUMLAH EKUITAS</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td><strong>AKTIVA TETAP</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                                <td><strong>JUMLAH KEWAJIBAN DAN EKUITAS</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Tanah</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>

                            </tr>
                            <tr>
                                <td>Bangunan</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>

                            </tr>
                            <tr>
                                <td>Kendaraan</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>

                            </tr>
                            <tr>
                                <td>Inventaris dan Peralatan</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>

                            </tr>
                            <tr>
                                <td>Akumulasi Penyusutan</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>

                            </tr>
                            <tr>
                                <td><strong>JUMLAH AKTIVA TETAP</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>

                            </tr>
                            <tr>
                                <td><strong>AKTIVA TIDAK BERWUJUD</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>

                            </tr>
                            <tr>
                                <td> - Aktiva tidak berwujud</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>

                            </tr>
                            <tr>
                                <td><strong>JUMLAH AKTIVA TIDAK BERWUJUD</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>

                            </tr>
                            <tr>
                                <td><strong>AKTIVA LAIN-LAIN</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>

                            </tr>
                            <tr>
                                <td>Beban ditangguhkan</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>

                            </tr>
                            <tr>
                                <td>Amortisasi beban ditangguhkan</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>

                            </tr>
                            <tr>
                                <td>Agunan yang diambil alih</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>

                            </tr>
                            <tr>
                                <td>Beban Pra Operasional</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td>Lain-Lain</td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td><strong>JUMLAH AKTIVA LAIN-LAin</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
                            </tr>
                            <tr>
                                <td><strong>JUMLAH AKTIVA</strong></td>
                                <td name="data" id="" ></td>
                                <td name="data" id="" ></td>
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
        <script>
            $(function() {
                //Fungsi Search
                $('#search').on('change', function () {
                    // console.log($(this).val())
                    let id = $(this).val();
                    // console.log(id);

                    $.ajax({
                        type: "GET",
                        url: "/koperasi/neraca/" + id,

                        success: function (response) {
                            response.map( res => {
                                delete res['updated_at'];
                                delete res['created_at'];
                                delete res['id_aktiva_lancar'];
                                delete res['koperasi_id'];
                                console.log(res);

                                let form = $('#frmdk').find("td[name='al']");
                                console.log(form);

                                for (let i = 0; i < form.length; i++) {
                                    $(form[i]).text(res[ Object.keys(res)[i] ]);
                                }
                            })
                        }
                    });
                });
            });
        </script>
    @endpush

@endsection
