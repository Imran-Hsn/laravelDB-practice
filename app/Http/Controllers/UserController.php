<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getData() {
        return DB::select('select * from users');
    }
}