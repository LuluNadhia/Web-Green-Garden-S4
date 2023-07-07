<?php
//use Illuminate\Support\Facades\Route;
namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;

class Post //extends Model
{
   private static $artikel_posts = [
    [
        "title" => " Judul Artikel satu", 
        "slug" => "judul-post-pertama",
        "author" => " Lulu Nadhia",
        "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate porro voluptatibus sunt officia accusamus perferendis? 
        Veniam velit incidunt ipsa excepturi quos. Itaque aspernatur, odit repellat quasi architecto eum accusantium sunt?",
        ],

    [
        "title" => " Judul Artikel dua",
        "slug" => "judul-post-kedua",
        "author" => "  Nadhia",
        "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate porro voluptatibus sunt officia accusamus perferendis? 
        Veniam velit incidunt ipsa excepturi quos. Itaque aspernatur, odit repellat quasi architecto eum accusantium sunt?",
        ]

    ];

    public static function all()
    {
        return collect(self::$artikel_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
   // use HasFactory;
}
