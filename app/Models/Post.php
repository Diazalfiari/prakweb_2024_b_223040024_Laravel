<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all() {
        return [
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
    }

    public static function find($slug): array
    {
    
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

        if (! $post) {
            abort(404);
    }
    return $post;
}
}