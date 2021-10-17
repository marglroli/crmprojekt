<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\models\userModel;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    function show()
    {
        $data=DB::table('users')->get();
        return view('users',['users'=>$data]);

    }
}
