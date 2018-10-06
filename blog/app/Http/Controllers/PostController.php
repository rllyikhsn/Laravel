<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //menggunakan model Post
use App\Category; //menggunakan model Cateogry

class PostController extends Controller
{
    //membuat fungsi/method untuk membaca data
    public function index()
    {
        //mengambil semua post ke variabel $posts
        $posts = Post::all();
        //daydump untuk menampilkan hasil variabel yang ada
        //dd($posts);
        //untuk menampilkan halaman index dan melempar ke variabel posts
        return view('post.index', compact('posts'));       
    }

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
        //membuat validasi agar tidak error dari hasil request
        $this->validate(request(),[
            //field yang digunakan => dibutuhkan
            'title' => 'required',
            //field yang digunakan => dibutuhkan|min10character
            'content' => 'required|min:10',
        ]);

        Post::create([
            //menggunakan dictionary dengan helper request dari nama create.blade.php
            'title' => request('title'),
            //pengambilan slug dari request title
            'slug' => str_slug(request('title')),
            'content' => request('content'),
            'category_id' => request('categori_id')
        ]);
        
        //fungsi with adalah untuk mentriger dari Flash Message dengan session
        return redirect()->route('post.index')->with('success', 'Data Berhasil Ditambahkan !');
    }

    //membuat fungsi/method untuk mengedit dari parameter id
    public function edit(Post $post)
    {   
        //menampilkan categories dari class Category
        $categories = Category::all();
        //menampilkan view dan melakukan parsing
        return view('post.edit', compact('post', 'categories'));
    }

    //membuat fungsi/method update untuk menyimpan hasil perubahan sesuai dengan id
    public function update(Post $post)
    {
        /* merubah nilai menggunakan update([array]),
        perubahan menggunakan key dan dictionary,
        berdasarkan field => mencari request berdasarkan
        nama yang ada pada edit.blade.php */
        $post->update([
            'title' => request('title'),
            'category_id' => request('categori_id'),
            'content' => request('content')
        ]);
        
        //melakukan redirect ke halaman post.index dan melakukan Flash Message
        return redirect()->route('post.index')->withInfo('Data Berhasil Diubah !');;
    }

    //membuat fungsi/method untuk menghapus data
    public function destroy(Post $post)
    {
        //menghapus berdasarkan id dengan variabel $post yang sudah diparsing id di routes
        $post->delete();

        //melakukan proses redirect ke halaman post.index dan melakukan Flash Message
        return redirect()->route('post.index')->withDanger('Data Berhasil Dihapus !');
    }

    //membuat fungsi/method untuk show detail kontent
    public function show(Post $post)
    {
        //menampilkan halaman
        return view ('post.show', compact('post'));
    }
}
