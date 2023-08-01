<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Pengumuman;

class LandingController extends Controller
{
    public function index()
    {
        // Ambil data artikel dan pengumuman dari masing-masing controller
        $articles = Article::all();
        $pengumuman = Pengumuman::all();

        // Kirim data artikel dan pengumuman ke view 'landing'
        return view('landing', compact('articles', 'pengumuman'));
    }
}
