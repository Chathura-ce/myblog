<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::query()->pluck('id')->toArray();
        Category::factory(5)->create()->each(function ($category)use($users){
            Post::factory(rand(2,4))->create(
                [
                    'user_id'=>$users[array_rand($users)],
                    'category_id'=>$category->id,
                ]
            );
        });
    }
}
