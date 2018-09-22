<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostControllerResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan nilai dari return
        //return 'Hello, ini methode index dalam PostControllerResource';
        //data array untuk postingan
        $posts = [
            ['id'=>'1','title'=>'Post 1', 'body'=>'body post in id 1'],
            ['id'=>'2','title'=>'Post 2', 'body'=>'body post in id 2'],
            ['id'=>'3','title'=>'Post 3', 'body'=>'body post in id 3'],
            ['id'=>'4','title'=>'Post 4', 'body'=>'body post in id 4'],
        ];

        /*
        memanggil halaman index.blade dengan memanggil variabel yang ada,
        dengan menambahkan parameter compact memanggil var tanpa $
        */
        return view ('index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menampilkan resources dari create.blade.php
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //memunculkan data dump and day dari seluruh request user
        return dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //memanggil halaman show
        return 'Ini halaman show dengan id : ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //memanggil halaman edit
        return 'Ini halaman edit dengan id : ' . $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
