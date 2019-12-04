<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;
use App\Buyer;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function show()
    {
        return view('login');
    }

    public function check(Request $request){
        $user = Buyer::where('Username',$request->username)->first(); 
        if(!$user){
            //error id ga ada yg sama 
            Session::flash('salah','Username atau Password salah');
            return redirect('/login');
        }
        if($user->Password == $request->password){
            Session::put('status','buyer');
            Session::put('id',$user->Username);
            return redirect('/');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }
}
