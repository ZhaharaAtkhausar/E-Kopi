<?php

use Database\Seeders\PermissionSeeder;
use Database\Seeders\RolePermissionSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\KecamatanSeeder;
use Illuminate\Database\Seeder;
use App\Models\Koperasi;
use App\Models\Kecamatan;
use App\Models\Desa;
use App\Models\TataKelola;
use App\Models\ProfilResiko;
use App\Models\BentukKoperasi;
use App\Models\KelKoperasi;
use App\Models\SektorUsaha;
use App\Models\JenisKoperasi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // RoleSeeder::class,
            // PermissionSeeder::class,
            // UserSeeder::class,
            // RolePermissionSeeder::class,
        ]);

        Kecamatan::insert([
            [
                'nama_kecamatan' => 'Bangsal'
            ],
            [
                'nama_kecamatan' => 'Dawarblandong'
            ],
            [
                'nama_kecamatan' => 'Dlanggu'
            ],
            [
                'nama_kecamatan' => 'Gedeg'
            ],
            [
                'nama_kecamatan' => 'Gondang'
            ],
            [
                'nama_kecamatan' => 'Jatirejo'
            ],
            [
                'nama_kecamatan' => 'Jetis'
            ],
            [
                'nama_kecamatan' => 'Kemlagi'
            ],
            [
                'nama_kecamatan' => 'Kutorejo'
            ],
            [
                'nama_kecamatan' => 'Mojoanyar'
            ],
            [
                'nama_kecamatan' => 'Mojosari'
            ],
            [
                'nama_kecamatan' => 'Ngoro'
            ],
            [
                'nama_kecamatan' => 'Pacet'
            ],
            [
                'nama_kecamatan' => 'Pungging'
            ],
            [
                'nama_kecamatan' => 'Puri'
            ],
            [
                'nama_kecamatan' => 'Sooko'
            ],
            [
                'nama_kecamatan' => 'Trawas'
            ],
            [
                'nama_kecamatan' => 'Trowulan'
            ],
        ]);

        Desa::insert([
            [
                'kecamatan_id'  =>  1,
                'nama_desa' => 'Bangsal'
            ],
            [
                'kecamatan_id'  =>  1,
                'nama_desa' => 'Gayam'
            ],
            [
                'kecamatan_id'  =>  1,
                'nama_desa' => 'Kedunguneng'
            ],
            [
                'kecamatan_id'  =>  1,
                'nama_desa' => 'Kutoporong'
            ],
            [
                'kecamatan_id'  =>  1,
                'nama_desa' => 'Mejoyo'
            ],
            [
                'kecamatan_id'  =>  1,
                'nama_desa' => 'Mojotamping'
            ],
            [
                'kecamatan_id'  =>  1,
                'nama_desa' => 'Ngastemi'
            ],
            [
                'kecamatan_id'  =>  1,
                'nama_desa' => 'Ngrowo'
            ],
            [
                'kecamatan_id'  =>  1,
                'nama_desa' => 'Pacing'
            ],
            [
                'kecamatan_id'  =>  1,
                'nama_desa' => 'Pekuwon'
            ],
            [
                'kecamatan_id'  =>  1,
                'nama_desa' => 'Peterongan'
            ],
            [
                'kecamatan_id'  =>  1,
                'nama_desa' => 'Puloniti'
            ],
            [
                'kecamatan_id'  =>  1,
                'nama_desa' => 'Salen'
            ],
            [
                'kecamatan_id'  =>  1,
                'nama_desa' => 'Sidomulyo'
            ],
            [
                'kecamatan_id'  =>  1,
                'nama_desa' => 'Sumbertebu'
            ],
            [
                'kecamatan_id'  =>  1,
                'nama_desa' => 'Sumberwono'
            ],
            [
                'kecamatan_id'  =>  1,
                'nama_desa' => 'Tinggarbuntut'
            ],
            [
                'kecamatan_id'  =>  2,
                'nama_desa' => 'Bangeran'
            ],
            [
                'kecamatan_id'  =>  2,
                'nama_desa' => 'Banyulegi'
            ],
            [
                'kecamatan_id'  =>  2,
                'nama_desa' => 'Brayublandong'
            ],
            [
                'kecamatan_id'  =>  2,
                'nama_desa' => 'Cinanadang'
            ],
            [
                'kecamatan_id'  =>  2,
                'nama_desa' => 'Cendoro'
            ],
            [
                'kecamatan_id'  =>  2,
                'nama_desa' => 'Dawarblandong'
            ],
            [
                'kecamatan_id'  =>  2,
                'nama_desa' => 'Gunungan'
            ],
            [
                'kecamatan_id'  =>  2,
                'nama_desa' => 'Gunungasri'
            ],
            [
                'kecamatan_id'  =>  2,
                'nama_desa' => 'Jairowo'
            ],
            [
                'kecamatan_id'  =>  2,
                'nama_desa' => 'Madureso'
            ],
            [
                'kecamatan_id'  =>  2,
                'nama_desa' => 'Pucuk'
            ],
            [
                'kecamatan_id'  =>  2,
                'nama_desa' => 'Pulorejo'
            ],
            [
                'kecamatan_id'  =>  2,
                'nama_desa' => 'Randegan'
            ],
            [
                'kecamatan_id'  =>  2,
                'nama_desa' => 'Simongangrok'
            ],
            [
                'kecamatan_id'  =>  2,
                'nama_desa' => 'Sumberwuluh'
            ],
            [
                'kecamatan_id'  =>  2,
                'nama_desa' => 'Suru'
            ],
            [
                'kecamatan_id'  =>  2,
                'nama_desa' => 'Talunblanding'
            ],
            [
                'kecamatan_id'  =>  2,
                'nama_desa' => 'Temuireng'
            ],
            [
                'kecamatan_id'  =>  3,
                'nama_desa' => 'Dlanggu'
            ],
            [
                'kecamatan_id'  =>  3,
                'nama_desa' => 'Jrambe'
            ],
            [
                'kecamatan_id'  =>  3,
                'nama_desa' => 'Kalen'
            ],
            [
                'kecamatan_id'  =>  3,
                'nama_desa' => 'Kedunggede'
            ],
            [
                'kecamatan_id'  =>  3,
                'nama_desa' => 'Kedunglengkong'
            ],
            [
                'kecamatan_id'  =>  3,
                'nama_desa' => 'Mojokarang'
            ],
            [
                'kecamatan_id'  =>  3,
                'nama_desa' => 'Ngembeh'
            ],
            [
                'kecamatan_id'  =>  3,
                'nama_desa' => 'Pohkecik'
            ],
            [
                'kecamatan_id'  =>  3,
                'nama_desa' => 'Punggul'
            ],
            [
                'kecamatan_id'  =>  3,
                'nama_desa' => 'Randudenenga'
            ],
            [
                'kecamatan_id'  =>  3,
                'nama_desa' => 'Sambilawang'
            ],
            [
                'kecamatan_id'  =>  3,
                'nama_desa' => 'Segunung'
            ],
            [
                'kecamatan_id'  =>  3,
                'nama_desa' => 'Sumberkarang'
            ],
            [
                'kecamatan_id'  =>  3,
                'nama_desa' => 'Sumbersono'
            ],
            [
                'kecamatan_id'  =>  3,
                'nama_desa' => 'Talok'
            ],
            [
                'kecamatan_id'  =>  3,
                'nama_desa' => 'Tumapel'
            ],
            [
                'kecamatan_id'  =>  4,
                'nama_desa' => 'Balongsari'
            ],
            [
                'kecamatan_id'  =>  4,
                'nama_desa' => 'Bandung'
            ],
            [
                'kecamatan_id'  =>  4,
                'nama_desa' => 'Batankrajan'
            ],
            [
                'kecamatan_id'  =>  4,
                'nama_desa' => 'Beratwetan'
            ],
            [
                'kecamatan_id'  =>  4,
                'nama_desa' => 'Gedeg'
            ],
            [
                'kecamatan_id'  =>  4,
                'nama_desa' => 'Gembongan'
            ],
            [
                'kecamatan_id'  =>  4,
                'nama_desa' => 'Gempolkerep'
            ],
            [
                'kecamatan_id'  =>  4,
                'nama_desa' => 'Jerukseger'
            ],
            [
                'kecamatan_id'  =>  4,
                'nama_desa' => 'Kemantren'
            ],
            [
                'kecamatan_id'  =>  4,
                'nama_desa' => 'Ngareskidul'
            ],
            [
                'kecamatan_id'  =>  4,
                'nama_desa' => 'Pagerluyung'
            ],
            [
                'kecamatan_id'  =>  4,
                'nama_desa' => 'Pagerejo'
            ],
            [
                'kecamatan_id'  =>  4,
                'nama_desa' => 'Sidoharjo'
            ],
            [
                'kecamatan_id'  =>  4,
                'nama_desa' => 'Terusan'
            ],
            [
                'kecamatan_id'  =>  5,
                'nama_desa' => 'Bakalan'
            ],
            [
                'kecamatan_id'  =>  5,
                'nama_desa' => 'Centong'
            ],
            [
                'kecamatan_id'  =>  5,
                'nama_desa' => 'Gondang'
            ],
            [
                'kecamatan_id'  =>  5,
                'nama_desa' => 'Gumeng'
            ],
            [
                'kecamatan_id'  =>  5,
                'nama_desa' => 'Begaganlimo'
            ],
            [
                'kecamatan_id'  =>  5,
                'nama_desa' => 'Kalikatir'
            ],
            [
                'kecamatan_id'  =>  5,
                'nama_desa' => 'Dilem'
            ],
            [
                'kecamatan_id'  =>  5,
                'nama_desa' => 'Ngembat'
            ],
            [
                'kecamatan_id'  =>  5,
                'nama_desa' => 'Jatidukuh'
            ],
            [
                'kecamatan_id'  =>  5,
                'nama_desa' => 'Bening'
            ],
            [
                'kecamatan_id'  =>  5,
                'nama_desa' => 'Karangkuen'
            ],
            [
                'kecamatan_id'  =>  5,
                'nama_desa' => 'Tawar'
            ],
            [
                'kecamatan_id'  =>  5,
                'nama_desa' => 'Pohjejer'
            ],
            [
                'kecamatan_id'  =>  5,
                'nama_desa' => 'Wonoploso'
            ],
            [
                'kecamatan_id'  =>  5,
                'nama_desa' => 'Pugeran'
            ],
            [
                'kecamatan_id'  =>  5,
                'nama_desa' => 'Kebontunggal'
            ],
            [
                'kecamatan_id'  =>  5,
                'nama_desa' => 'Kemasantani'
            ],
            [
                'kecamatan_id'  =>  5,
                'nama_desa' => 'Padi'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Baureno'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Bleberan'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Dinoyo'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Dukuhngarjo'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Gading'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Gebangsari'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Jatirejo'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Jembul'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Karangjeruk'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Kumitir'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Lebakjabung'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Manting'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Mojogeneng'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Pandanasri'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Rejosari'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Sumberagung'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Sumberjati'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Sumengko'
            ],
            [
                'kecamatan_id'  =>  6,
                'nama_desa' => 'Tawangrejo'
            ],
            [
                'kecamatan_id'  =>  7,
                'nama_desa' => 'Banjarsari'
            ],
            [
                'kecamatan_id'  =>  7,
                'nama_desa' => 'Bendung'
            ],
            [
                'kecamatan_id'  =>  7,
                'nama_desa' => 'Canggu'
            ],
            [
                'kecamatan_id'  =>  7,
                'nama_desa' => 'Jetis'
            ],
            [
                'kecamatan_id'  =>  7,
                'nama_desa' => 'Jolotundo'
            ],
            [
                'kecamatan_id'  =>  7,
                'nama_desa' => 'Kupang'
            ],
            [
                'kecamatan_id'  =>  7,
                'nama_desa' => 'Lakardowo'
            ],
            [
                'kecamatan_id'  =>  7,
                'nama_desa' => 'Mlirip'
            ],
            [
                'kecamatan_id'  =>  7,
                'nama_desa' => 'Mojorejo'
            ],
            [
                'kecamatan_id'  =>  7,
                'nama_desa' => 'Mojolebak'
            ],
            [
                'kecamatan_id'  =>  7,
                'nama_desa' => 'Ngabar'
            ],
            [
                'kecamatan_id'  =>  7,
                'nama_desa' => 'Paringan'
            ],
            [
                'kecamatan_id'  =>  7,
                'nama_desa' => 'Penompo'
            ],
            [
                'kecamatan_id'  =>  7,
                'nama_desa' => 'Perning'
            ],
            [
                'kecamatan_id'  =>  7,
                'nama_desa' => 'Sawo'
            ],
            [
                'kecamatan_id'  =>  7,
                'nama_desa' => 'Sidorejo'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Beratkulon'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Betro'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Japanan'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Kedungsari'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Kemlagi'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Mojodadi'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Mojodowo'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Mojogebang'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Mojojajar'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Mojokumpul'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Mojokusumo'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Mojopilang'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Mojorejo'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Mojosarirejo'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Mojowatesrejo'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Mojowiryo'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Mojowono'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Pandankrajan'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Tanjungan'
            ],
            [
                'kecamatan_id'  =>  8,
                'nama_desa' => 'Watesprojo'
            ],
            [
                'kecamatan_id'  =>  9,
                'nama_desa' => 'Gedangan'
            ],
            [
                'kecamatan_id'  =>  9,
                'nama_desa' => 'Jiyu'
            ],
            [
                'kecamatan_id'  =>  9,
                'nama_desa' => 'Kaligoro'
            ],
            [
                'kecamatan_id'  =>  9,
                'nama_desa' => 'Karangasem'
            ],
            [
                'kecamatan_id'  =>  9,
                'nama_desa' => 'Karangdiyeng'
            ],
            [
                'kecamatan_id'  =>  9,
                'nama_desa' => 'Kepuharum'
            ],
            [
                'kecamatan_id'  =>  9,
                'nama_desa' => 'Kepuhpandak'
            ],
            [
                'kecamatan_id'  =>  9,
                'nama_desa' => 'Kertosari'
            ],
            [
                'kecamatan_id'  =>  9,
                'nama_desa' => 'Kutorejo'
            ],
            [
                'kecamatan_id'  =>  9,
                'nama_desa' => 'Payungrejo'
            ],
            [
                'kecamatan_id'  =>  9,
                'nama_desa' => 'Pesanggrahan'
            ],
            [
                'kecamatan_id'  =>  9,
                'nama_desa' => 'Sampangagung'
            ],
            [
                'kecamatan_id'  =>  9,
                'nama_desa' => 'Sawo'
            ],
            [
                'kecamatan_id'  =>  9,
                'nama_desa' => 'Simbaringin'
            ],
            [
                'kecamatan_id'  =>  9,
                'nama_desa' => 'Singowangi'
            ],
            [
                'kecamatan_id'  =>  9,
                'nama_desa' => 'Windurejo'
            ],
            [
                'kecamatan_id'  =>  9,
                'nama_desa' => 'Wonodadi'
            ],
            [
                'kecamatan_id'  =>  10,
                'nama_desa' => 'Gayaman'
            ],
            [
                'kecamatan_id'  =>  10,
                'nama_desa' => 'Gebangmalang'
            ],
            [
                'kecamatan_id'  =>  10,
                'nama_desa' => 'Jabon'
            ],
            [
                'kecamatan_id'  =>  10,
                'nama_desa' => 'Jumeneng'
            ],
            [
                'kecamatan_id'  =>  10,
                'nama_desa' => 'Kepuhanyar'
            ],
            [
                'kecamatan_id'  =>  10,
                'nama_desa' => 'Kwatu'
            ],
            [
                'kecamatan_id'  =>  10,
                'nama_desa' => 'Kwedenkembar'
            ],
            [
                'kecamatan_id'  =>  10,
                'nama_desa' => 'Lengkong'
            ],
            [
                'kecamatan_id'  =>  10,
                'nama_desa' => 'Ngarjo'
            ],
            [
                'kecamatan_id'  =>  10,
                'nama_desa' => 'Sadartengah'
            ],
            [
                'kecamatan_id'  =>  10,
                'nama_desa' => 'Sumberjati'
            ],
            [
                'kecamatan_id'  =>  10,
                'nama_desa' => 'Wunut'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Awang-Awang'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Belahantengah'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Kebondalem'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Kedunggempol'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Leminggir'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Menanggal'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Modopuro'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Mojosulur'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Ngimbangan'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Pekukuhan'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Randubango'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Seduri'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Sumbertanggul'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Mojosari'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Sarirejo'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Wonokusumo'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Jotangan'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Kauman'
            ],
            [
                'kecamatan_id'  =>  11,
                'nama_desa' => 'Sawahan'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Bandarasri'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Candiharjo'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Jasem'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Kembangsri'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Kunjorowesi'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Kutogirang'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Lolawang'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Manduro Manggunggajah'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Ngoro'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Purwojati'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Sedati'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Srigading'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Sukoanyar'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Tambakrejo'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Tanjangrono'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Watesnegoro'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Watonmas Jedong'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Wonosari'
            ],
            [
                'kecamatan_id'  =>  12,
                'nama_desa' => 'Kesemen'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Bendunganjati'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Candiwatu'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Cembor'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Cepokolimo'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Claket'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Kembangbelor'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Kemiri'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Kesimantengah'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Kuripansari'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Mojokembang'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Nogosari'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Pacet'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Padusan'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Pandanarum'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Petak'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Sajen'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Sumberkembar'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Tanjungkenongo'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Warugunung'
            ],
            [
                'kecamatan_id'  =>  13,
                'nama_desa' => 'Wiyu'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Balongmasin'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Bangun'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Banjartanggul'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Curahmojo'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Jabontegal'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Jatilangkung'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Kalipuro'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Kedungmungal'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Kembangringgit'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Lebaksono'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Mojorejo'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Ngrame'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Pungging'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Purworejo'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Randuharjo'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Sekargadung'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Tempuran'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Tunggalpager'
            ],
            [
                'kecamatan_id'  =>  14,
                'nama_desa' => 'Watukenongo'
            ],
            [
                'kecamatan_id'  =>  15,
                'nama_desa' => 'Balongmojo'
            ],
            [
                'kecamatan_id'  =>  15,
                'nama_desa' => 'Tangunan'
            ],
            [
                'kecamatan_id'  =>  15,
                'nama_desa' => 'Banjaragung'
            ],
            [
                'kecamatan_id'  =>  15,
                'nama_desa' => 'Brayung'
            ],
            [
                'kecamatan_id'  =>  15,
                'nama_desa' => 'Katemasdungus'
            ],
            [
                'kecamatan_id'  =>  15,
                'nama_desa' => 'Kebonagung'
            ],
            [
                'kecamatan_id'  =>  15,
                'nama_desa' => 'Kenanten'
            ],
            [
                'kecamatan_id'  =>  15,
                'nama_desa' => 'Kintelan'
            ],
            [
                'kecamatan_id'  =>  15,
                'nama_desa' => 'Medali'
            ],
            [
                'kecamatan_id'  =>  15,
                'nama_desa' => 'Mlaten'
            ],
            [
                'kecamatan_id'  =>  15,
                'nama_desa' => 'Plososari'
            ],
            [
                'kecamatan_id'  =>  15,
                'nama_desa' => 'Puri'
            ],
            [
                'kecamatan_id'  =>  15,
                'nama_desa' => 'Sumbergirang'
            ],
            [
                'kecamatan_id'  =>  15,
                'nama_desa' => 'Sumolawang'
            ],
            [
                'kecamatan_id'  =>  15,
                'nama_desa' => 'Tambakagung'
            ],
            [
                'kecamatan_id'  =>  15,
                'nama_desa' => 'Tampungrejo'
            ],
            [
                'kecamatan_id'  =>  16,
                'nama_desa' => 'Blimbingsari'
            ],
            [
                'kecamatan_id'  =>  16,
                'nama_desa' => 'Brangkal'
            ],
            [
                'kecamatan_id'  =>  16,
                'nama_desa' => 'Gemekan'
            ],
            [
                'kecamatan_id'  =>  16,
                'nama_desa' => 'Jampirogo'
            ],
            [
                'kecamatan_id'  =>  16,
                'nama_desa' => 'Japan'
            ],
            [
                'kecamatan_id'  =>  16,
                'nama_desa' => 'Karangkedawang'
            ],
            [
                'kecamatan_id'  =>  16,
                'nama_desa' => 'Kedungmaling'
            ],
            [
                'kecamatan_id'  =>  16,
                'nama_desa' => 'Klinterejo'
            ],
            [
                'kecamatan_id'  =>  16,
                'nama_desa' => 'Modongan'
            ],
            [
                'kecamatan_id'  =>  16,
                'nama_desa' => 'Mojoranu'
            ],
            [
                'kecamatan_id'  =>  16,
                'nama_desa' => 'Ngingasrembyong'
            ],
            [
                'kecamatan_id'  =>  16,
                'nama_desa' => 'Sambiroto'
            ],
            [
                'kecamatan_id'  =>  16,
                'nama_desa' => 'Sooko'
            ],
            [
                'kecamatan_id'  =>  16,
                'nama_desa' => 'Tempuran'
            ],
            [
                'kecamatan_id'  =>  16,
                'nama_desa' => 'Wringinrejo'
            ],
            [
                'kecamatan_id'  =>  17,
                'nama_desa' => 'Belik'
            ],
            [
                'kecamatan_id'  =>  17,
                'nama_desa' => 'Duyung'
            ],
            [
                'kecamatan_id'  =>  17,
                'nama_desa' => 'Jatijejer'
            ],
            [
                'kecamatan_id'  =>  17,
                'nama_desa' => 'Kedungudi'
            ],
            [
                'kecamatan_id'  =>  17,
                'nama_desa' => 'Kesiman'
            ],
            [
                'kecamatan_id'  =>  17,
                'nama_desa' => 'Ketapanrame'
            ],
            [
                'kecamatan_id'  =>  17,
                'nama_desa' => 'Penanggungan'
            ],
            [
                'kecamatan_id'  =>  17,
                'nama_desa' => 'Seloliman'
            ],
            [
                'kecamatan_id'  =>  17,
                'nama_desa' => 'Selotapak'
            ],
            [
                'kecamatan_id'  =>  17,
                'nama_desa' => 'Sugeng'
            ],
            [
                'kecamatan_id'  =>  17,
                'nama_desa' => 'Sukosari'
            ],
            [
                'kecamatan_id'  =>  17,
                'nama_desa' => 'Tamiajeng'
            ],
            [
                'kecamatan_id'  =>  17,
                'nama_desa' => 'Trawas'
            ],
            [
                'kecamatan_id'  =>  18,
                'nama_desa' => 'Balongwono'
            ],
            [
                'kecamatan_id'  =>  18,
                'nama_desa' => 'Bejijong'
            ],
            [
                'kecamatan_id'  =>  18,
                'nama_desa' => 'Beloh'
            ],
            [
                'kecamatan_id'  =>  18,
                'nama_desa' => 'Bicak'
            ],
            [
                'kecamatan_id'  =>  18,
                'nama_desa' => 'Domas'
            ],
            [
                'kecamatan_id'  =>  18,
                'nama_desa' => 'Jambuwok'
            ],
            [
                'kecamatan_id'  =>  18,
                'nama_desa' => 'Jatipasar'
            ],
            [
                'kecamatan_id'  =>  18,
                'nama_desa' => 'Kejagan'
            ],
            [
                'kecamatan_id'  =>  18,
                'nama_desa' => 'Pakis'
            ],
            [
                'kecamatan_id'  =>  18,
                'nama_desa' => 'Panggih'
            ],
            [
                'kecamatan_id'  =>  18,
                'nama_desa' => 'Sentonorejo'
            ],
            [
                'kecamatan_id'  =>  18,
                'nama_desa' => 'Tawangsari'
            ],
            [
                'kecamatan_id'  =>  18,
                'nama_desa' => 'Temon'
            ],
            [
                'kecamatan_id'  =>  18,
                'nama_desa' => 'Trowulan'
            ],
            [
                'kecamatan_id'  =>  18,
                'nama_desa' => 'Watesumpak'
            ],
            [
                'kecamatan_id'  =>  18,
                'nama_desa' => 'Wonorejo'
            ],
        ]);

        BentukKoperasi::insert([
            [
                'bentuk_koperasi' => 'Primer Kabupaten/Kota'
            ],
            [
                'bentuk_koperasi' => 'Primer Nasional'
            ],
            [
                'bentuk_koperasi' => 'Primer Provinsi'
            ],
            [
                'bentuk_koperasi' => 'Sekunder Kabupaten/Kota'
            ],
            [
                'bentuk_koperasi' => 'Sekunder Provinsi'
            ],
        ]);

        KelKoperasi::insert([
            [
                'kel_koperasi' => 'K.B.P.R'
            ],
            [
                'kel_koperasi' => 'Kop. Angkatan Darat'
            ],
            [
                'kel_koperasi' => 'Kop. Angkutan Darat'
            ],
            [
                'kel_koperasi' => 'Kop. Jamu Gendong'
            ],
            [
                'kel_koperasi' => 'Kop. Kepolisian'
            ],
            [
                'kel_koperasi' => 'Kop. Lainnya'
            ],
            [
                'kel_koperasi' => 'Kop. Pasar'
            ],
            [
                'kel_koperasi' => 'Kop. Pedagang Kaki Lima'
            ],
            [
                'kel_koperasi' => 'Kop. Pegawai Negeri (KPRI)'
            ],
            [
                'kel_koperasi' => 'Kop. Pemuda'
            ],
            [
                'kel_koperasi' => 'Kop. Perkebunan'
            ],
            [
                'kel_koperasi' => 'Kop. Pertanian'
            ],
            [
                'kel_koperasi' => 'Kop. Peternakan'
            ],
            [
                'kel_koperasi' => 'Kop. Profesi'
            ],
            [
                'kel_koperasi' => 'Kop. Sekunder'
            ],
            [
                'kel_koperasi' => 'Kop. Serba Usaha'
            ],
            [
                'kel_koperasi' => 'Kop. Simpan Pinjam'
            ],
            [
                'kel_koperasi' => 'Kop. Simpan Pinjam dan Pembiayaan Syariah'
            ],
            [
                'kel_koperasi' => 'Kop. Wanita'
            ],
            [
                'kel_koperasi' => 'Kop. Wredatama'
            ],
            [
                'kel_koperasi' => 'Kopinkra'
            ],
            [
                'kel_koperasi' => 'Kopkar'
            ],
            [
                'kel_koperasi' => 'Koppontren'
            ],
            [
                'kel_koperasi' => 'Kopti'
            ],
            [
                'kel_koperasi' => 'KUD'
            ],
        ]);

        SektorUsaha::insert([
            [
                'sektor_usaha' => 'Adm Pemerintahan, Pertahanan dan Jaminan Sosial',
            ],
            [
                'sektor_usaha' => 'Industri Pengolahan',
            ],
            [
                'sektor_usaha' => 'Informasi dan Komunikasi',
            ],
            [
                'sektor_usaha' => 'Jasa Kesehatan dan Kegiatan Sosial',
            ],
            [
                'sektor_usaha' => 'Jasa Keuangan dan Asuransi',
            ],
            [
                'sektor_usaha' => 'Jasa Lainnya',
            ],
            [
                'sektor_usaha' => 'Penyediaan Akomodasi dan Makan Minum',
            ],
            [
                'sektor_usaha' => 'Perdagangan Besar dan Eceran - Rep Mobil dan Motor',
            ],
            [
                'sektor_usaha' => 'Pertanian, Kehutanan dan Perikanan',
            ],
            [
                'sektor_usaha' => 'Transportasi dan Pergudangan',
            ],
        ]);

        JenisKoperasi::insert([
            [
                'jenis_koperasi' => 'Jasa',
            ],
            [
                'jenis_koperasi' => 'Konsumen',
            ],
            [
                'jenis_koperasi' => 'Pemasaran',
            ],
            [
                'jenis_koperasi' => 'Produsen',
            ],
            [
                'jenis_koperasi' => 'Simpan Pinjam',
            ],
        ]);

        // Koperasi::insert([
        //     [
        //         "nik"             => 2312,
        //         "nama"            => "Lala",
        //         "jenis"           => "Jasa",
        //         "no_badan_hukum"  => "9382984",
        //         "telp"            => "0834437",
        //         "email"           => "lulu@gmail.com",
        //         "data_tahun_buku" => "2012",
        //         "almt_terakhir"   => "ajnfakjfoianefnanoi",
        //         "almt_akta"       => "kjafbkjbkboibk alkfla",
        //         "desa_id"         => 1,
        //         "kecamatan_id"    => 1,
        //     ],
        //     [
        //         "nik"             => 1293,
        //         "nama"            => "Kuku",
        //         "jenis"           => "Jasa",
        //         "no_badan_hukum"  => "9382984",
        //         "telp"            => "0834437",
        //         "email"           => "lulu@gmail.com",
        //         "data_tahun_buku" => "2012",
        //         "almt_terakhir"   => "ajnfakjfoianefnanoi",
        //         "almt_akta"       => "kjafbkjbkboibk alkfla",
        //         "desa_id"         => 3,
        //         "kecamatan_id"    => 1,
        //     ],
        //     [
        //         "nik"             => 9239,
        //         "nama"            => "Haha",
        //         "jenis"           => "Jasa",
        //         "no_badan_hukum"  => "9382984",
        //         "telp"            => "0834437",
        //         "email"           => "lulu@gmail.com",
        //         "data_tahun_buku" => "2012",
        //         "almt_terakhir"   => "ajnfakjfoianefnanoi",
        //         "almt_akta"       => "kjafbkjbkboibk alkfla",
        //         "desa_id"         => 18,
        //         "kecamatan_id"    => 2,
        //     ],
        // ]);

    //     ProfilResiko::insert([
    //         "koperasi_id"=> 1,
    //         "ro_a1"=> "Terpenuhi",
    //         "ro_a2"=> "Terpenuhi",
    //         "ro_a3"=> "Terpenuhi",
    //         "ro_a4"=> "Terpenuhi",
    //         "ro_b1"=> "Terpenuhi",
    //         "ro_b2"=> "Terpenuhi",
    //         "ro_b3"=> "Terpenuhi",
    //         "ro_b4"=> "Terpenuhi",
    //         "rk_a1"=> "Terpenuhi",
    //         "rk_a2"=> "Terpenuhi",
    //         "rk_a3"=> "Terpenuhi",
    //         "rk_a4"=> "Terpenuhi",
    //         "rk_b1"=> "Terpenuhi",
    //         "rk_b2"=> "Terpenuhi",
    //         "rk_b3"=> "Terpenuhi",
    //         "rk_b4"=> "Terpenuhi",
    //         "rl_a1"=> "Terpenuhi",
    //         "rl_a2"=> "Terpenuhi",
    //         "rl_a3"=> "Terpenuhi",
    //         "rl_a4"=> "Terpenuhi",
    //         "rl_a5"=> "Terpenuhi",
    //         "kpmro_a1"=> "Terpenuhi",
    //         "kpmro_a2"=> "Terpenuhi",
    //         "kpmro_a3"=> "Terpenuhi",
    //         "kpmro_a4"=> "Terpenuhi",
    //         "kpmro_b1"=> "Terpenuhi",
    //         "kpmro_b2"=> "Terpenuhi",
    //         "kpmro_b3"=> "Terpenuhi",
    //         "kpmro_c1"=> "Terpenuhi",
    //         "kpmro_c2"=> "Terpenuhi",
    //         "kpmro_c3"=> "Terpenuhi",
    //         "kpmro_c4"=> "Terpenuhi",
    //         "kpmrk_a1"=> "Terpenuhi",
    //         "kpmrk_a2"=> "Terpenuhi",
    //         "kpmrk_a3"=> "Terpenuhi",
    //         "kpmrk_a4"=> "Terpenuhi",
    //         "kpmrk_b1"=> "Terpenuhi",
    //         "kpmrk_b2"=> "Terpenuhi",
    //         "kpmrk_b3"=> "Terpenuhi",
    //         "kpmrk_b4"=> "Terpenuhi",
    //         "kpmrk_c1"=> "Terpenuhi",
    //         "kpmrk_c2"=> "Terpenuhi",
    //         "kpmrk_c3"=> "Terpenuhi",
    //         "kpmrk_c4"=> "Terpenuhi",
    //         "kpmrl_a1"=> "Terpenuhi",
    //         "kpmrl_a2"=> "Terpenuhi",
    //         "kpmrl_a3"=> "Terpenuhi",
    //         "kpmrl_a4"=> "Terpenuhi",
    //         "kpmrl_b1"=> "Terpenuhi",
    //         "kpmrl_b2"=> "Terpenuhi",
    //         "kpmrl_b3"=> "Terpenuhi",
    //         "kpmrl_b4"=> "Terpenuhi",
    //         "kpmrl_b5"=> "Terpenuhi",
    //         "kpmrl_c1"=> "Terpenuhi",
    //         "kpmrl_c2"=> "Terpenuhi",
    //         "kpmrl_c3"=> "Terpenuhi",
    //         "kpmrl_c4"=> "Terpenuhi"
    //     ]);

    //     TataKelola::insert([
    //         "koperasi_id"=> 1,
    //         "pk_1a"=> "Terpenuhi",
    //         "pk_1b"=> "Terpenuhi",
    //         "pk_1c"=> "Terpenuhi",
    //         "pk_1d"=> "Terpenuhi",
    //         "pk_2a"=> "Terpenuhi",
    //         "pk_2b"=> "Terpenuhi",
    //         "pk_2c"=> "Terpenuhi",
    //         "pk_2d"=> "Terpenuhi",
    //         "pk_2e"=> "Terpenuhi",
    //         "pk_3a"=> "Terpenuhi",
    //         "pk_3b"=> "Terpenuhi",
    //         "pk_3c"=> "Terpenuhi",
    //         "pk_4a"=> "Terpenuhi",
    //         "pk_4b"=> "Terpenuhi",
    //         "pk_4c"=> "Terpenuhi",
    //         "pk_4d"=> "Terpenuhi",
    //         "pk_5a"=> "Terpenuhi",
    //         "pk_5b"=> "Terpenuhi",
    //         "pk_5c"=> "Terpenuhi",
    //         "pk_5d"=> "Terpenuhi",
    //         "pk_6a"=> "Terpenuhi",
    //         "pk_6b"=> "Terpenuhi",
    //         "pk_6c"=> "Terpenuhi",
    //         "pk_6d"=> "Terpenuhi",
    //         "pk_7a"=> "Terpenuhi",
    //         "pk_7b"=> "Terpenuhi",
    //         "pk_7c"=> "Terpenuhi",
    //         "pk_7d"=> "Terpenuhi",
    //         "pk_21a"=> "Terpenuhi",
    //         "pk_21b"=> "Terpenuhi",
    //         "pk_21c"=> "Terpenuhi",
    //         "pk_22a"=> "Terpenuhi",
    //         "pk_22b"=> "Terpenuhi",
    //         "pk_22c"=> "Terpenuhi",
    //         "pk_23a"=> "Terpenuhi",
    //         "pk_23b"=> "Terpenuhi",
    //         "pk_23c"=> "Terpenuhi",
    //         "pk_23d"=> "Terpenuhi",
    //         "pk_23e"=> "Terpenuhi",
    //         "pk_23f"=> "Terpenuhi",
    //         "pk_23g"=> "Terpenuhi",
    //         "pk_23h"=> "Terpenuhi",
    //         "pk_23i"=> "Terpenuhi",
    //         "pk_23j"=> "Terpenuhi",
    //         "pk_23k"=> "Terpenuhi",
    //         "pk_23l"=> "Terpenuhi",
    //         "pk_23m"=> "Terpenuhi",
    //         "pk_23n"=> "Terpenuhi",
    //         "pk_23o"=> "Terpenuhi",
    //         "pk_23p"=> "Terpenuhi",
    //         "pk_23q"=> "Terpenuhi",
    //         "pk_24a"=> "Terpenuhi",
    //         "pk_24b"=> "Terpenuhi",
    //         "pk_24c"=> "Terpenuhi",
    //         "pk_24d"=> "Terpenuhi",
    //         "pk_25a"=> "Terpenuhi",
    //         "pk_25b"=> "Terpenuhi",
    //         "pk_25c"=> "Terpenuhi",
    //         "pk_31a"=> "Terpenuhi",
    //         "pk_31b"=> "Terpenuhi",
    //         "pk_31c"=> "Terpenuhi",
    //         "pk_32a"=> "Terpenuhi",
    //         "pk_32b"=> "Terpenuhi",
    //         "pk_32c"=> "Terpenuhi",
    //         "pk_32d"=> "Terpenuhi",
    //         "pk_33a"=> "Terpenuhi",
    //         "pk_33b"=> "Terpenuhi",
    //         "pk_33c"=> "Terpenuhi",
    //         "pk_33d"=> "Terpenuhi",
    //         "pk_34a"=> "Terpenuhi",
    //         "pk_34b"=> "Terpenuhi",
    //         "pk_34c"=> "Terpenuhi",
    //         "pk_34d"=> "Terpenuhi",
    //         "pk_35a"=> "Terpenuhi",
    //         "pk_35b"=> "Terpenuhi",
    //         "pk_35c"=> "Terpenuhi",
    //         "pk_35d"=> "Terpenuhi"
    //     ]);
    }
}
