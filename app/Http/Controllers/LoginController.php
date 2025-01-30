<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // user login page
    public function userLogin()
    {
        return view("userLogin");
    }

    // user creation page
    public function userCreation()
    {
        return view("userCreation");
    }
}
