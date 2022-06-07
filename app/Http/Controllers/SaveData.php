<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

use Illuminate\Support\Facades\Session;

class SaveData extends Controller
{
    function addDataToSave(Request $req)
    {
        $employee = new employee;
        $employee->name=$req->name;
        $employee->email=$req->email;
        $employee->address=$req->address;
        $employee->save();

        Session::flash('success', 'Data saved successfully!');

        return redirect('saveData');
    }
}
