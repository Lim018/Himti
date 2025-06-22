<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Info; // Import your Info model
use Faker\Factory as Faker; // Import Faker for generating dummy data

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Initialize Faker with Indonesian locale
        $faker = Faker::create('id_ID');

        // --- Static Sample Data with HTML elements ---
        DB::table('info')->insert([
            'image' => null,
            'title' => 'Pengumuman Penting Mengenai Libur Idul Adha 2025',
            'date' => '2025-06-16', // Updated date for current context
            'body' => '<p>Diberitahukan kepada seluruh karyawan dan pelanggan,</p>
                       <p>Bahwa kantor kami akan tutup sementara pada tanggal <b>17 Juni hingga 19 Juni 2025</b> dalam rangka perayaan Idul Adha. Operasional akan kembali normal pada tanggal 20 Juni 2025.</p>
                       <p>Kami memohon maaf atas ketidaknyamanan yang ditimbulkan dan mengucapkan selamat hari raya Idul Adha.</p>',
        ]);

        DB::table('info')->insert([
            'image' => null,
            'title' => 'Peningkatan Kualitas Layanan Pelanggan',
            'date' => '2025-05-28',
            'body' => '<p>Kami berkomitmen untuk terus meningkatkan kualitas layanan. Melalui program <b>"Senyum Pelanggan 2025"</b>, kami telah melatih staf kami untuk memberikan pengalaman terbaik.</p>
                       <p>Umpan balik Anda sangat berarti bagi kami!</p>',
        ]);

        // --- Dynamic Sample Data using Faker (For more entries) ---
        // Faker's 'paragraphs' and 'sentence' methods generally don't include HTML by default.
        // If you need HTML for Faker-generated content, you might need to wrap it.
        for ($i = 0; $i < 5; $i++) { // Create 5 more dummy info entries
            $numParagraphs = $faker->numberBetween(2, 4);
            $bodyContent = '';
            for ($p = 0; $p < $numParagraphs; $p++) {
                $bodyContent .= '<p>' . $faker->paragraph($faker->numberBetween(5, 10)) . '</p>';
            }
            $bodyContent = str_replace($faker->word(), '<b>' . $faker->word() . '</b>', $bodyContent); // Optionally bold a random word

            DB::table('info')->insert([
                'image' => null,
                'title' => $faker->sentence(5, true),
                'date' => $faker->dateTimeBetween('-6 months', 'now')->format('Y-m-d'),
                'body' => $bodyContent,
            ]);
        }
    }
}