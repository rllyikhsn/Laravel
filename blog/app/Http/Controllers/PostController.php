<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //logic aplikasi controller yang akan digunakan nantinya
        $posts = [
            ['id'=>'1','title'=>'Post 1', 'body'=>'body post in id 1'],
            ['id'=>'2','title'=>'Post 2', 'body'=>'body post in id 2'],
            ['id'=>'3','title'=>'Post 3', 'body'=>'body post in id 3'],
            ['id'=>'4','title'=>'Post 4', 'body'=>'body post in id 4'],
        ];
    
        echo '<ul>';
        foreach ($posts as $post){
            echo '<li><a href="' .route ('post.detail', $post['id']) . '">'.$post['title'].'</a></li>';
        }
        echo '</ul>';
    }

    //pembuatan methode create post untuk diberikan ke route
    public function create()
    {
        //menampilkan halaman dari folder resource/views/create
        return view('create');
    }
    
    //pembuatan methode store inject post kedalam variabel
    public function store(Requst $request)
    {
        return dd($request->all());     
    }


}
