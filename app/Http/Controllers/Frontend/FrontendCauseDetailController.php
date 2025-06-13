<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class FrontendCauseDetailController extends Controller
{
    public function __invoke()
    {
        return view("frontend.cause_detail");
    }
}
