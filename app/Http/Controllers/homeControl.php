<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\project;

class homeControl extends Controller
{
    function index()
    {
        return view("home");
    }

    function redirectFunct()
    {
        $typeuser=Auth::user()->usertype;

        if($typeuser=='1')
        {
            $data=project::all();
            return view("manager.managerpage",compact("data"));
        }

        else{
            return view('leader.leaderpage');
        }

    }

    function deleteProject($projectid)
    {
        $data=project::find($projectid);

        $data->delete();

        return redirect('/redirect');
    }

    function showProject($projectid)
    {
        return project::find($projectid);
        
    }
}
