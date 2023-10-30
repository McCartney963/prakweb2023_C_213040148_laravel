<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Michael Imama",
            "body"=> "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Molestiae est ipsum quidem aut in praesentium at provident libero maiores laboriosam corrupti cupiditate id explicabo, 
            facilis repudiandae debitis ea saepe non eum voluptate eos doloremque necessitatibus incidunt exercitationem.
            Explicabo dignissimos doloremque quas facere distinctio asperiores, 
            eius ipsam reprehenderit iste adipisci, obcaecati officia fuga eaque eum nobis,
            cum dolore praesentium. Repellat neque dolore recusandae sequi possimus reprehenderit ad architecto officia,
            iste quo ea accusamus saepe, omnis itaque provident minus eligendi pariatur rem?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug"=> "judul-post-kedua",
            "author" => "Michael Imama",
            "body"=> "Lorem ipsum dolor sit amet consectetur, 
            adipisicing elit. Corrupti, non perferendis expedita 
            illo incidunt beatae error officia cumque et cum nulla
            maiores eligendi laudantium modi assumenda doloribus molestias nisi consequuntur! 
            Numquam eos earum perferendis autem delectus,
            aspernatur nihil rem doloremque cum ipsum! Illo sit quis quae rem, incidunt non dignissimos est,
            libero cum aut ex accusantium in nihil. Ipsam a voluptate delectus. Aliquam quibusdam incidunt molestiae earum amet?
            Perferendis quaerat incidunt illo nostrum maxime?
            Recusandae esse ab quas minima! Dolor saepe blanditiis mollitia. Perspiciatis excepturi id cum sit ducimus aliquid error asperiores commodi illum, recusandae ea accusantium, labore odio porro?"
        ],
    ];
    
        public static function all()
        {
            return collect(self::$blog_posts);
        }

        public static function find($slug)
    {
    
        $posts = static::all();
    return $posts->firstWhere("slug", $slug);
    }
    }