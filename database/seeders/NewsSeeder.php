<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Ambil ID departemen yang sudah ada dari tabel 'department'
        $departmentIds = DB::table('department')->pluck('id', 'name');

        $newsData = [];

        // --- Berita untuk Departemen Medinfo (Media Informasi dan Komunikasi) ---
        $newsData[] = [
            'title' => 'Medinfo Luncurkan Aplikasi Berita Interaktif Terbaru',
            'department_id' => $departmentIds['medinfo'],
            'date' => '2025-06-01',
            'body' => 'Departemen Media Informasi dan Komunikasi (Medinfo) dengan bangga memperkenalkan aplikasi berita interaktif yang akan memudahkan akses informasi bagi seluruh civitas akademika.',
            'desc' => 'Aplikasi berita inovatif hadir dari Medinfo.',
            'image' => 'medinfo_app.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Workshop Jurnalistik Digital Medinfo Sukses Digelar',
            'department_id' => $departmentIds['medinfo'],
            'date' => '2025-05-28',
            'body' => 'Workshop jurnalistik digital yang diadakan Medinfo menarik banyak peserta. Materi yang diberikan meliputi penulisan artikel SEO-friendly dan optimasi media sosial.',
            'desc' => 'Medinfo adakan workshop jurnalistik digital.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Kolaborasi Medinfo dan Komunitas Fotografi Kampus',
            'department_id' => $departmentIds['medinfo'],
            'date' => '2025-05-25',
            'body' => 'Medinfo menjalin kerja sama dengan komunitas fotografi kampus untuk dokumentasi berbagai kegiatan dan acara, menghasilkan visual yang menarik.',
            'desc' => 'Medinfo kolaborasi fotografi kampus.',
            'image' => 'medinfo_foto.png',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Podcast "Suara Kampus" Episode Terbaru Medinfo',
            'department_id' => $departmentIds['medinfo'],
            'date' => '2025-05-20',
            'body' => 'Episode terbaru podcast "Suara Kampus" dari Medinfo membahas isu-isu terkini dan menghadirkan narasumber inspiratif. Jangan lewatkan!',
            'desc' => 'Podcast "Suara Kampus" rilis episode baru.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Buletin Mingguan Medinfo: Edisi Khusus Ramadhan',
            'department_id' => $departmentIds['medinfo'],
            'date' => '2025-05-15',
            'body' => 'Buletin mingguan Medinfo edisi khusus Ramadhan telah terbit, berisi liputan kegiatan keagamaan dan tips sehat selama berpuasa.',
            'desc' => 'Edisi spesial Ramadhan buletin Medinfo.',
            'image' => 'medinfo_buletin.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        // --- Berita untuk Departemen Eksekutif ---
        $newsData[] = [
            'title' => 'Rapat Pleno Eksekutif Bahas Program Unggulan 2025',
            'department_id' => $departmentIds['eksekutif'],
            'date' => '2025-06-02',
            'body' => 'Departemen Eksekutif mengadakan rapat pleno untuk membahas dan menyusun rencana program-program unggulan yang akan dilaksanakan sepanjang tahun 2025.',
            'desc' => 'Eksekutif rapat program unggulan 2025.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Eksekutif Gelar Audiensi dengan Perwakilan Mahasiswa',
            'department_id' => $departmentIds['eksekutif'],
            'date' => '2025-05-30',
            'body' => 'Dalam upaya meningkatkan komunikasi, Departemen Eksekutif membuka forum audiensi dengan perwakilan mahasiswa untuk menyerap aspirasi dan masukan.',
            'desc' => 'Audiensi eksekutif dengan mahasiswa.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Kunjungan Kerja Departemen Eksekutif ke Kantor Pusat',
            'department_id' => $departmentIds['eksekutif'],
            'date' => '2025-05-26',
            'body' => 'Delegasi dari Departemen Eksekutif melakukan kunjungan kerja ke kantor pusat untuk koordinasi strategi dan pelaporan kinerja triwulan.',
            'desc' => 'Eksekutif kunjungan kerja ke kantor pusat.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Eksekutif Sampaikan Laporan Pertanggungjawaban Tengah Tahun',
            'department_id' => $departmentIds['eksekutif'],
            'date' => '2025-05-23',
            'body' => 'Laporan pertanggungjawaban tengah tahun Departemen Eksekutif telah disampaikan, menunjukkan kemajuan signifikan dalam pencapaian target.',
            'desc' => 'Laporan tengah tahun eksekutif disampaikan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Sosialisasi Kebijakan Baru oleh Departemen Eksekutif',
            'department_id' => $departmentIds['eksekutif'],
            'date' => '2025-05-17',
            'body' => 'Departemen Eksekutif mengadakan sosialisasi mengenai kebijakan-kebijakan baru yang akan segera diterapkan untuk efisiensi organisasi.',
            'desc' => 'Sosialisasi kebijakan baru eksekutif.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        // --- Berita untuk Departemen Pendidikan ---
        $newsData[] = [
            'title' => 'Pendidikan Luncurkan Program Mentoring Mahasiswa Baru',
            'department_id' => $departmentIds['pendidikan'],
            'date' => '2025-06-03',
            'body' => 'Departemen Pendidikan meluncurkan program mentoring komprehensif untuk membantu mahasiswa baru beradaptasi dan berprestasi di lingkungan kampus.',
            'desc' => 'Program mentoring maba oleh Pendidikan.',
            'image' => 'pendidikan_mentoring.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Seminar Peningkatan Kualitas Dosen oleh Pendidikan',
            'department_id' => $departmentIds['pendidikan'],
            'date' => '2025-05-31',
            'body' => 'Departemen Pendidikan mengadakan seminar dan lokakarya bagi dosen untuk meningkatkan kualitas pengajaran dan metodologi pembelajaran inovatif.',
            'desc' => 'Pendidikan adakan seminar dosen.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Rilis Modul Pembelajaran Interaktif Terbaru Pendidikan',
            'department_id' => $departmentIds['pendidikan'],
            'date' => '2025-05-29',
            'body' => 'Modul pembelajaran interaktif untuk mata kuliah dasar telah dirilis oleh Departemen Pendidikan, diharapkan dapat meningkatkan minat belajar mahasiswa.',
            'desc' => 'Modul pembelajaran interaktif baru.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Departemen Pendidikan Buka Pendaftaran Program Magang',
            'department_id' => $departmentIds['pendidikan'],
            'date' => '2025-05-24',
            'body' => 'Pendaftaran program magang bagi mahasiswa tingkat akhir dibuka oleh Departemen Pendidikan, memberikan kesempatan pengalaman kerja nyata.',
            'desc' => 'Pendaftaran magang dibuka Pendidikan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Kompetisi Inovasi Pendidikan Digelar Departemen Pendidikan',
            'department_id' => $departmentIds['pendidikan'],
            'date' => '2025-05-19',
            'body' => 'Departemen Pendidikan menyelenggarakan kompetisi inovasi pendidikan untuk mendorong kreativitas mahasiswa dalam menciptakan solusi pembelajaran.',
            'desc' => 'Kompetisi inovasi oleh Pendidikan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        // --- Berita untuk Departemen Perhubungan ---
        $newsData[] = [
            'title' => 'Perhubungan Resmikan Jalur Bus Kampus Baru',
            'department_id' => $departmentIds['perhubungan'],
            'date' => '2025-06-01',
            'body' => 'Departemen Perhubungan meresmikan jalur bus kampus baru yang lebih efisien dan terintegrasi, mengurangi waktu tunggu bagi penumpang.',
            'desc' => 'Jalur bus kampus baru diresmikan.',
            'image' => 'perhubungan_bus.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Sosialisasi Keselamatan Berkendara dari Perhubungan',
            'department_id' => $departmentIds['perhubungan'],
            'date' => '2025-05-27',
            'body' => 'Departemen Perhubungan mengadakan sosialisasi keselamatan berkendara bagi seluruh mahasiswa dan staf, bekerja sama dengan kepolisian setempat.',
            'desc' => 'Sosialisasi keselamatan berkendara.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Perhubungan Uji Coba Sistem Parkir Pintar',
            'department_id' => $departmentIds['perhubungan'],
            'date' => '2025-05-22',
            'body' => 'Dalam upaya modernisasi, Departemen Perhubungan sedang menguji coba sistem parkir pintar berbasis sensor untuk efisiensi penggunaan lahan parkir.',
            'desc' => 'Uji coba sistem parkir pintar.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Upgrade Fasilitas Pejalan Kaki oleh Perhubungan',
            'department_id' => $departmentIds['perhubungan'],
            'date' => '2025-05-18',
            'body' => 'Departemen Perhubungan melakukan peningkatan fasilitas pejalan kaki di sekitar area kampus untuk kenyamanan dan keamanan pengguna.',
            'desc' => 'Fasilitas pejalan kaki ditingkatkan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Perhubungan Adakan Survei Kepuasan Transportasi',
            'department_id' => $departmentIds['perhubungan'],
            'date' => '2025-05-14',
            'body' => 'Departemen Perhubungan mengajak seluruh anggota kampus untuk berpartisipasi dalam survei kepuasan layanan transportasi internal.',
            'desc' => 'Survei kepuasan transportasi diluncurkan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        // --- Berita untuk Departemen Ekraf (Ekonomi Kreatif) ---
        $newsData[] = [
            'title' => 'Ekraf Gelar Festival Seni dan Budaya Kampus',
            'department_id' => $departmentIds['ekraf'],
            'date' => '2025-06-03',
            'body' => 'Departemen Ekonomi Kreatif (Ekraf) menyelenggarakan festival seni dan budaya tahunan, menampilkan berbagai pertunjukan dan pameran karya.',
            'desc' => 'Ekraf adakan festival seni dan budaya.',
            'image' => 'ekraf_festival.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Workshop Membuat Kerajinan Tangan Berbasis Bahan Daur Ulang oleh Ekraf',
            'department_id' => $departmentIds['ekraf'],
            'date' => '2025-05-29',
            'body' => 'Ekraf mengadakan workshop inovatif mengenai pembuatan kerajinan tangan dari bahan daur ulang, mendorong kreativitas dan keberlanjutan lingkungan.',
            'desc' => 'Workshop kerajinan daur ulang Ekraf.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Pameran Startup Kreatif Mahasiswa oleh Ekraf',
            'department_id' => $departmentIds['ekraf'],
            'date' => '2025-05-24',
            'body' => 'Departemen Ekraf menyelenggarakan pameran startup kreatif yang didirikan oleh mahasiswa, menjembatani ide-ide inovatif dengan investor potensial.',
            'desc' => 'Ekraf pamerkan startup kreatif mahasiswa.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Ekraf Adakan Kelas Desain Karakter Digital',
            'department_id' => $departmentIds['ekraf'],
            'date' => '2025-05-20',
            'body' => 'Departemen Ekraf membuka kelas singkat desain karakter digital untuk pemula, dipandu oleh ahli industri animasi.',
            'desc' => 'Kelas desain karakter digital Ekraf.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Kolaborasi Ekraf dengan Pengusaha Lokal untuk Produk UMKM',
            'department_id' => $departmentIds['ekraf'],
            'date' => '2025-05-15',
            'body' => 'Ekraf bekerja sama dengan pengusaha UMKM lokal untuk mengembangkan produk-produk kreatif dan meningkatkan daya saing di pasar.',
            'desc' => 'Ekraf kolaborasi UMKM lokal.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        // --- Berita untuk Departemen Pengmas (Pengabdian Masyarakat) ---
        $newsData[] = [
            'title' => 'Pengmas Sukses Gelar Kampanye Kesehatan di Desa X',
            'department_id' => $departmentIds['pengmas'],
            'date' => '2025-06-02',
            'body' => 'Departemen Pengabdian Masyarakat (Pengmas) telah menyelesaikan kampanye kesehatan di Desa X, memberikan edukasi tentang hidup bersih dan sehat.',
            'desc' => 'Kampanye kesehatan Pengmas berhasil.',
            'image' => 'pengmas_kesehatan.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Program Pemberdayaan Ekonomi Masyarakat oleh Pengmas',
            'department_id' => $departmentIds['pengmas'],
            'date' => '2025-05-28',
            'body' => 'Pengmas meluncurkan program pemberdayaan ekonomi dengan memberikan pelatihan kewirausahaan kepada masyarakat lokal untuk meningkatkan pendapatan.',
            'desc' => 'Pengmas luncurkan program ekonomi.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Pengmas Adakan Bakti Sosial Lingkungan di Pesisir Pantai',
            'department_id' => $departmentIds['pengmas'],
            'date' => '2025-05-23',
            'body' => 'Departemen Pengmas menggelar kegiatan bakti sosial pembersihan pantai dan edukasi lingkungan kepada warga pesisir.',
            'desc' => 'Pengmas adakan bakti sosial lingkungan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Pelatihan Teknologi Tepat Guna untuk Petani oleh Pengmas',
            'department_id' => $departmentIds['pengmas'],
            'date' => '2025-05-19',
            'body' => 'Pengmas memberikan pelatihan penggunaan teknologi tepat guna kepada kelompok petani untuk meningkatkan produktivitas pertanian mereka.',
            'desc' => 'Pengmas latih petani teknologi.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Pengmas Buka Posko Bantuan Korban Bencana Alam',
            'department_id' => $departmentIds['pengmas'],
            'date' => '2025-05-14',
            'body' => 'Departemen Pengmas mendirikan posko bantuan dan menyalurkan donasi kepada korban bencana alam di wilayah terdampak.',
            'desc' => 'Posko bantuan bencana alam Pengmas.',
            'image' => 'pengmas_bencana.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        // --- Berita untuk Departemen PSDM (Pengembangan Sumber Daya Manusia) ---
        $newsData[] = [
            'title' => 'PSDM Gelar Job Fair dan Career Talk 2025',
            'department_id' => $departmentIds['psdm'],
            'date' => '2025-06-03',
            'body' => 'Departemen Pengembangan Sumber Daya Manusia (PSDM) menyelenggarakan Job Fair dan Career Talk tahunan, menghubungkan mahasiswa dengan perusahaan terkemuka.',
            'desc' => 'PSDM adakan Job Fair dan Career Talk.',
            'image' => 'psdm_jobfair.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Program Pengembangan Soft Skills oleh PSDM',
            'department_id' => $departmentIds['psdm'],
            'date' => '2025-05-30',
            'body' => 'PSDM meluncurkan serangkaian program pengembangan soft skills seperti komunikasi efektif dan pemecahan masalah untuk meningkatkan kapabilitas mahasiswa.',
            'desc' => 'PSDM luncurkan program soft skills.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'PSDM Adakan Pelatihan Wawancara Kerja dan Penulisan CV',
            'department_id' => $departmentIds['psdm'],
            'date' => '2025-05-26',
            'body' => 'Untuk mempersiapkan mahasiswa menghadapi dunia kerja, PSDM menyelenggarakan pelatihan intensif tentang teknik wawancara dan penulisan CV yang menarik.',
            'desc' => 'Pelatihan wawancara dan CV oleh PSDM.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'PSDM Buka Pendaftaran Beasiswa Talenta Unggul',
            'department_id' => $departmentIds['psdm'],
            'date' => '2025-05-21',
            'body' => 'Departemen PSDM membuka pendaftaran program beasiswa "Talenta Unggul" untuk mahasiswa yang menunjukkan potensi kepemimpinan dan inovasi.',
            'desc' => 'PSDM buka beasiswa talenta unggul.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'PSDM Gelar Seminar Motivasi dari Tokoh Inspiratif',
            'department_id' => $departmentIds['psdm'],
            'date' => '2025-05-16',
            'body' => 'Departemen PSDM sukses menggelar seminar motivasi dengan menghadirkan tokoh-tokoh inspiratif yang berbagi pengalaman dan tips meraih kesuksesan.',
            'desc' => 'Seminar motivasi dari PSDM.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('news')->insert($newsData);
    }
}