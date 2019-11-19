<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }
}
