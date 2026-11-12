<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::published()->orderByDesc('published_at')->paginate(6);

        return view('blog.index', compact('posts'));
    }

    public function show(BlogPost $post)
    {
        // Ensure only published posts are publicly accessible
        if (! $post->is_published || ($post->published_at && $post->published_at->isFuture())) {
            abort(404);
        }

        return view('blog.show', compact('post'));
    }
}
