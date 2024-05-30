<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Laptop",
            "slug" => "judul-post-pertama",
            "author" => "Ojan",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi officia suscipit non velit et. Tenetur voluptates numquam, quam, pariatur rerum quo eligendi, veniam reprehenderit harum labore doloremque. Dolorem, hic accusamus! Deleniti in unde, adipisci expedita tenetur ea earum veniam sint dicta laboriosam, omnis ex laudantium incidunt at beatae architecto temporibus voluptate? Laborum, mollitia rerum. Quae facere nisi eius dolor quia facilis quibusdam maxime iusto assumenda excepturi omnis sunt ducimus officia repudiandae a laborum earum voluptatum atque, similique perferendis illo dicta? ."
        ],
        [
            "title" => "Buku",
            "slug" => "judul-post-keuda",
            "author" => "Uus",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit non eius nostrum vel veniam rem dignissimos molestiae. Aliquid cupiditate velit at mollitia libero! Eos sequi nisi id debitis non porro animi, quae corrupti asperiores vero odio iste et pariatur, vel suscipit, alias error reprehenderit dolorem doloribus beatae commodi. Dolor consequatur nisi doloribus maiores, accusamus commodi. Harum rerum porro facere quaerat odit odio architecto iusto voluptatum provident quas, quibusdam suscipit laborum cumque autem eos qui placeat tempore asperiores ab vitae assumenda alias obcaecati vero! Adipisci iusto, odio sit expedita nemo enim, fugit esse maxime distinctio eaque similique quisquam architecto possimus. Fugiat?"
        ]
    ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($post as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
