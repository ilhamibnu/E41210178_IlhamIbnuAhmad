<?php

namespace App\Models;

use PHPUnit\Framework\MockObject\Stub\ReturnSelf;

class Post
{
    private static $blog_post = [

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

    public static function all()
    {

        return self::$blog_post;
    }

    public static function find($slug)
    {
        $posts = self::$blog_post;
        $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }
        return $post;
    }


}