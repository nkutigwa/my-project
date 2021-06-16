<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\RemoteConfig\User;

class RegisterController extends Controller
{
    public function show_register_form()
    {
        return view('register');
    }
}