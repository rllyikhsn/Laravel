<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post; //menggunakan model Post
use App\Comment; //menggunakan model Comment

class PostCommentController extends Controller
{
    //membuat fungsi/method penyimpanan comment dengan lempar parameter Post=id
    public function store(Request $request, Post $post)
    {
        //melakukan daydump untuk melihat semua debugging dari hasil request post
        //dd(request('message'));

        //proses penyimpanan dengan class Comment :: membuat/mnginsert dengan dictionary
        /* Cara 1 :
        Comment::create([
            //nama field pada tabel didapatkan=>
            //$post =parameter, id=didapatkan dari post_id
            'post_id' => $post->id,
            //menggunakan helper authentication, didapatkan dari user_id
            'user_id' => auth()->id(),
            //menggunakan helper request/variabel $request, didapatkan dari nilai post message
            'message' => $request->message
        ]);
        */

        //Cara 2 :
        /* post masuk kerelasi komentar, lalu membuat komentar baru, tanpa pasing post_id, lalu di merge
        dengan helper request hanya nama textarea 'message', lalu user_id dari helpher authentication
        dijadikan field id() */
        $post -> comments() -> create (array_merge(
            $request->only('message'),
            ['user_id' => auth() -> id()]
        ));

        //balik lagi ke halaman show.blade.php
        return redirect()->back();
    }
}
