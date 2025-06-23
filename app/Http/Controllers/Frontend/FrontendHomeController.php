<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Gallery;
use App\Models\Team;

class FrontendHomeController extends Controller
{
    public function __invoke()
    {
        $latestTeams = Team::query()->take(4)->get();
        return view("frontend.home",[
            'teams'=>$latestTeams,
            'galleries'=>Gallery::query()->get(),
            'blogs'=>Blog::take(3)->get()
        ]);

    }
}
