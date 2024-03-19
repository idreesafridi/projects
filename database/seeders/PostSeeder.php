<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = Category::all();
        $user = User::all();

        for($i = 0; $i <=20; $i++)   {
            Post::create([
                'user_id' => $user->random()->id,
                'category_id' => $categories->random()->id,
                'title' => 'Post '. $i,
                'description' => 'Lorem ipsum dolor sit amet, Qui, quod, quibus.',
                

            ]);
    }
}
}
