<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Team;
use App\Models\Testimonial;

class FrontendHomeController extends Controller
{
    public function __invoke()
    {
        $latestTeams = Team::query()->take(4)->get();
        return view("frontend.home",[
            'teams'=>$latestTeams,
            'blogs'=>Blog::take(3)->get(),
            'testimonials'=>Testimonial::latest()->take(6)->get(),
            'galleries'=>Gallery::query()->get()
        ]);

    }
}
