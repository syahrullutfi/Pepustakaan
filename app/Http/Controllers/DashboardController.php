<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
use App\Models\Category;
use App\Models\Penerbit;
use App\Models\Buku;

class DashboardController extends Controller
{
    public function index()
    {   
        $anggota = Anggota::all();
        $category = Category::all();
        $penerbit = Penerbit::all();
        $buku = Buku::all();
        return view('dashboard.index',compact('anggota', 'category', 'penerbit','buku'));
    }
}
