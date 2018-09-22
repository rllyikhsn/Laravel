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