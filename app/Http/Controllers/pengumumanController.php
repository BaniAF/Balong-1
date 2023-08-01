<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class pengumumanController extends Controller
{
    public function index()
    {
        // Ambil semua data pengumuman dari tabel pengumuman
        $pengumuman = Pengumuman::all();

        // Kirim data pengumuman ke view 'landing'
        return view('landing', compact('pengumuman'));
    }
}
