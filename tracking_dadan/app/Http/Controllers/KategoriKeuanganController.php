<?php
namespace App\Http\Controllers;

use App\Models\KategoriKeuangan;

class KategoriKeuanganController extends Controller
{
    public function index()
    {
        $kategori = KategoriKeuangan::all();
        return view('kategori_keuangan.index', compact('kategori'));
    }
}
