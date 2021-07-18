<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function RegisterForm()
    {
        return view('register');
    }
    public function RegisterCustomer(Request $request)
    {

        Customer::Create([
            'fname' => $request['fname'],
            'lname' => $request['lname'],
            'email' => $request['email'],
            'gender' => $request['gender'],
            'departmentId' => $request['departmentId'],


        ]);
        return redirect('login');
    }
}
