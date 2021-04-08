<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function create()
    {
    	// echo "Pratik";

       return view('welcome');
    }

    public function display()
    {
    	// echo "How's The day ?";
    	$data="Pratik Verma";
    	$a="RJIT";
    	$b=''
    	return view('display',compact('data','a'));
    }
}
