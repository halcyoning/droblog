<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

        User::create([
            'name' => 'Umam Asfiyaul',
            'username' => 'umamasfiyaul',
            'email' => 'umamasfiyaul@gmail.com',
            'password' => password_hash('11111', PASSWORD_BCRYPT),
        ]);

        // User::create([
        //     'name' => 'Sylia Khana',
        //     'email' => 'syliakhana@gmail.com',
        //     'password' => password_hash('123', PASSWORD_BCRYPT),
        // ]);

        // User::create([
        //     'name' => 'Fitri Yani',
        //     'email' => 'fitriyani@gmail.com',
        //     'password' => password_hash('123', PASSWORD_BCRYPT),
        // ]);

        // men generate user sebanyak 5
        User::factory(5)->create();

        Category::create([
            'name' => 'web development',
            'slug' => 'web-development'
        ]);

        Category::create([
            'name' => 'mobil development',
            'slug' => 'mobil-development'
        ]);

        Category::create([
            'name' => 'Data Engineer',
            'slug' => 'data-engineer'
        ]);

        Category::create([
            'name' => 'Data Analyst',
            'slug' => 'data-analyst'
        ]);

        Post::factory(100)->create();

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae blanditiis nihil porro cum aperiam temporibus',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae blanditiis nihil porro cum aperiam temporibus distinctio </p><p>doloremque libero facilis earum ratione adipisci, rerum sint iste quae vitae, veritatis molestias animi veniam? Doloribus et veritatis porro ratione quas explicabo animi repellat, magni maiores eveniet omnis atque sit sequi neque voluptatum, mollitia velit vel. Officia, labore et accusamus cum porro omnis doloribus dolorum ullam! Fuga ipsum eos deserunt voluptate quaerat suscipit, amet sit enim excepturi expedita iure? A dignissimos quaerat illum quod et blanditiis, sapiente vel reprehenderit minus magnam fugit tenetur! Porro, aut error iste </p><p> nulla veniam ratione tenetur corrupti fuga vel ipsam, natus possimus beatae debitis doloribus! Iusto aperiam cum natus veritatis, corrupti maxime voluptatibus? Nemo officia odit pariatur voluptatibus veniam tempore quasi nostrum minima, dolor placeat fugit culpa dolore aspernatur ipsa aliquid doloribus maxime ea impedit, nesciunt voluptate natus </p><p> assumenda! Facilis aperiam perferendis iure corporis dolores? Sequi debitis accusantium dignissimos, modi adipisci tenetur, sapiente ad veritatis beatae doloribus commodi ipsum minus illo necessitatibus perferendis possimus labore nobis deserunt, suscipit vero recusandae rem tempore! Molestias tempore voluptates, modi error officiis quam quae esse? Aperiam aliquam non, numquam quae dolorem ut et nostrum aspernatur illo recusandae necessitatibus. Accusamus eveniet quibusdam enim architecto?</p>'
        // ]);
    }
}
