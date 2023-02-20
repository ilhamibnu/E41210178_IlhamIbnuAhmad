<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    public static function dataabout()
    {
        return view('about', [
            "title" => "About",
            "nama" => "Ilham Ibnu Ahmad",
            "prodi" => "Teknik Informatika",
            "jurusan" => "Teknologi Informasi",
            "nim" => "E41210178",
            "imgurl" => "image/bjorka.jpg",
        ]);
    }
}