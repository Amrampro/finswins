<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendAboutController extends Controller
{
    public function __invoke()
    {
        return view("frontend.about");

    }
}
