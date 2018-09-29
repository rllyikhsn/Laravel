<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //menggunakan model Post
use App\Category; //menggunakan model Cateogry

class PostController extends Controller
{
    //membuat fungsi/method menampilkan Write.blog
    public function create()
    {
        //menampilkan categories dari class Category
        $categories = Category::all();
        //untuk menampilkan view dan melakukan parsing 
        return view('post.create', compact('categories'));
    }

    //membuat fungsi/method untuk menyimpan
    public function store()
    {
        Post::create([
            //menggunakan dictionary dengan helper request dari nama create.blade.php
            'title' => request('title'),
            //pengambilan slug dari request title
            'slug' => str_slug(request('title')),
            'content' => request('content'),
            'category_id' => request('categori_id')
        ]);

        return redirect('/home');
    }

}
