<?php

namespace App\Models;

use Illuminate\Support\Arr;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post //extends Model
{
    // use HasFactory;

    private static $blog_posts = [
        [
            'title' => 'makan ayam geprek mak nyosss',
            'slug' => 'makan-ayam-geprek-mak-nyosss',
            'author' => 'umam asfiyaul',
            'body' => '9090Lorem ipsum dolor sit amet consectetur, adipisicing elit.
             Eum officiis et voluptatibus atque enim? Laboriosam, dolor repellendus? Voluptate
              fugiat doloremque modi. Debitis commodi, aut hic impedit vel pariatur. 
              Dignissimos obcaecati qui accusantium, iste saepe, facere eius dolorum a autem,
               porro est. Odit blanditiis vel expedita quae accusamus! Non esse facilis quam 
               recusandae explicabo ut debitis ullam aut! Cum eius accusantium fuga autem! Enim 
               vero iure vitae dolore quidem harum eaque laboriosam explicabo ex minus ipsa ut 
               repellendus, a ad suscipit.'
        ],
        [
            'title' => 'makan lele kumis putih',
            'slug' => 'makan-lele-kumis-putih',
            'author' => 'syla laila',
            'body' => '  wwwwLorem ipsum dolor sit amet consectetur, adipisicing elit.
             Eum officiis et voluptatibus atque enim? Laboriosam, dolor repellendus? Voluptate
              fugiat doloremque modi. Debitis commodi, aut hic impedit vel pariatur. 
              Dignissimos obcaecati qui accusantium, iste saepe, facere eius dolorum a autem,
               porro est. Odit blanditiis vel expedita quae accusamus! Non esse facilis quam 
               recusandae explicabo ut debitis ullam aut! Cum eius accusantium fuga autem! Enim 
               vero iure vitae dolore quidem harum eaque laboriosam explicabo ex minus ipsa ut 
               repellendus, a ad suscipit.'
        ]
    ];

    public static function all()
    {
        // collection digunakan untuk membungkus array
        // dan digunakan untuk  aksi selanjutnya
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        
        // $post = [];
        // foreach($posts as $p){
        //     if($p['slug'] == $slug) {
        //         $post = $p;
        //     }
        // }

        // aksi yang digunakan adalah firstwhere dengan pengecekan kondisi ==
        return $posts->firstWhere('slug', $slug);
    }
}
