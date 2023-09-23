<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::query()
            ->where('status', 'Active')
            ->orderBy('created_at', 'DESC')
            ->first();

        $blogs = Blog::query()
            ->where('status', 'Active')
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('frontend.pages.blog.blog', compact('blogs', 'blog'));
    }

    public function showBlogInside($lang=null,$id)
    {
        $blog = Blog::query()
            ->where('status', 'Active')
            ->orderBy('created_at', 'DESC')
            ->findOrFail($id);

        $blogs = Blog::query()
            ->where('status', 'Active')
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('frontend.pages.blog.blog-inside', compact('blogs', 'blog'));
    }
}
