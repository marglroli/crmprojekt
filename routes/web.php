<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('login_home');
});

Route::get('/index', function () {
    return view('index');
});

Route::view('/new_user','new_user');
Route::post('new_user',[UserController::class,'addData']);

Route::get('/users',[UserController::class, 'show']);