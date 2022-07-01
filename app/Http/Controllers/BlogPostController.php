<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function show($id)
    {
        $blogPost = BlogPost::query()->findOrFail($id);
        return view('website.blog-post', compact('blogPost'));
    }
}
