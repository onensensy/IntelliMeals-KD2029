<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bmicontroller extends Controller
{
    //
    public function index() {
        return view("bmi");
    }
    public function post (Request $request){
      
        $validated = $request ->validate([
          'mass' => 'required|min:2',
          'height' => 'required|min:1']);
        
         //print_r($validated);
        // $data = $request->input('ingr');
        $mass = $validated['mass'];
        $height = $validated['height'];
    
          $bmi = $mass/$height;
          
         if ($bmi <= 18.5) {
          $output = "UNDERWEIGHT";
          $result = "Your BMI value is  " . $bmi . "  and you are : " .$output; 
          return view('bmi')->with('k',$result);
          } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
          $output = "NORMAL WEIGHT";
          $result = "Your BMI value is  " . $bmi . "  and you are : " .$output; 
          return view('bmi')->with('k',$result);
          } else if ($bmi > 24.9 AND $bmi<=29.9) {
          $output = "OVERWEIGHT";
          $result = "Your BMI value is  " . $bmi . "  and you are : " .$output; 
          return view('bmi')->with('k',$result);
          } else if ($bmi > 30.0) {
          $output = "OBESE";
          $result = "Your BMI value is  " . $bmi . "  and you are : " .$output; 
          return view('bmi')->with('k',$result);
      }
      
}
}
