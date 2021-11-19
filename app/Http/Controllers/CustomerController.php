<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;

class CustomerController extends Controller
{
    function register(Request $req)
    {
        $customer = new CustomerModel;
        $customer-> email=$req->email;
        $customer-> name=$req->name;
        $customer-> address=$req->address;
        $pw=$req->password;
        $customer-> password=bcrypt($req->password);
        $customer-> company=$req->company;
        $customer-> save();
        return redirect('/new_employee');
    }
}
