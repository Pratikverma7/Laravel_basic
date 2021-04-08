<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;

class FormController extends Controller
{
   public function form()
   {
   	// echo "Form working";
   	return view('form.form');
   }

  //insert data

   public function save(Request $data)
   {
   	// echo "data inserted";
     // print_r($request->all());
   	$a = new form;
   	$a->name=$data->name;
   	$a->address=$data->address;
   	$a->college=$data->college;
   	$a->email=$data->email;
   	$a->gender=$data->gender;
   	$a->phone=$data->phone;

   	$a->save();

   	if($a)
   	{

   		return redirect('form');
   	}

   }


   //data display
  //display method
   public function display()
   {
   	// echo "display check";
   	$data = form::all();
   	// echo "<pre>";
   	// print_r($data);
   	return view('form.formdisplay',compact('data'));
   }

   //delete data
   public function delete($id)
   {
   	// echo "$id";
   	$data = form::find($id);
   	$deleted = $data->delete();
   	if($deleted)
   	{
      return redirect('form/formdisplay');
   	}
   }

   //show data
   public function show($id)
   {
   	// echo "$id";
   	$data = form::find($id);
   	// echo "<pre>";
   	// print_r($data);
     return redirect('form/formshow');
   
   }

}
