<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Portrait;

class FrontendPortraitController extends Controller
{
    public function index()
    {
        return view("frontend.portrait",[
            'portraits' => Portrait::query()->paginate(12)
        ]);
    }
    public function show(int $portraitId)
    {
        $portrait = Portrait::find($portraitId);
        return view("frontend.portrait_detail",[
            'portrait' => $portrait
        ]);
    }
}
