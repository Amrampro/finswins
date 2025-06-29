<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;

class FrontendCauseDetailController extends Controller
{
    public function __invoke()
    {
        return view("frontend.cause_detail",[
            'recentPosts'=>Blog::with('blogCategory')->latest()->take(3)->get()
        ]);
    }
}
