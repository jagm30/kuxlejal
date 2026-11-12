<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\GalleryItem;
use App\Models\Slide;

class HomeController extends Controller
{
    public function index()
    {
        $slides       = Slide::where('is_active', true)->orderBy('sort_order')->get();
        $galleryItems = GalleryItem::where('is_active', true)->orderBy('sort_order')->get();
        $latestPosts  = BlogPost::published()->latest('published_at')->take(3)->get();

        return view('welcome', compact('slides', 'galleryItems', 'latestPosts'));
    }
}
