<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    function studentData()
    {
        // $data = (array)DB::table('students')->find(1);
        // return view('studentList', ['data'=>$data]);

        // return DB::table('students')->count();

        // $stu = DB::table('students')->get();
        // $i=0;
        // foreach($stu as $data)
        // {
        //     $i++;
        //     echo $i . '.' . $data->name . "   -   ". $data->email . " <br>";
        // }

        // This method will return the value of the column directly:
        // return DB::table('students')->where('name', 'Imran Hasan')->value('email');

        // return $names= DB::table('students')->pluck('name')->dump();

        // $i=0;
        // foreach($names as $name) {
        //     $i++;
        //     echo $i ." ". $name . '<br/>';
        // }

        // $totals = DB::table('students')->pluck('name');
        // foreach($totals as $total){
        //     echo $total . "<br>";
        // }

        // return DB::table('students')->avg('name');
        // return student::all();

        $student = new student;
        $student->name = 'Mejba';
        $student->email= 'mejba@test.com';
        $student->save();
    }
}