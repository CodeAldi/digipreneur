<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LandingPageController extends Controller
{
    // render landing page
    function index() : View {
        return view('landing.index');
    }
}
