<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show()
    {
        $data = DB::table('users')
            ->get();
        return view('users', ['users' => $data]);
    }

    public function addData(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->user_email = $req->user_email;
        $user->password = $req->password;
        $user->save();
        return redirect('/users');
    }
}
