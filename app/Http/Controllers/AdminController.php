<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function login_page()
    {
        return view('sign-in');
    }

    public function app()
    {
        return view('app');
    }
}
