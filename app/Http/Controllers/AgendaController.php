<?php

namespace App\Http\Controllers;

use App\Models\AgendaEvent;
use App\Models\AgendaKategori;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function index(Request $request)
    {
        $kategoriAktif = $request->get('kategori', null);

        $kategori = AgendaKategori::all();

        $events = AgendaEvent::with('kategori')
            ->when($kategoriAktif, function ($q) use ($kategoriAktif) {
                $q->where('id_kategori', $kategoriAktif);
            })
            ->orderBy('tanggal')
            ->get();

        return view('pengunjung.agenda', compact(
            'events',
            'kategori',
            'kategoriAktif'
        ));
    }
}