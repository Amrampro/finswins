<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class FrontendBlogController extends Controller
{
    public function index(Request $request)
    {
        return view("frontend.blogs.blog_index",[
            'blogs'=>Blog::when($request->has('blogCategory'), function ($query) use ($request) {
                $query->where('blog_category_id', $request->integer('blogCategory'));
            })->paginate(16),
            'blogCategories'=>BlogCategory::withCount('blogs')->get()
        ]);
    }
    public function show(int $blogId)
    {
        return view("frontend.blogs.blog_show",[
            'blog' => Blog::find($blogId)
        ]);
    }
}
