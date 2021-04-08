<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionController extends Controller
{
   public function if()
   {
   	// echo "hello Php if loop";
   	$data ="Pratik Verma";
   	$a="if loop";
   	return view("condition.if",compact('data','a'));
   }
   public function else()
   {
   	// echo "This is Else loop";
   	$data="This is Else loop";
   	$i='2';
   	return view("condition.esle",compact('data','i'));
   }
   public function elseif()
   {
   	// echo "This is Elseif";
   	$a="THIS IS ELSEIF LOOP";
   	$b="Have a Great Day";
   	return view("condition.elseif",compact('a','b'));
   }

   public function isset()
   {
   	// echo "Pratik isset";
   	$a="This is Pratik Verma ";
   	$b="This is isset condition";
   	return view("condition.isset",compact('a','b'));
   }
}
