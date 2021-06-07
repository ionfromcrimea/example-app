<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('title')->get();
        $posts = Post::paginate(3);
        return view('pages.index', [
            'posts' => $posts,
            'categories' => $categories,
        ]);
    }

    public function getPostsByCategory($slug)
    {
        $categories = Category::orderBy('title')->get();
        $current_category = Category::where('slug', $slug)->first();
        return view('pages.index', [
            'posts' => $current_category->posts()->paginate(3),
            'categories' => $categories,
        ]);

    }

    public function getPost($slug_category, $slug_post)
    {
        $categories = Category::orderBy('title')->get();
        $post = Post::where('slug', $slug_post)->first();
        return view('pages.show-post', [
            'post' => $post,
            'categories' => $categories,
            'slug_category' => $slug_category,
        ]);
    }

}
