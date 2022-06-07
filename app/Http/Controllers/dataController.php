<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class dataController extends Controller
{
    function getData() 
    {
        return User::all();
    }
}
