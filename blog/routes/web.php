<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect ('/about');
    /*return view('welcome');*/
});

Route::get('/about', function(){
    return 'Hi, This About Page';
});

//pemanggilan controller @index=method yang akan di gunakan
Route::get('/blog', 'PostController@index');
//membuat route untuk create post
Route::get('/post/create','PostController@create');
Route::post('/post/store','PostController@store');
Route::post('/post/store','PostController@store');

//membuat route untuk menampilkan array dari controller
Route::get('/post/{id}', ['as'=>'post.detail', function($id){
    echo "Post $id";
    echo "</br>";
    echo "Body Post in ID = $id";
}]);

/*membuat route untuk CRUD dari penggunaan resource
tidak memanggil methode dari PostControllerResource karena
akan memanggil semua method
*/
Route::resource('postCRUD', 'PostControllerResource');


/* membuat operasi create , Route methode GET
closure
*/
Route::get('/insert', function () {
    /* memanggil class db dan method insert */
    
    /* Method Versi 1
    DB::insert('insert into posts (title, body, user_id) values (?, ?, ?)', ['Belajar php dengan laravel',
    'laravel the best framework','1']); 
    */

    /* Method Versi 2 dengan chain method insert dengan data yang ingin diisi
    Penggunaan array key sesuai degan field yang digunakan table
    */
    $data = [
        'title'=>'Disini isian title',
        'body'=>'Disini isian body',
        'user_id'=>2
    ];
    /* class db sebagai query builder */
    DB::table('posts')->insert($data);
    echo "Data Berhasil Ditambah";
    
});