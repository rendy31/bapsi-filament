<?php

namespace App\Http\Controllers;

use App\Models\Panduan;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all();
        $panduans = Panduan::paginate(8);
        return view('home',compact('kategoris','panduans',));
    }

    public function about()
    {
        $kategoris = Kategori::all();
        return view('about',compact('kategoris'));
    }

    public function panduanPerKategori($id)
    {
        $kategoris = Kategori::all();
        $panduans = Panduan::where('kategori_id',$id)->get();
        return view('panduan',compact('panduans','kategoris'));
    }

    public function panduanDetail($id)
    {
        $kategoris = Kategori::all();
        $panduans = Panduan::where('id',$id)->get();
        return view('panduan-detail',compact('panduans','kategoris'));
    }
}
