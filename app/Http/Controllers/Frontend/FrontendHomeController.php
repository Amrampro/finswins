<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendHomeController extends Controller
{
    public function __invoke()
    {
        return view("frontend.home");

    }
}
