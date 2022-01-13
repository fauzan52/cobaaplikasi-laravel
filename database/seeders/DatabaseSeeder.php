<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
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
        $this->call(UserSeeder::class);
        $this->call(PostSeeder::class);
        $this->call(CategorySeeder::class);

        //        User::create([
        //            'name' => 'Fauzan Alghifari, S.Kom',
        //            'email' => 'fauzanalghifari007@gmail.com',
        //            'password' => bcrypt('12345')
        //        ]);
        //
        //        User::create([
        //            'name' => 'Fauzan',
        //            'email' => 'fauzan@gmail.com',
        //            'password' => bcrypt('12345')
        //        ]);
        //        User::factory(5)->create();
        //        Category::create([
        //            'name' => 'Web Programming',
        //            'slug' => 'web-programming'
        //        ]);
        //
        //        Category::create([
        //            'name' => 'Networking',
        //            'slug' => 'networking'
        //        ]);


        //        Post::create([
        //            'title' => 'Judul Postingan Pertama',
        //            'author' => 'Fauzan Alghifari, S.Kom',
        //            'slug' => 'judul-postingan-pertama',
        //            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, atque',
        //            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam fugit perferendis reprehenderit, et minus maiores repudiandae accusamus doloremque quasi.</p><p> Velit non odio magni ab odit, eum sed magnam saepe? Neque distinctio optio pariatur delectus. Aliquid, optio? Iure placeat necessitatibus aperiam quidem beatae maxime. Incidunt accusamus, temporibus libero aperiam vitae cum vel repellendus error facere, enim iste asperiores, quod explicabo iure eveniet quas nam perferendis? Adipisci corporis accusamus quisquam unde, sunt culpa quidem officiis iure rerum voluptate.</p><p> Consectetur maiores repudiandae provident fugiat ipsa nesciunt explicabo mollitia, reprehenderit veritatis rem odit ex ea tempore molestias culpa dolores asperiores minima excepturi cumque temporibus?</p>',
        //            'category_id' => 1,
        //            'user_id' => 1
        //        ]);
        //
        //         Post::create([
        //            'title' => 'Judul Postingan Kedua',
        //            'author' => 'Fauzan Alghifari, S.Kom',
        //            'slug' => 'judul-postingan-kedua',
        //            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, atque',
        //            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam fugit perferendis reprehenderit, et minus maiores repudiandae accusamus doloremque quasi.</p><p> Velit non odio magni ab odit, eum sed magnam saepe? Neque distinctio optio pariatur delectus. Aliquid, optio? Iure placeat necessitatibus aperiam quidem beatae maxime. Incidunt accusamus, temporibus libero aperiam vitae cum vel repellendus error facere, enim iste asperiores, quod explicabo iure eveniet quas nam perferendis? Adipisci corporis accusamus quisquam unde, sunt culpa quidem officiis iure rerum voluptate.</p><p> Consectetur maiores repudiandae provident fugiat ipsa nesciunt explicabo mollitia, reprehenderit veritatis rem odit ex ea tempore molestias culpa dolores asperiores minima excepturi cumque temporibus?</p>',
        //            'category_id' => 1,
        //            'user_id' => 2
        //            ]);

    }
}
