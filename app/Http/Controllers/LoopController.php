<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoopController extends Controller
{
   public function afor()
   {
      // echo "Checking done";
   	  $i="1 .";
   	  $data="THIS IS FOR LOOP";
      return view("loop.for",compact('i','data'));
   }
   public function while()
   {
   	// echo "checking While loop";
   	$data="This Is While Loop()";
   	return view("loop.while",compact('data'));
   }

   public function dowhile()
   {
   	// echo "Checking dowhile loop";
   	$data="This is Do While Loop () ";
   	return view("loop.while",compact('data'));
   }
}
