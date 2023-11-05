<?php

namespace App\Models;

class Post {
    private static $blog_posts = [
    [
        "title" => "Healthy Living Insights",
        "slug" => "healthy-living",
        "author" => "Nabila Putri Aisyah Insirawati",
        "body" => "This blog will delve into healthy lifestyle, including articles on nutrition, exercise, mental health, and healthy recipes. Additionally, you can share personal experiences in achieving a healthy life balance."
    ],
    [
        "title" => "Cutting-Edge Technology Insights",
        "slug" => "cutting-edge",
        "author" => "William Eve",
        "body" => "This blog will provide in-depth insights into the latest technology developments, including news articles, product reviews, and guides on using the latest hardware and software. You can also introduce future technologies and emerging trends."
    ]
    ];

    public static function all() {
        return collect(self::$blog_posts);   
    }

    public static function find($slug){
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug',$slug);
    }
}

?>