<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            Post::create([
                'title' => 'Title ' . ($i + 1),
                'body' => 'Body ' . ($i + 1),
                'userId' => rand(1, 10) // Assuming you have 10 users in the users table
            ]);
        }
    }
}
