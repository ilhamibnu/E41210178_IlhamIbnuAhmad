<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Ilham Ibnu Ahmad",
        "prodi" => "Teknik Informatika",
        "jurusan" => "Teknologi Informasi",
        "nim" => "E41210178",
        "imgurl" => "https://awsimages.detik.net.id/visual/2022/09/11/bjorka.jpeg?w=650"
    ]);
});

Route::get('/test', function () {
    return view('test');
});
