<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistanceController extends Controller
{
  public function display()
   {
        return view('distance');
   }

   public function calculate(Request $request)
   {
     dd($request->all());  //to check all the datas dumped from the form
     //if your want to get single element,someName in this case
     //$calculate = $request->calculate;
     //echo($calculate);
   }
}
