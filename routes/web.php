<?php

use Faker\Provider\Lorem;
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
        'title' => 'Home'

    ]);
    // return 'Halaman Home';
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Tedi Purwa Anugrah',
        'email' => 'tedipurwa@gmail.com'
    ]);
});




Route::get('/blog', function () {

    $blog_post = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Tedi Purwa Anugrah',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla tempore officiis nostrum nemo quibusdam libero adipisci voluptatem voluptas itaque, alias explicabo quia numquam obcaecati deleniti harum, nisi tenetur minima ullam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla tempore officiis nostrum nemo quibusdam libero adipisci voluptatem voluptas itaque, alias explicabo quia numquam obcaecati deleniti harum, nisi tenetur minima ullam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla tempore officiis nostrum nemo quibusdam libero adipisci voluptatem voluptas itaque, alias explicabo quia numquam obcaecati deleniti harum, nisi tenetur minima ullam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla tempore officiis nostrum nemo quibusdam libero adipisci voluptatem voluptas itaque, alias explicabo quia numquam obcaecati deleniti harum, nisi tenetur minima ullam?'


        ],
        [
            'title' => 'Judul Post kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Irham Syakir',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla tempore officiis nostrum nemo quibusdam libero adipisci voluptatem voluptas itaque, alias explicabo quia numquam obcaecati deleniti harum, nisi tenetur minima ullam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla tempore officiis nostrum nemo quibusdam libero adipisci voluptatem voluptas itaque, alias explicabo quia numquam obcaecati deleniti harum, nisi tenetur minima ullam?Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla tempore officiis nostrum nemo quibusdam libero adipisci voluptatem voluptas itaque, alias explicabo quia numquam obcaecati deleniti harum, nisi tenetur minima ullam?'


        ]



    ];

    return view('post', [
        'title' => 'Blog',
        'posts' => $blog_post

    ]);

});