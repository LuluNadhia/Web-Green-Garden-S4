<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('artikel', [
            "title" => "Artikel",
            "posts" => Post::all() 
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => Post::find($slug)
        
            ]);
    }
}
