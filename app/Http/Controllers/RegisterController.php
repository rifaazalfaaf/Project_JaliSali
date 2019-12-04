<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function register(Request $request){
        DB::table('user')->insert([
            'Email'=>$request->email,
            'Username'=>$request->username,
            'Password'=>$request->password
        ]);
        return redirect('/login');
    }
}
