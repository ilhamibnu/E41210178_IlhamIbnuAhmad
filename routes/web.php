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

Route::get('/blog', function () {


$blog_posts = [

    [
        "title" => "Judul Post Pertama",
        "slug" => "judulpostpertama",
        "author" => "Ilham",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, facere quaerat facilis fugiat illo nostrum corrupti tenetur
        aperiam quis non aliquam voluptas inventore maiores vel similique enim minus repellendus iste id porro quod! Fugiat harum illo iure ea facere
        distinctio accusamus reiciendis omnis. Itaque autem similique magnam, cum officia beatae commodi quos ab, nam sint ipsum. Omnis in, voluptate
        rerum dolore tenetur fuga sint laboriosam similique possimus autem nobis eius, sequi porro distinctio earum qui quas explicabo dolorem doloribus inventore.
        "
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judulpostkedua",
        "author" => "Rijal",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, facere quaerat facilis fugiat illo nostrum corrupti tenetur
        aperiam quis non aliquam voluptas inventore maiores vel similique enim minus repellendus iste id porro quod! Fugiat harum illo iure ea facere
        distinctio accusamus reiciendis omnis. Itaque autem similique magnam, cum officia beatae commodi quos ab, nam sint ipsum. Omnis in, voluptate
        rerum dolore tenetur fuga sint laboriosam similique possimus autem nobis eius, sequi porro distinctio earum qui quas explicabo dolorem doloribus inventore.
        "
    ]



];

    return view('blog', [
        "title" => "Post",
        "posts" => $blog_posts
    ]);
});

// halaman single post ngab

Route::get('blogs/{slug}', function($slug){


$blog_contents = [

    [
        "title" => "Judul Post Pertama",
        "slug" => "judulpostpertama",
        "author" => "Ilham",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, facere quaerat facilis fugiat illo nostrum corrupti tenetur
        aperiam quis non aliquam voluptas inventore maiores vel similique enim minus repellendus iste id porro quod! Fugiat harum illo iure ea facere
        distinctio accusamus reiciendis omnis. Itaque autem similique magnam, cum officia beatae commodi quos ab, nam sint ipsum. Omnis in, voluptate
        rerum dolore tenetur fuga sint laboriosam similique possimus autem nobis eius, sequi porro distinctio earum qui quas explicabo dolorem doloribus inventore.
        "
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judulpostkedua",
        "author" => "Rijal",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, facere quaerat facilis fugiat illo nostrum corrupti tenetur
        aperiam quis non aliquam voluptas inventore maiores vel similique enim minus repellendus iste id porro quod! Fugiat harum illo iure ea facere
        distinctio accusamus reiciendis omnis. Itaque autem similique magnam, cum officia beatae commodi quos ab, nam sint ipsum. Omnis in, voluptate
        rerum dolore tenetur fuga sint laboriosam similique possimus autem nobis eius, sequi porro distinctio earum qui quas explicabo dolorem doloribus inventore.
        "
    ],

];

$new_post = [];
foreach($blog_contents as $post){
    if($post["slug"] === $slug){
        $new_post = $post;
    }
}

    return view('post', [
        "title" => "single post",
        "post" => $new_post,
    ]);

});
