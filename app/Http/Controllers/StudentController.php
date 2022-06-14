<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
// use App\Models\student;

class StudentController extends Controller
{
    function studentData()
    {
        return DB::table('students')->get();
    }
}
