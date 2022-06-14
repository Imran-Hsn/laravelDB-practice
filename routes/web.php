<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddMember;
use App\Http\Controllers\dataController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\SaveData;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// show data from users table (controller) route
Route::get('users',[UserController::class,'index']);
// Show all data from model
Route::get('getData',[dataController::class,'getData']);


// Session Login, Logout
Route::post('user_auth', [UserAuth::class, 'userLogin']);
// Route::view('login', 'login');
Route::view('profile', 'profile');

// If user is still logged in, then redirect user to profile page
Route::get('/login', function () {
    if(session()->has('user'))
    {
        return redirect('profile');
    }
    return view('login');
 });

 //Logout route
Route::get('/logout', function () {
   if(session()->has('user'))
   {
       session()->pull('user');
   }
   return redirect('login');
});

// Add member route
Route::post('addMember', [AddMember::class, 'add']);
Route::view('add', 'add');

// Route for upload
Route::view('upload', 'upload');
Route::post('uploadManager', [UploadController::class, 'uploadManager']);

// For show data from database
Route::get('list', [MemberController::class, 'showList']);


Route::view('saveData', 'saveData');
Route::post('saveData', [SaveData::class,'addDataToSave']);

// Route for delete data from list
Route::get('delete/{id}', [MemberController::class, 'delete']);
// Edit route
Route::get('edit/{id}', [MemberController::class, 'editData']);
Route::post('edit', [MemberController::class, 'update']);
// DBoperation route
// Route::get('dbop', [MemberController::class, 'dbOperation']);
