<?php

namespace App\Http\Controllers;
use App\Models\Konten;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $konten = Konten::orderBy('tanggal_publikasi', 'desc')
            ->paginate(5);

        return view('pengunjung.home_pengunjung', compact('konten'));
    }
}