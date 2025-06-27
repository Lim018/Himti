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
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Aplikasi berita inovatif hadir dari Medinfo.',
            'image' => 'medinfo_app.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Workshop Jurnalistik Digital Medinfo Sukses Digelar',
            'department_id' => $departmentIds['medinfo'],
            'date' => '2025-05-28',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Medinfo adakan workshop jurnalistik digital.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Kolaborasi Medinfo dan Komunitas Fotografi Kampus',
            'department_id' => $departmentIds['medinfo'],
            'date' => '2025-05-25',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Medinfo kolaborasi fotografi kampus.',
            'image' => 'medinfo_foto.png',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Podcast "Suara Kampus" Episode Terbaru Medinfo',
            'department_id' => $departmentIds['medinfo'],
            'date' => '2025-05-20',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Podcast "Suara Kampus" rilis episode baru.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Buletin Mingguan Medinfo: Edisi Khusus Ramadhan',
            'department_id' => $departmentIds['medinfo'],
            'date' => '2025-05-15',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
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
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Eksekutif rapat program unggulan 2025.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Eksekutif Gelar Audiensi dengan Perwakilan Mahasiswa',
            'department_id' => $departmentIds['eksekutif'],
            'date' => '2025-05-30',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Audiensi eksekutif dengan mahasiswa.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Kunjungan Kerja Departemen Eksekutif ke Kantor Pusat',
            'department_id' => $departmentIds['eksekutif'],
            'date' => '2025-05-26',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Eksekutif kunjungan kerja ke kantor pusat.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Eksekutif Sampaikan Laporan Pertanggungjawaban Tengah Tahun',
            'department_id' => $departmentIds['eksekutif'],
            'date' => '2025-05-23',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Laporan tengah tahun eksekutif disampaikan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Sosialisasi Kebijakan Baru oleh Departemen Eksekutif',
            'department_id' => $departmentIds['eksekutif'],
            'date' => '2025-05-17',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
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
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Program mentoring maba oleh Pendidikan.',
            'image' => 'pendidikan_mentoring.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Seminar Peningkatan Kualitas Dosen oleh Pendidikan',
            'department_id' => $departmentIds['pendidikan'],
            'date' => '2025-05-31',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Pendidikan adakan seminar dosen.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Rilis Modul Pembelajaran Interaktif Terbaru Pendidikan',
            'department_id' => $departmentIds['pendidikan'],
            'date' => '2025-05-29',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Modul pembelajaran interaktif baru.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Departemen Pendidikan Buka Pendaftaran Program Magang',
            'department_id' => $departmentIds['pendidikan'],
            'date' => '2025-05-24',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Pendaftaran magang dibuka Pendidikan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Kompetisi Inovasi Pendidikan Digelar Departemen Pendidikan',
            'department_id' => $departmentIds['pendidikan'],
            'date' => '2025-05-19',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
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
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Jalur bus kampus baru diresmikan.',
            'image' => 'perhubungan_bus.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Sosialisasi Keselamatan Berkendara dari Perhubungan',
            'department_id' => $departmentIds['perhubungan'],
            'date' => '2025-05-27',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Sosialisasi keselamatan berkendara.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Perhubungan Uji Coba Sistem Parkir Pintar',
            'department_id' => $departmentIds['perhubungan'],
            'date' => '2025-05-22',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Uji coba sistem parkir pintar.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Upgrade Fasilitas Pejalan Kaki oleh Perhubungan',
            'department_id' => $departmentIds['perhubungan'],
            'date' => '2025-05-18',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Fasilitas pejalan kaki ditingkatkan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Perhubungan Adakan Survei Kepuasan Transportasi',
            'department_id' => $departmentIds['perhubungan'],
            'date' => '2025-05-14',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
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
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Ekraf adakan festival seni dan budaya.',
            'image' => 'ekraf_festival.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Workshop Membuat Kerajinan Tangan Berbasis Bahan Daur Ulang oleh Ekraf',
            'department_id' => $departmentIds['ekraf'],
            'date' => '2025-05-29',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Workshop kerajinan daur ulang Ekraf.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Pameran Startup Kreatif Mahasiswa oleh Ekraf',
            'department_id' => $departmentIds['ekraf'],
            'date' => '2025-05-24',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Ekraf pamerkan startup kreatif mahasiswa.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Ekraf Adakan Kelas Desain Karakter Digital',
            'department_id' => $departmentIds['ekraf'],
            'date' => '2025-05-20',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Kelas desain karakter digital Ekraf.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Kolaborasi Ekraf dengan Pengusaha Lokal untuk Produk UMKM',
            'department_id' => $departmentIds['ekraf'],
            'date' => '2025-05-15',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
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
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Kampanye kesehatan Pengmas berhasil.',
            'image' => 'pengmas_kesehatan.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Program Pemberdayaan Ekonomi Masyarakat oleh Pengmas',
            'department_id' => $departmentIds['pengmas'],
            'date' => '2025-05-28',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Pengmas luncurkan program ekonomi.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Pengmas Adakan Bakti Sosial Lingkungan di Pesisir Pantai',
            'department_id' => $departmentIds['pengmas'],
            'date' => '2025-05-23',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Pengmas adakan bakti sosial lingkungan.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Pelatihan Teknologi Tepat Guna untuk Petani oleh Pengmas',
            'department_id' => $departmentIds['pengmas'],
            'date' => '2025-05-19',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Pengmas latih petani teknologi.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Pengmas Buka Posko Bantuan Korban Bencana Alam',
            'department_id' => $departmentIds['pengmas'],
            'date' => '2025-05-14',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
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
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'PSDM adakan Job Fair dan Career Talk.',
            'image' => 'psdm_jobfair.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'Program Pengembangan Soft Skills oleh PSDM',
            'department_id' => $departmentIds['psdm'],
            'date' => '2025-05-30',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'PSDM luncurkan program soft skills.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'PSDM Adakan Pelatihan Wawancara Kerja dan Penulisan CV',
            'department_id' => $departmentIds['psdm'],
            'date' => '2025-05-26',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Pelatihan wawancara dan CV oleh PSDM.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'PSDM Buka Pendaftaran Beasiswa Talenta Unggul',
            'department_id' => $departmentIds['psdm'],
            'date' => '2025-05-21',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'PSDM buka beasiswa talenta unggul.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];
        $newsData[] = [
            'title' => 'PSDM Gelar Seminar Motivasi dari Tokoh Inspiratif',
            'department_id' => $departmentIds['psdm'],
            'date' => '2025-05-16',
            'body' => '
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eros urna, malesuada non tincidunt eu, tincidunt at dolor. Nulla scelerisque sem tortor, a maximus magna sagittis sed. Suspendisse accumsan ex sit amet volutpat euismod. Sed faucibus sit amet purus vitae interdum. Sed dictum odio tortor, id hendrerit lacus laoreet at. Mauris a tincidunt dui, aliquam condimentum diam. Praesent nec viverra risus. Maecenas lobortis eros eget orci elementum accumsan. Aliquam a urna mollis, varius libero ac, sodales urna. Quisque varius rutrum est eget ullamcorper. Nulla at est libero. Curabitur dictum velit ut leo consectetur maximus. Vestibulum ac porttitor dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec non urna turpis. Nunc ac maximus diam.</p>

                <p>Quisque in justo at est sollicitudin venenatis ac vitae mi. Aliquam ac velit vel sem elementum venenatis. In volutpat hendrerit lobortis. Nam a tincidunt ante. Etiam nec iaculis ligula. Praesent consequat lorem ut diam varius rhoncus. Cras mauris ex, aliquam et volutpat ut, fringilla at elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed suscipit cursus ultrices. Suspendisse nulla ex, laoreet eget urna vitae, fringilla interdum neque.</p>

                <p>In commodo ipsum a orci facilisis accumsan. Aenean eu condimentum velit. Vivamus volutpat iaculis metus, vel gravida eros fringilla et. Morbi elementum augue sagittis facilisis efficitur. Duis diam turpis, fermentum eget suscipit auctor, hendrerit et risus. Sed molestie posuere sem. Cras tincidunt aliquet aliquet. Nam lobortis, lacus sit amet ultricies tincidunt, velit ipsum semper ipsum, eu molestie velit purus at enim. Proin fermentum purus diam, id tempor quam lacinia sed. Etiam lobortis ullamcorper sagittis. In consequat sollicitudin sem, in suscipit nibh vestibulum eget. Quisque euismod neque tortor, eget auctor nibh placerat ut. Sed neque magna, aliquam a purus laoreet, ultrices feugiat massa. Nulla egestas neque et sapien sodales, in ultricies urna gravida.</p>',
            'desc' => 'Seminar motivasi dari PSDM.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        DB::table('news')->insert($newsData);
    }
}