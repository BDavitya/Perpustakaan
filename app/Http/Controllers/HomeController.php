<?php

namespace App\Http\Controllers;
use App\Models\Konten;
use App\Models\Buku;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $konten = Konten::orderBy('tanggal_publikasi', 'desc')
            ->paginate(5);
        
        $buku = Buku::all();

        return view('pengunjung.home_pengunjung', compact('konten', 'buku'));
    }
}