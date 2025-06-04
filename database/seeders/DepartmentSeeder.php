<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('department')->insert([
            [
                'name' => 'medinfo',
                'long_name' => 'media_informasi_dan_komunikasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'eksekutif',
                'long_name' => null, // Tidak ada long name khusus untuk eksekutif
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'pendidikan',
                'long_name' => null, // Tidak ada long name khusus untuk pendidikan
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'perhubungan',
                'long_name' => null, // Tidak ada long name khusus untuk perhubungan
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ekraf',
                'long_name' => 'ekonomi_kreatif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'pengmas',
                'long_name' => 'pengabdian_masyarakat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'psdm',
                'long_name' => 'pengembangan_sumber_daya_manusia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}