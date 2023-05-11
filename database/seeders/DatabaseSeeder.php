<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=> 'Hadi Purnomo',         
            'email' => 'hadi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name'=> 'Eko',         
            'email' => 'eko@gmail.com',
            'password' => bcrypt('12345')
        ]);


        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Backend Developer',
            'slug' => 'backend-developer'
        ]);

        Category::create([
            'name' => 'Pentester',
            'slug' => 'pentester'
        ]);

        
        Post::create([
            'title' => 'post satu',  
            'slug' => 'post-satu',      
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam enim aliquid vel nostrum sunt fugit voluptates similique, iure libero animi, porro accusamus. Debitis nobis, odio libero aut consequatur cupiditate. Veritatis deleniti repellendus labore quam, fugit amet ab velit autem perferendis.',
            'category_id' => 1,
            'user_id' => 1
            
        ]);
        Post::create([
            'title' => 'post dua',  
            'slug' => 'post-dua',           
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam enim aliquid vel nostrum sunt fugit voluptates similique, iure libero animi, porro accusamus. Debitis nobis, odio libero aut consequatur cupiditate. Veritatis deleniti repellendus labore quam, fugit amet ab velit autem perferendis.',
            'category_id' => 1,
            'user_id' => 2
        ]);
        Post::create([
            'title' => 'post tiga',  
            'slug' => 'post-tiga',           
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam enim aliquid vel nostrum sunt fugit voluptates similique, iure libero animi, porro accusamus. Debitis nobis, odio libero aut consequatur cupiditate. Veritatis deleniti repellendus labore quam, fugit amet ab velit autem perferendis.',
            'category_id' => 3,
            'user_id' => 1
        ]);
    }
}
