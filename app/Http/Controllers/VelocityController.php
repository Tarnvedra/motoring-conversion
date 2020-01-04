<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VelocityController extends Controller
{
    public function display()
   {
        return view('velocity');
   }
}
