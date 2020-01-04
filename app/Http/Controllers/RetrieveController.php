<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RetrieveController extends Controller
{
    public function display()
   {
        return view('retrieve');
   }
}
