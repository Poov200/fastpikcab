<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;



class BlogController extends Controller
{
    // CREATE BLOG (OK)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|image',
            'content' => 'required'
        ]);

        $imagePath = $request->file('image')->store('blogs', 'public');

        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => $imagePath,
            'content' => $request->content,
            'status' => $request->status
        ]);

        return redirect()->back()->with('success', 'Blog added successfully');
    }

    // FRONTEND BLOG PAGE (OK)
    public function index()
    {
        $blogs = Blog::where('status', 'published')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('layouts.blog', compact('blogs'));
    }

    // ADMIN PAGE (ONLY LOAD VIEW)
    public function adminIndex()
    {
        return view('layouts.admin.blog-create'); // ✅ no $blogs
    }

    // ✅ API FOR ANGULARJS
    public function apiBlogs()
    {
        return response()->json([
            'status' => true,
            'data' => Blog::orderBy('created_at', 'desc')->get()
        ]);
    }

    // ✅ API DELETE
    public function apiDelete($id)
    {
        Blog::findOrFail($id)->delete();

        return response()->json(['status' => true]);
    }
}
