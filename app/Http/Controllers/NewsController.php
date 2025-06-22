<?php

namespace App\Http\Controllers;

use App\Models\News; // Import model News
use Illuminate\Http\Request; // Import Request untuk menangani input
use Illuminate\Support\Facades\Validator; // Import Validator untuk validasi manual
use \Carbon\Carbon;

class NewsController extends Controller
{
    /**
     * Menampilkan daftar semua berita.
     */
    public static function index()
    {
        
        $news = News::orderBy('date', 'desc')->get()->map(function ($item) {
            $data = Carbon::parse($item->date);
            $item->date = Carbon::parse($item->date)->locale('id')->translatedFormat('j F Y');
            $item->department_name = ucwords(str_replace('_', ' ', $item->department->name));
            unset($item->department);
            unset($item->department_id);
            unset($item->created_at);
            unset($item->updated_at);
            return $item;
        });
        // Mengembalikan data dalam format JSON
        return $news;
        // return "ehebwehcbewicb";

        // {
        //     $news = News::with('department')->get();
        //     // Manipulate $news as needed
        //     return $news;
        // }
    }

    public static function getLatestNews($number = 1) {
        $news = News::orderBy('date', 'desc')
            ->take($number)
            ->get()
            ->map(function ($item) {
                $item->date = Carbon::parse($item->date)->locale('id')->translatedFormat('j F Y');
                $item->department_name = ucwords(str_replace('_', ' ', $item->department->name));
                unset($item->department);
                unset($item->department_id);
                unset($item->created_at);
                unset($item->updated_at);
                return $item;
            })
            ->toArray();
        return $news;
    }

    public static function getNewsById($id)
    {
        $news = News::with('department')->find($id);
        if ($news) {
            $news->date = Carbon::parse($news->date)->locale('id')->translatedFormat('j F Y');
            $news->department_name = ucwords(str_replace('_', ' ', $news->department->name));
            unset($news->department);
            unset($news->department_id);
            unset($news->created_at);
            unset($news->updated_at);
        }
        return $news;
    }

    /**
     * Menyimpan berita baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validasi data yang masuk
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'department_id' => 'required|exists:department,id', // Pastikan department_id ada di tabel department
            'date' => 'required|date',
            'body' => 'required|string',
            'desc' => 'nullable|string|max:500',
            'image' => 'nullable|string|max:255',
        ]);

        // Jika validasi gagal, kembalikan respons error JSON
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validasi gagal.',
                'errors' => $validator->errors()
            ], 422); // Kode status 422 Unprocessable Entity
        }

        // Membuat record berita baru di database
        $news = News::create($request->all());

        // Mengembalikan berita yang baru dibuat dalam format JSON dengan status 201 Created
        return response()->json([
            'message' => 'Berita berhasil ditambahkan.',
            'data' => $news
        ], 201);
    }

    /**
     * Menampilkan detail satu berita.
     *
     * @param  int  $id // Menggunakan ID karena ini API, bukan Route Model Binding otomatis
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        // Mencari berita berdasarkan ID, dengan eager loading department
        $news = News::with('department')->find($id);

        // Jika berita tidak ditemukan, kembalikan respons 404 Not Found
        if (!$news) {
            return response()->json(['message' => 'Berita tidak ditemukan.'], 404);
        }

        // Mengembalikan detail berita dalam format JSON
        return response()->json($news);
    }

    /**
     * Memperbarui berita yang sudah ada di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id // Menggunakan ID
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // Mencari berita yang akan diperbarui
        $news = News::find($id);

        // Jika berita tidak ditemukan, kembalikan respons 404 Not Found
        if (!$news) {
            return response()->json(['message' => 'Berita tidak ditemukan.'], 404);
        }

        // Validasi data yang masuk
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'department_id' => 'required|exists:department,id',
            'date' => 'required|date',
            'body' => 'required|string',
            'desc' => 'nullable|string|max:500',
            'image' => 'nullable|string|max:255',
        ]);

        // Jika validasi gagal, kembalikan respons error JSON
        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validasi gagal.',
                'errors' => $validator->errors()
            ], 422);
        }

        // Memperbarui record berita
        $news->update($request->all());

        // Mengembalikan berita yang diperbarui dalam format JSON
        return response()->json([
            'message' => 'Berita berhasil diperbarui.',
            'data' => $news
        ]);
    }

    /**
     * Menghapus berita dari database.
     *
     * @param  int  $id // Menggunakan ID
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        // Mencari berita yang akan dihapus
        $news = News::find($id);

        // Jika berita tidak ditemukan, kembalikan respons 404 Not Found
        if (!$news) {
            return response()->json(['message' => 'Berita tidak ditemukan.'], 404);
        }

        // Menghapus record berita
        $news->delete();

        // Mengembalikan respons sukses tanpa konten (204 No Content)
        return response()->json(['message' => 'Berita berhasil dihapus.'], 200);
    }
}