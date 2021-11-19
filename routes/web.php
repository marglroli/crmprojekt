<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
    return view('login_home');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/new_customer', function () {
    return view('new_customer');
});

Route::post('register',[CustomerController::class,'register']);