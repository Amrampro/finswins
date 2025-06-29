<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;

class FrontendAboutController extends Controller
{
    public function __invoke()
    {
        return view("frontend.about",[
            'testimonials'=>Testimonial::take(6)->get()
        ]);

    }
}
