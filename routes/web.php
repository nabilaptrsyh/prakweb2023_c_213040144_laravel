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
        "name" => "Nabila Putri Aisyah Insirawati",
        "email" => "lllalanabila300@gmail.com",
        "image" => "nabila.jpg"
    ]);
});




Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Black Hole",
            "slug" => "black-hole",
            "author" => "Nabila Putri Aisyah Insirawati",
            "body" => "A black hole is a region in space where gravity is so strong that nothing, including light or other electromagnetic waves, can escape it. They form from the remnants of a large star that dies in a supernova explosion, and the resulting gravitational field is incredibly powerful. Key features of a black hole include the event horizon, which is the boundary in spacetime through which matter and light can only pass inward towards the mass of the black hole, and the singularity, which is the point at the center of a black hole where spacetime curvature becomes infinite."
        ],
    
        [
            "title" => "Aurora",
            "slug" => "aurora",
            "author" => "Gilang Syaputra",
            "body" => "Aurora is a natural light display in Earth's sky, predominantly seen in high-latitude regions. It is also known as the northern lights (aurora borealis) or southern lights (aurora australis). Aurora is caused by the ionization and excitation of atmospheric constituents leading to auroral emissions."
        ],
    ];

    return view('posts', [
        "title" => "Post",
        "posts" => $blog_posts
    ]);
});


// halaman single post
Route::get('posts/{slug}', function($slug) {
        $blog_posts = [
            [
                "title" => "Black Hole",
                "slug" => "black-hole",
                "author" => "Nabila Putri Aisyah Insirawati",
                "body" => "A black hole is a region in space where gravity is so strong that nothing, including light or other electromagnetic waves, can escape it. They form from the remnants of a large star that dies in a supernova explosion, and the resulting gravitational field is incredibly powerful. Key features of a black hole include the event horizon, which is the boundary in spacetime through which matter and light can only pass inward towards the mass of the black hole, and the singularity, which is the point at the center of a black hole where spacetime curvature becomes infinite."
            ],
        
            [
                "title" => "Aurora",
                "slug" => "aurora",
                "author" => "Gilang Syaputra",
                "body" => "Aurora is a natural light display in Earth's sky, predominantly seen in high-latitude regions. It is also known as the northern lights (aurora borealis) or southern lights (aurora australis). Aurora is caused by the ionization and excitation of atmospheric constituents leading to auroral emissions."
            ],
        ];

        $new_post = [];
        foreach($blog_posts as $post) {
            if($post["slug"] === $slug) {
                $new_post = $post;
            }
        }

        return view('post', [
            "title" => "Single Post",
            "post" => $new_post
        ]);
    });
