<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class KoperasisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('koperasis')->insert([
            [
                "nik"             => 2312,
                "nama"            => "Lala",
                "jenis"           => "Jasa",
                "no_badan_hukum"  => "9382984",
                "telp"            => "0834437",
                "email"           => "lulu@gmail.com",
                "data_tahun_buku" => "2012",
                "almt_terakhir"   => "ajnfakjfoianefnanoi",
                "almt_akta"       => "kjafbkjbkboibk alkfla"
            ],
            [
                "nik"             => 3124,
                "nama"            => "Sido Koyo",
                "jenis"           => "Simpan Pinjam",
                "no_badan_hukum"  => "38432",
                "telp"            => "085324171",
                "email"           => "koyo@gmail.com",
                "data_tahun_buku" => "2012",
                "almt_terakhir"   => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                "almt_akta"       => "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
            ].
            [
                "nik"             => 7543,
                "nama"            => "Haroem",
                "jenis"           => "Produsen",
                "no_badan_hukum"  => "8742950",
                "telp"            => "08123174",
                "email"           => "enak@gmail.com",
                "data_tahun_buku" => "2012",
                "almt_terakhir"   => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                "almt_akta"       => "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
            ],
            [
                "nik"             => 4523,
                "nama"            => "Seneng",
                "jenis"           => "Konsumen",
                "no_badan_hukum"  => "932047042",
                "telp"            => "0856347",
                "email"           => "susah@gmail.com",
                "data_tahun_buku" => "2012",
                "almt_terakhir"   => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                "almt_akta"       => "Lorem Ipsum is simply dummy text of the printing and typesetting industry."
            ],
        ]);
    }
}
