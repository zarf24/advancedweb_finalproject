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
            
            $data=project::all();
            return view('leader.leaderpage',compact("data"));
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
        $data=project::find($projectid);

        return view('manager.updateproject', ['disp'=>$data]);
        
    }

    function setstatus(Request $req)
    {
        $data=project::find($req->projectid);

        $data->stage=$req->stage;
        $data->status=$req->status;

        $data->save();

        return redirect('/redirect');
    }
}
