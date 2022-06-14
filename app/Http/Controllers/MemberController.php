<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    function showList() 
    {
        // $data = Member::all();
        // $data = Member::simplePaginate(5);
        $data = Member::paginate(10);
        return view('list',['members'=>$data]);
    }

    function delete($id)
    {
        $data=Member::find($id);
        $data->delete();

        Session::flash('success', 'Data Deleted Successfully!');
        return redirect('list');

    }

    function editData($id)
    {
        $member = Member::find($id);
        return view('edit', ['member'=>$member]);
    }

    function update(Request $req) 
    {
        $data=Member::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->address = $req->address;
        $data->save();
        return redirect('list');
    }

    function dbOperation()
    {
        $data = DB::table('members')
        ->where('address', 'Dhaka')
        ->get();
    //    return (array)DB::table('members')->find(2);
    //    return (array)DB::table('members')->count();
  
        return view('dbOperation', ['data'=>$data]);


        
 
        // $users = DB::table('users')->get();
 
        // foreach ($users as $user) {
        //     echo $user->name;
        // }
    }



}
