<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
class RegisterController extends Controller
{
   public function register()
   {
   	// echo "checked working";
   	return view('register');
   }

   public function save(Request $data)
   {
   	// echo "data inserted";
     // print_r($request->all());
   	$a = new Register;
   	$a->name=$data->name;
   	$a->college=$data->college;
   	$a->email=$data->email;
   	$a->phone=$data->phone;

   	$a->save();

   	if($a)
   	{

   		return redirect('register');
   	}

   }

   //display method
   public function display()
   {
   	// echo "display check";
   	$data = Register::all();
   	// echo "<pre>";
   	// print_r($data);
   	return view('display',compact('data'));
   }

   //show method
   public function show($id)
   {
   	echo $id;
   }

}
