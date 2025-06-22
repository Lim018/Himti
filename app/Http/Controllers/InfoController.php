<?php

namespace App\Http\Controllers;

use App\Models\Info; // Import your Info model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // For file storage

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public static function index()
    {
        // Retrieve all infos, ordered by creation date descending
        $infos = Info::orderBy('date', 'desc')->get();

        // Return a view with the list of infos
        return $infos;
    }

    public static function getLatestInfo($number = 1) 
    {
        $infos = Info::orderBy('date', 'desc')
            ->take($number)
            ->get()
            ->map(function ($item) {
                $item->date = \Carbon\Carbon::parse($item->date)->locale('id')->translatedFormat('j F Y');
                unset($item->created_at);
                unset($item->updated_at);
                return $item;
            })
            ->toArray();
        
        return $infos;
    }

    public static function getInfoById($id)
    {
        $info = Info::find($id);
        if ($info) {
            $info->date = \Carbon\Carbon::parse($info->date)->locale('id')->translatedFormat('j F Y');
            unset($info->created_at);
            unset($info->updated_at);
        }
        return $info;
    }

}