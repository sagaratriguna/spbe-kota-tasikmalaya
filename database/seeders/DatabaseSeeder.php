<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

            User::create([
                'name' => 'Gumelar Sagara Triguna',
                'username' => 'gumelarsagara',
                'email' => 'gumelar@gmail.com',
                'password' => bcrypt('12345')
            ]);

            // User::create([
            //     'name' => 'Renata Indriani',
            //     'email' => 'renata@gmail.com',
            //     'password' => bcrypt('12345')
            // ]);


            User::factory(3)->create();

            Category::create([
                'name' => 'News',
                'slug' => 'news'
            ]);

            Category::create([
                'name' => 'Article',
                'slug' => 'article'
            ]);

            Post::factory(50)->create();

    }
}
