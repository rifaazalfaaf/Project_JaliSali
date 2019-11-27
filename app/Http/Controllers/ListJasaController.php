<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class ListJasaController extends Controller
{
    public function show()
    {
        return view('list-jasa');
    }
}
