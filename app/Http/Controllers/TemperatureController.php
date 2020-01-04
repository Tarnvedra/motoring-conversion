<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemperatureController extends Controller
{
    public function display()
   {
        return view('temperature');
   }
}
