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
/* membuat opreasi read, Route method GET */
Route::get('/read', function () {
    /* menyimpan hasil select database ke dalam variabel */
    
    /* Method Versi 1
    $query = DB::select('select * from posts where id = ?', [1]); 
    */

    /* Method Versi 2 
    Menggunakan chain method memanggil dengan tipe data array
    */
    $query = DB::table('posts')->select('title','body')->where('id',1)->get();

    $query1 = DB::table('posts')->where('id',2)->get();

    /* memanggil dengan tipe data objek */
    $query2 = DB::table('posts')->where('id',2)->first();
    /* 
    melakukan nilai balik dengan return method vardump agar lebih jelas 
    */
    return var_dump($query,"<br>",$query1,"<br>",$query2);
});

/* membuat operasi update */
Route::get('/update', function () {
    /* Method Versi 1
    $update = DB::update('update posts set title = "Update FIeld Title" 
    where id = ?', [1]); */

    /* Method Versi 2 */
    $data = [
        'title'=>'Isian Title',
        'body'=>'Isian Body'
    ];
    $updated = DB::table('posts')->where('id',1)->update($data);
    return $updated;
});

/* Membuat operasi Delete */
Route::get('/delete', function () {
    /* Method Versi 1
    $delete = DB::delete('delete from posts where id = ?', [1]); 
    */

    $delete = DB::table('posts')->where('id',2)->delete();
    return $delete;
});