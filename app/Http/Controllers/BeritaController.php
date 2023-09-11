<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    //
    public function index()
    {
        $beritas = Blog::all();
        return view('berita.berita',['berita' => $beritas]);
    }
}
