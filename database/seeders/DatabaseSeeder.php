<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $categories = Category::factory(40)->create();
        $tags = Tag::factory(40)->create();
        $posts = Post::factory(100)->create();

        foreach ($posts as $post) {
            $tagsId = $tags->random(5)->pluck('id');
            $post->tags()->attach($tagsId);
        }
    }
}
