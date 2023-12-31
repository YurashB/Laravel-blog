<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryTagResource;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class EditController extends Controller
{

    public function __invoke(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return CategoryTagResource::make();
    }
}
