<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Portrait;
use App\Models\Team;

class FrontendTeamController extends Controller
{
    public function __invoke()
    {
        return view("frontend.team",[
            'teams' => Team::query()->paginate(16)
        ]);
    }
}
