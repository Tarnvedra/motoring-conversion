<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PressureController extends Controller
{
    public function display()
   {
        return view('pressure');
   }
}
