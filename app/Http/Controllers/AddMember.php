<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMember extends Controller
{
    function add(Request $req) 
    {
        $data = $req->input('username');
        $req->session()->flash('username', $data);
        return redirect('add');
    }
}
