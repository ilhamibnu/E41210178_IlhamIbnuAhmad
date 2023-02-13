<?php

use App\Models\Post;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Ilham Ibnu Ahmad",
        "prodi" => "Teknik Informatika",
        "jurusan" => "Teknologi Informasi",
        "nim" => "E41210178",
        "imgurl" => "https://awsimages.detik.net.id/visual/2022/09/11/bjorka.jpeg?w=650"
    ]);
});

Route::get('/testaja', function () {
    return view('testaja', [
        "title" => "Home"
    ]);
});

Route::get('/404', function () {
    return view(
        '404'
    );
});

Route::get('/blog', function () {

    return view('blog', [
        "title" => "Post",
        "post" => Post::all()

    ]);
});



// halaman single post ngab

Route::get('blog/{slug}', function ($slug) {

    return view('post', [
        "title" => "single post",
        "post" => Post::find($slug)
    ]);

});