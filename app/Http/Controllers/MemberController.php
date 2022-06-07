<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function show() 
    {
        // $data = Member::all();
        // $data = Member::simplePaginate(5);
        $data = Member::paginate(5);
        return view('list',['members'=>$data]);
    }
}
