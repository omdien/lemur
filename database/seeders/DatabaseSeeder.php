<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Supel;
use App\Models\Lembur;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Didin Handiman',
            'email' => 'omdien@gmail.com',
            'password' => bcrypt('4rfv5tgb'),
            'nip' => '197502102009121001',
            'pangkat' => 'Pengatur Tingkat I/IId',
            'jabatan' => 'Pranata Komputer Pelaksana',
            'img' => 'img/user_img/didin.jpg'
        ]);

        User::create([
            'name' => 'Khaerun Naheru',
            'email' => 'khaerun.naheru@kkp.go.id',
            'password' => bcrypt('123456'),
            'nip' => '198701242003121001',
            'pangkat' => 'Pengatur Tingkat I/IId',
            'jabatan' => 'PHPI Pelaksana',
            'img' => 'img/user_img/naheru.jpg'
        ]);

        User::create([
            'name' => 'Imaduddin',
            'email' => 'imaduddin72@kkp.go.id',
            'password' => bcrypt('123456'),
            'nip' => '197201242003121001',
            'pangkat' => 'Penata Muda Tingkat I/IIIb',
            'jabatan' => 'Kepla Urusan Umum',
            'img' => 'img/user_img/imaduddin.jpg'
        ]);

        User::create([
            'name' => 'Iromo',
            'email' => 'iromo@kkp.go.id',
            'password' => bcrypt('123456'),
            'nip' => '196910311989031002',
            'pangkat' => 'Penata Tingkat I/IIId',
            'jabatan' => 'Kepala Stasiun KIPM Merak',
            'img' => 'img/user_img/iromo.jpg'
        ]);

        User::create([
            'name' => 'Rudi Supriadi',
            'email' => 'rudi.supriadi@kkp.go.id',
            'password' => bcrypt('123456'),
            'nip' => '197805052007011002',
            'pangkat' => 'Penata Muda/IIIa',
            'jabatan' => 'Fungsional Umum',
            'img' => 'img/user_img/rudi.jpg'
        ]);

        User::create([
            'name' => 'Laeisa Asgor',
            'email' => 'laeisaasgor268@gmail.com',
            'password' => bcrypt('123456'),
            'nip' => '198209282015031001',
            'pangkat' => 'Penata Muda/IIIa',
            'jabatan' => 'Fungsional Umum',
            'img' => 'img/user_img/laeisa.jpg'
        ]);

        User::create([
            'name' => 'Yasin Arifin',
            'email' => 'yasin.fqia@kkp.go.id',
            'password' => bcrypt('123456'),
            'nip' => '198108222005021001',
            'pangkat' => 'Penata Tingkat I/IIId',
            'jabatan' => 'Pengendali Hama dan Penyakit Ikan',
            'img' => 'img/user_img/yasin.jpg'
        ]);

        User::create([
            'name' => 'Muklasin',
            'email' => 'akasmuklasin@gmail.com',
            'password' => bcrypt('123456'),
            'nip' => '198110112008011012',
            'pangkat' => 'Penata Tingkat I/IIId',
            'jabatan' => 'Inspektur Mutu Hasil Perikanan Pratama',
            'img' => 'img/user_img/akas.jpg'
        ]);

        User::create([
            'name' => 'Mustikawati',
            'email' => 'mustikawati.ski@gmail.com',
            'password' => bcrypt('123456'),
            'nip' => '198212192008012007',
            'pangkat' => 'Penata/IIIc',
            'jabatan' => 'Pengendali Hama dan Penyakit Ikan',
            'img' => 'img/user_img/mustika.jpg'
        ]);

        User::create([
            'name' => 'Mutoharun',
            'email' => 'toha.lane@gmail.com',
            'password' => bcrypt('123456'),
            'nip' => '198306032005021001',
            'pangkat' => 'Penata/IIIc',
            'jabatan' => 'Pengendali Hama dan Penyakit Ikan Muda',
            'img' => 'img/user_img/tohao.jpg'
        ]);

        User::create([
            'name' => 'Sartini Sabir',
            'email' => 'thinie_sabir@yahoo.co.id',
            'password' => bcrypt('123456'),
            'nip' => '198304252008012009',
            'pangkat' => 'Penata Tingkat I/IIId',
            'jabatan' => 'Pengendali Hama dan Penyakit Ikan',
            'img' => 'img/user_img/sartini.jpg'
        ]);

        User::create([
            'name' => 'Widayanti',
            'email' => 'yantiwida470@gmail.com',
            'password' => bcrypt('123456'),
            'nip' => '198203142008012007',
            'pangkat' => 'Penata Muda Tingkat I/IIIb',
            'jabatan' => 'Pengendali Hama dan Penyakit Ikan',
            'img' => 'img/user_img/widayanti.jpg'
        ]);

        User::create([
            'name' => 'Maftukha',
            'email' => 'sujaimaftukha@gmail.com',
            'password' => bcrypt('123456'),
            'nip' => '198608162008012001',
            'pangkat' => 'Pengatur/IIc',
            'jabatan' => 'Pengendali Hama dan Penyakit Ikan',
            'img' => 'img/user_img/maftukha.jpg'
        ]);

        User::create([
            'name' => 'Agus Qurniawan',
            'email' => 'agus.qurniawan@kkp.go.id',
            'password' => bcrypt('123456'),
            'nip' => '197601072003121003',
            'pangkat' => 'Penata Tingkat I/IIId',
            'jabatan' => 'Pengendali Hama dan Penyakit Ikan',
            'img' => 'img/user_img/agus.jpg'
        ]);

        User::create([
            'name' => 'Arisdianur Heriyandi',
            'email' => 'arisdianurheriyandi@gmail.com',
            'password' => bcrypt('123456'),
            'nip' => '197602252005021001',
            'pangkat' => 'Penata Tingkat I/IIId',
            'jabatan' => 'Pengendali Hama dan Penyakit Ikan',
            'img' => 'img/user_img/arisdian.jpg'
        ]);

        User::create([
            'name' => 'Atik Lestantun',
            'email' => 'atik.lestantun@kkp.go.id',
            'password' => bcrypt('123456'),
            'nip' => '198007102005022002',
            'pangkat' => 'Penata Tingkat I/IIId',
            'jabatan' => 'Pengendali Hama dan Penyakit Ikan',
            'img' => 'img/user_img/atik.jpg'
        ]);

        User::create([
            'name' => 'Lansan Fikr Hadi',
            'email' => 'lansanfikr@gmail.com',
            'password' => bcrypt('123456'),
            'nip' => '199004302009011002',
            'pangkat' => 'Pengatur Tingkat I/IId',
            'jabatan' => 'Pengendali Hama dan Penyakit Ikan Pelaksana',
            'img' => 'img/user_img/fikr.jpg'
        ]);

        User::create([
            'name' => 'Muhammad Taufiq Rizal',
            'email' => 'taufiq.fqia@kkp.go.id',
            'password' => bcrypt('123456'),
            'nip' => '199109062009121001',
            'pangkat' => 'Pengatur Tingkat I/IId',
            'jabatan' => 'Pengendali Hama dan Penyakit Ikan Pelaksana',
            'img' => 'img/user_img/opik.jpg'
        ]);

        User::create([
            'name' => 'Dani Irawan',
            'email' => 'dani.irawan@kkp.go.id',
            'password' => bcrypt('123456'),
            'nip' => '198901012009121001',
            'pangkat' => 'Pengatur Tingkat I/IId',
            'jabatan' => 'Pengendali Hama dan Penyakit Ikan Pelaksana',
            'img' => 'img/user_img/dani.jpg'
        ]);

        User::create([
            'name' => 'Amira Baihani',
            'email' => 'amira.baihani@kkp.go.id',
            'password' => bcrypt('123456'),
            'nip' => '198506202009122002',
            'pangkat' => 'Penata Tingkat I/IIId',
            'jabatan' => 'Pengendali Hama dan Penyakit Ikan',
            'img' => 'img/user_img/amira.jpg'
        ]);

        User::create([
            'name' => 'Arif Nur Rahman',
            'email' => 'arifnurrahman14@yahoo.co.id',
            'password' => bcrypt('123456'),
            'nip' => '198001272010121001',
            'pangkat' => 'Penata Tingkat I/IIId',
            'jabatan' => 'Pengendali Hama dan Penyakit Ikan',
            'img' => 'img/user_img/arif.jpg'
        ]);

        User::create([
            'name' => 'Nita Andriyani',
            'email' => 'nita.andriyani@kkp.go.id',
            'password' => bcrypt('123456'),
            'nip' => '198407172010122002',
            'pangkat' => 'Penata Muda/IIIa',
            'jabatan' => 'Penata Kuangan APBN Mahir',
            'img' => 'img/user_img/nita.jpg'
        ]);

        User::create([
            'name' => 'Danang Hadi Prakoso',
            'email' => 'danangprakoso.acr@gmail.com',
            'password' => bcrypt('123456'),
            'nip' => '198812162015031002',
            'pangkat' => 'Pengatur Tingkat I/IId',
            'jabatan' => 'Pengendali Hama dan Penyakit Ikan Pelaksana',
            'img' => 'img/user_img/danang.jpg'
        ]);

        Supel::create([
            'user_id' => 4,
            'sup_nomor' => 'B.231/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 3,
            'sup_nomor' => 'B.232/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 7,
            'sup_nomor' => 'B.233/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 8,
            'sup_nomor' => 'B.234/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 16,
            'sup_nomor' => 'B.235/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 15,
            'sup_nomor' => 'B.236/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 11,
            'sup_nomor' => 'B.237/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 14,
            'sup_nomor' => 'B.238/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 21,
            'sup_nomor' => 'B.239/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 9,
            'sup_nomor' => 'B.240/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 10,
            'sup_nomor' => 'B.241/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 12,
            'sup_nomor' => 'B.242/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 23,
            'sup_nomor' => 'B.243/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 13,
            'sup_nomor' => 'B.244/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 19,
            'sup_nomor' => 'B.245/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 18,
            'sup_nomor' => 'B.246/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 17,
            'sup_nomor' => 'B.247/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 2,
            'sup_nomor' => 'B.248/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 1,
            'sup_nomor' => 'B.249/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 22,
            'sup_nomor' => 'B.250/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 6,
            'sup_nomor' => 'B.251/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 5,
            'sup_nomor' => 'B.252/SKIPM.MER/KP.444/I/2023',
            'sup_bulan' => 1,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 4,
            'sup_nomor' => 'B.253/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 3,
            'sup_nomor' => 'B.254/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 7,
            'sup_nomor' => 'B.255/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 8,
            'sup_nomor' => 'B.256/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 16,
            'sup_nomor' => 'B.257/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 15,
            'sup_nomor' => 'B.258/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 11,
            'sup_nomor' => 'B.259/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 14,
            'sup_nomor' => 'B.260/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 21,
            'sup_nomor' => 'B.261/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 9,
            'sup_nomor' => 'B.262/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 10,
            'sup_nomor' => 'B.263/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 12,
            'sup_nomor' => 'B.264/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 23,
            'sup_nomor' => 'B.265/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 13,
            'sup_nomor' => 'B.266/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 19,
            'sup_nomor' => 'B.267/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 18,
            'sup_nomor' => 'B.268/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 17,
            'sup_nomor' => 'B.269/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 2,
            'sup_nomor' => 'B.270/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 1,
            'sup_nomor' => 'B.271/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 22,
            'sup_nomor' => 'B.272/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 6,
            'sup_nomor' => 'B.273/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 5,
            'sup_nomor' => 'B.274/SKIPM.MER/KP.444/II/2023',
            'sup_bulan' => 2,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/2/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 4,
            'sup_nomor' => 'B.275/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 3,
            'sup_nomor' => 'B.276/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 7,
            'sup_nomor' => 'B.277/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 8,
            'sup_nomor' => 'B.278/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 16,
            'sup_nomor' => 'B.279/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 15,
            'sup_nomor' => 'B.280/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 11,
            'sup_nomor' => 'B.281/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 14,
            'sup_nomor' => 'B.282/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 21,
            'sup_nomor' => 'B.283/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 9,
            'sup_nomor' => 'B.284/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 10,
            'sup_nomor' => 'B.285/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 12,
            'sup_nomor' => 'B.286/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 23,
            'sup_nomor' => 'B.287/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 13,
            'sup_nomor' => 'B.288/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 19,
            'sup_nomor' => 'B.289/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 18,
            'sup_nomor' => 'B.290/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 17,
            'sup_nomor' => 'B.291/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 2,
            'sup_nomor' => 'B.292/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 1,
            'sup_nomor' => 'B.293/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 22,
            'sup_nomor' => 'B.294/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 6,
            'sup_nomor' => 'B.295/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 5,
            'sup_nomor' => 'B.296/SKIPM.MER/KP.444/III/2023',
            'sup_bulan' => 3,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/3/1'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 4,
            'sup_nomor' => 'B.596/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 3,
            'sup_nomor' => 'B.597/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 7,
            'sup_nomor' => 'B.598/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 8,
            'sup_nomor' => 'B.599/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 16,
            'sup_nomor' => 'B.600/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 15,
            'sup_nomor' => 'B.601/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 11,
            'sup_nomor' => 'B.602/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 14,
            'sup_nomor' => 'B.603/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 21,
            'sup_nomor' => 'B.604/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 9,
            'sup_nomor' => 'B.605/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 10,
            'sup_nomor' => 'B.606/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 12,
            'sup_nomor' => 'B.607/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 23,
            'sup_nomor' => 'B.608/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 13,
            'sup_nomor' => 'B.609/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 19,
            'sup_nomor' => 'B.610/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 18,
            'sup_nomor' => 'B.611/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 17,
            'sup_nomor' => 'B.612/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 2,
            'sup_nomor' => 'B.613/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 1,
            'sup_nomor' => 'B.614/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 22,
            'sup_nomor' => 'B.615/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 6,
            'sup_nomor' => 'B.616/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);


        Supel::create([
            'user_id' => 5,
            'sup_nomor' => 'B.617/SKIPM.MER/KP.440/IV/2023',
            'sup_bulan' => 5,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/4/28'),
            'sup_keterangan' => 'Untuk Melakukan Lembur'
        ]);
        
        Supel::create([
            'user_id' => 1,
            'sup_nomor' => 'B.1448/SKIPM.MER/KP.440/XI/2023',
            'sup_bulan' => 11,
            'sup_tahun' => 2023,
            'sup_tanggal' => Carbon::parse('2023/1/1'),
            'sup_keterangan' => 'Melaksanakan  Lembur  Kegiatan Administrasi Keuangan, Pelaporan Kinerja dan kegiatan IT di Lingkup Stasiun Karantina Ikan Pengendalian Mutu dan Keamanan Hasil Perikanan Merak bulan November 2023.'
        ]);




        // Lembur::create([
        //     'supel_id' => 1,
        //     'lem_tanggal' => Carbon::parse('2023/07/02'),
        //     'lem_maksud' => 'maksudnya',
        //     'lem_tujuan' => 'tujuannnya',
        //     'lem_waktu' => Carbon::parse('2023-07-02'),
        //     'lem_tempat' => 'kantor',
        //     'lem_hasil' => 'hasilnya'
        // ]);

        // Lembur::create([
        //     'supel_id' => 1,
        //     'lem_tanggal' => Carbon::parse('2023/07/02'),
        //     'lem_maksud' => 'maksudnya2',
        //     'lem_tujuan' => 'tujuannnya2',
        //     'lem_waktu' => Carbon::parse('2023-07-02'),
        //     'lem_tempat' => 'kantor2',
        //     'lem_hasil' => 'hasilnya2'
        // ]);
    }
}
