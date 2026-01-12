<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class UserBlogController extends Controller
{
    // Blog listing page
    public function index()
    {
        return view('layouts.blog');
    }

    // Single blog page
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)
                    ->where('status', 'published')
                    ->firstOrFail();

        return view('layouts.blog-detail', compact('blog'));
    }
}
