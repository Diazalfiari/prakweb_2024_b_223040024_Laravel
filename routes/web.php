<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/about', function () {
    return view('about', ['name' => 'Diaz Alfiari Rachmad', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Real Madrid terbantai Barcelona!',
            'author' => 'Diaz Alfiari',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est iure animi illum fuga vel, deleniti blanditiis!
            Dicta, fugit laboriosam at aliquam natus facere possimus vel itaque perferendis voluptatibus! Adipisci,
            quia.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Vinicius Menangis saat tidak mendapatkan Ballon
            DOR!',
            'author' => 'Diaz Alfiari',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius officiis beatae numquam doloremque unde
            ducimus laboriosam ut, maxime iusto dolore explicabo accusamus exercitationem quo ipsam eveniet possimus
            soluta cupiditate inventore.'
        ]
    ]]);
});


Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Real Madrid terbantai Barcelona!',
            'author' => 'Diaz Alfiari',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Est iure animi illum fuga vel, deleniti blanditiis!
            Dicta, fugit laboriosam at aliquam natus facere possimus vel itaque perferendis voluptatibus! Adipisci,
            quia.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Vinicius Menangis saat tidak mendapatkan Ballon
            DOR!',
            'author' => 'Diaz Alfiari',
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius officiis beatae numquam doloremque unde
            ducimus laboriosam ut, maxime iusto dolore explicabo accusamus exercitationem quo ipsam eveniet possimus
            soluta cupiditate inventore.'
        ]
        ];

        $post = Arr::first($posts, function($post) use ($slug) {
            return $post['slug'] == $slug;
        });

        return  view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});