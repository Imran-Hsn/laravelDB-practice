<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;

class RouteModelBindingController extends Controller
{
    public function RouteModel(employee $key) {
        return $key;
    }
}
