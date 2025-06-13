<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendBlogController extends Controller
{
    public function __invoke()
    {
        return view("frontend.blogs.blog_index");
    }
}
