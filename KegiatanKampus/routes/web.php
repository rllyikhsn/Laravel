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
    return view('templates.pages.beranda');
});

Route::get('/kegiatan', function () {
    return view('templates.pages.kegiatan');
});

Route::get('/gallery', function () {
    return view('templates.pages.gallery');
});

Route::get('/jadwal', function () {
    return view('templates.pages.jadwal');
});

Route::get('/about', function () {
    return view('templates.pages.about');
});

Route::get('/pendaftaran', function () {
    return view('templates.pages.pendaftaran');
});