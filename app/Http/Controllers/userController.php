<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show(){
        $data= DB::table('users')
        ->get();
        return view('users',['users'=>$data]);
    }
}
