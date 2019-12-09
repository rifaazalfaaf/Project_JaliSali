<?php

namespace App\Http\Controllers;


use App\Jasa;
use App\Http\Controllers\Controller;

class ListJasaController extends Controller
{
    public function show()
    {
        $jasa = Jasa::get();

        return view('list-jasa',['jasa'=>$jasa]);
    }
}
