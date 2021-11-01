<?php

namespace App\Models;

use PhpParser\Node\Expr\FuncCall;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ahkam Mubarok",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam cumque modi minima nemo quas labore ut 
        consectetur, fugiat exercitationem. Eum quasi esse at cumque libero corporis temporibus facilis! Debitis sunt neque totam 
        repudiandae voluptatibus delectus ducimus voluptatum laudantium, aspernatur dignissimos ratione nulla dolore aliquam 
        sapiente id eum minima earum, temporibus dolor error consequatur. Deserunt, voluptatibus ad optio itaque fugiat laboriosam "
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mubarok Mahdalen",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quod quasi, nobis quae blanditiis dolorum fugit 
        soluta id magni accusamus enim velit laboriosam, quos perferendis, voluptatum autem! Ab debitis aliquid quod cumque placeat ex 
        commodi dolor magni nostrum veniam praesentium, perferendis perspiciatis ullam dolore accusantium suscipit assumenda ad quaerat, 
        omnis sed. Non maxime dolores, at laborum voluptatum soluta ipsa culpa exercitationem illum odio, architecto nihil eius id, 
        cupiditate eum enim atque numquam cumque repellat earum expedita. Dicta nemo itaque culpa exercitationem natus dolor in 
        consequuntur molestias cum! Perspiciatis minus necessitatibus maiores, dolorum consequuntur quos eligendi earum accusantium 
        repellat vitae distinctio!"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
