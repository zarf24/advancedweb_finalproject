<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class projectControl extends Controller
{
    function addData (Request $req)
    {
        $member = new project;

        $member->projectname = $req->name;
        $member->category = $req->category;
        
        $member->save();

        return redirect('/redirect');

    }

    

    
}
