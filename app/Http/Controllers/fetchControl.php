<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class fetchControl extends Controller
{
    public function show()
    {
        $data=project::all();
        return view("leader.leaderpage",compact("data"));
    }
}
