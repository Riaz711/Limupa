<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function loginRegister(){
        return view('frontEnd.customer.login-register');
    }
    public function customerAccount(){
        return view('frontEnd.customer.customer-account');
    }
    public function logout(){
        return view('frontEnd.customer.login-register');
    }
}
