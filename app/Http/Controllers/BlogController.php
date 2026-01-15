<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class BlogController extends Controller
{
    // CREATE BLOG WITH CLOUDINARY
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'content' => 'required'
        ]);

        // Upload image to Cloudinary
        $uploadedImage = Cloudinary::upload(
            $request->file('image')->getRealPath(),
            [
                'folder' => 'blogs'
            ]
        );

        // Get secure URL
        $imageUrl = $uploadedImage->getSecurePath();

        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => $imageUrl, // ✅ Cloudinary URL
            'content' => $request->content,
            'status' => $request->status
        ]);

        return redirect()->back()->with('success', 'Blog added successfully');
    }

    // FRONTEND BLOG PAGE
    public function index()
    {
        $blogs = Blog::where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('layouts.blog', compact('blogs'));
    }

    // ADMIN PAGE
    public function adminIndex()
    {
        return view('layouts.admin.blog-create');
    }

    // API FOR ANGULARJS
    public function apiBlogs()
    {
        return response()->json([
            'status' => true,
            'data' => Blog::orderBy('created_at', 'desc')->get()
        ]);
    }

    // API DELETE
    public function apiDelete($id)
    {
        Blog::findOrFail($id)->delete();

        return response()->json(['status' => true]);
    }
}
