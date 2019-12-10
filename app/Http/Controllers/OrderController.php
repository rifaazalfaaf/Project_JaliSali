<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jasa;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function buyer(){
        $jasa = Jasa::get();

        
        return view ('listorder',['jasa'=>$jasa]);
    }
}
