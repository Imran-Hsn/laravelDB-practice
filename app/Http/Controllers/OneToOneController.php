<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
// use App\Models\Company;
// use Illuminate\Support\Facades\DB;

class OneToOneController extends Controller
{
    public function oneToOne() 
    {
        return employee::find(2)->getCompany;
    }
}
