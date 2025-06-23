<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Team;

class FrontendGalleryController extends Controller
{
    public function __invoke()
    {
        return view("frontend.gallery",[
        ]);

    }
}
