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
            'jabatan' => 'Pranata Komputer Pelaksana'
        ]);

        User::create([
            'name' => 'Khaerun Naheru',
            'email' => 'khaerun.naheru@kkp.go.id',
            'password' => bcrypt('123456'),
            'nip' => '198701242003121001',
            'pangkat' => 'Pengatur Tingkat I/IId',
            'jabatan' => 'PHPI Pelaksana'
        ]);

        User::create([
            'name' => 'Imaduddin',
            'email' => 'imaduddin72@kkp.go.id',
            'password' => bcrypt('123456'),
            'nip' => '197201242003121001',
            'pangkat' => 'Penata Muda Tingkat I/IIIb',
            'jabatan' => 'Kepla Urusan Umum'
        ]);

        Supel::create([
            'user_id' => 1,
            'sup_nomor' => 'B.614/SKIPM.MER/KP.440/IV/2023',
            'sup_tanggal' => Carbon::parse('2023/04/01'),
            'sup_keterangan' => '1.	Untuk melakukan  Lembur  Kegiatan Administrasi Keuangan, Pelaporan Kinerja dan kegiatan IT di Lingkup Stasiun Karantina Ikan Pengendalian Mutu dan Keamanan Hasil Perikanan Merak bulan April 2023'
        ]);

        Supel::create([
            'user_id' => 1,
            'sup_nomor' => 'B.614/SKIPM.MER/KP.440/V/2023',
            'sup_tanggal' => Carbon::parse('2023/05/01'),
            'sup_keterangan' => '1.	Untuk melakukan  Lembur  Kegiatan Administrasi Keuangan, Pelaporan Kinerja dan kegiatan IT di Lingkup Stasiun Karantina Ikan Pengendalian Mutu dan Keamanan Hasil Perikanan Merak bulan Mei 2023'
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
