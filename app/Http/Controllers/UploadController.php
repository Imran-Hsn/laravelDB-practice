<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function uploadManager(Request $request)
    {
        // return $request->file('file')->store('docs');
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        echo $file->storeAs('images', $fileName);
    }
}
