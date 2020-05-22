<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DistanceController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function display()
   {
        return view('distance');
   }

   public function calculate(Request $request)
   {
     $results = array(
       'unit' => '',
       'value' => 0
     );
     $unitsSelected = $request->input('unitsfrom');
     $calcvalue = $request->input('calcvalue');
    // echo('units selected: ' . $unitsSelected);

    $results[0][0] = 'inches';
    $results[1][0] = 'milimeters';
    $results[2][0] = 'feet';
    $results[3][0] = 'meters'; 
    $results[4][0] = 'miles';
    $results[5][0] = 'kilometers';
    

     switch ($unitsSelected) {

      case 'frominches':
       
        $results[0][1] = $calcvalue;
        $results[1][1] = $calcvalue * 25.4;
        $results[2][1] = $calcvalue / 12;
        $results[3][1] = $calcvalue * 0.0254;
        $results[4][1] = $calcvalue * 1.5782828282828E-5;
        $results[5][1] = $calcvalue;
        break;

      case 'frommm':
        $results[0][1] = $calcvalue;
        $results[1][1] = $calcvalue * 25.4;
        $results[2][1] = $calcvalue / 12;
        $results[3][1] = $calcvalue * 0.0254;
        $results[4][1] = $calcvalue * 1.5782828282828E-5;
        $results[5][1] = $calcvalue;
       
        break;
      case 'fromfeet':
        $results[0][1] = $calcvalue;
        $results[1][1] = $calcvalue * 25.4;
        $results[2][1] = $calcvalue / 12;
        $results[3][1] = $calcvalue * 0.0254;
        $results[4][1] = $calcvalue * 1.5782828282828E-5;
        $results[5][1] = $calcvalue;
        
        break;
      case 'frommetres':
        $results[0][1] = $calcvalue;
        $results[1][1] = $calcvalue * 25.4;
        $results[2][1] = $calcvalue / 12;
        $results[3][1] = $calcvalue * 0.0254;
        $results[4][1] = $calcvalue * 1.5782828282828E-5;
        $results[5][1] = $calcvalue;
        
        break;
      case 'frommiles':
        $results[0][1] = $calcvalue;
        $results[1][1] = $calcvalue * 25.4;
        $results[2][1] = $calcvalue / 12;
        $results[3][1] = $calcvalue * 0.0254;
        $results[4][1] = $calcvalue * 1.5782828282828E-5;
        $results[5][1] = $calcvalue;
        
        break;
      case 'fromkm':
        $results[0][1] = $calcvalue;
        $results[1][1] = $calcvalue * 25.4;
        $results[2][1] = $calcvalue / 12;
        $results[3][1] = $calcvalue * 0.0254;
        $results[4][1] = $calcvalue * 1.5782828282828E-5;
        $results[5][1] = $calcvalue;
       
        break;
     }
     return response()->json([$request->all()]);

     //return view('distance')->with('result' ,$results);
  }
     
  
    
}
