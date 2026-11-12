<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\GalleryItem;
use App\Models\Slide;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', [
            'slidesCount'  => Slide::count(),
            'galleryCount' => GalleryItem::count(),
            'postsCount'   => BlogPost::where('is_published', true)->count(),
        ]);
    }
}
