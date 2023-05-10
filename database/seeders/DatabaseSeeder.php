<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
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

        Post::create([
            'title' => 'post satu',            
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam enim aliquid vel nostrum sunt fugit voluptates similique, iure libero animi, porro accusamus. Debitis nobis, odio libero aut consequatur cupiditate. Veritatis deleniti repellendus labore quam, fugit amet ab velit autem perferendis.',
            
        ]);
        Post::create([
            'title' => 'post dua',            
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam enim aliquid vel nostrum sunt fugit voluptates similique, iure libero animi, porro accusamus. Debitis nobis, odio libero aut consequatur cupiditate. Veritatis deleniti repellendus labore quam, fugit amet ab velit autem perferendis.',
            
        ]);
    }
}
