<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{
    function login() : View {
        // render login page
        return view('login');
    }

    function register() : View {
        // login register page
        return view('register');
    }
}
