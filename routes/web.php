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
        "name" => "muhammad urip",
        "email" => "mh17pwfc",
        "image" => "Mh_ProCode.png"
    ]);
});
Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "judul pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Urip",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit laboriosam consequatur, molestias autem saepe accusamus maxime vel corrupti ea explicabo possimus blanditiis corporis officiis. Ad, esse ducimus libero assumenda numquam maiores doloribus architecto dolorem vitae praesentium veritatis nihil officiis laborum? Doloribus, veniam quidem? Itaque tempore nemo nobis omnis. Tenetur itaque perferendis dolorem exercitationem totam praesentium nostrum! Iste incidunt culpa aliquid, nisi fugit officia vel magnam ab, ipsa ea ipsum quia blanditiis molestias velit distinctio nostrum labore iure? Possimus, quam suscipit!"
        ],
        [
            "title" => "judul kedua",
            "author" => "Muhammad Urip 2",
            "slug" => "judul-post-kedua",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia quidem at ratione magnam illum doloribus similique amet hic explicabo provident tempora et quo, facere libero eaque consectetur sint doloremque nisi, consequuntur minus labore facilis itaque error? Dolorem accusamus neque consequatur et, nihil iusto eveniet, assumenda recusandae ipsam aut, omnis ipsum natus repellat in aliquam sint corporis! Blanditiis eligendi, quasi laborum, officia excepturi minus maxime a dolorum itaque, facere sapiente ad! Et velit eos quod debitis? Maxime, culpa maiores molestiae tempore minima expedita nulla eaque debitis esse nemo blanditiis, asperiores dolorum quis fugit voluptas consequuntur alias. Expedita dolor magni commodi labore?
"
        ]
    ];
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});


// halaman singgel post
Route::get('/posts/{slug}', function ($slug) {
    return view('post');
});
