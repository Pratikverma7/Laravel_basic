<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
class TeacherController extends Controller
{
   public function teacher()
   {
   	// echo "page working";
   	return view("teacher.form");
   }
   //insert query
   public function save(Request $data)
   {
   	// echo "insert successfull";
   	$a = new teacher;
   	$a->name=$data->name;
   	$a->college=$data->college;
   	$a->branch=$data->branch;
   	$a->salary=$data->salary;
   	$a->subject=$data->subject;
   	$a->address=$data->address;
   	$a->phone=$data->phone;
   	$a->email=$data->email;
   	$a->gender=$data->gender;


   	$a->save();

   	if($a)
   	{

   		return redirect('form');
   	}

   }

   //display query
   public function display()
   {
   	// echo "display check";
   	$data = teacher::all();
   	// echo "<pre>";
   	// print_r($data);
   	return view('teacher.display',compact('data'));
   }

   //show query
   public function show($id)
   {
   	$data = teacher::find($id);
   	return view('teacher.show',compact('data'));
   }

   //delete  query
   public function delete($id)
   {
   	$data = teacher::find($id);
   	$deleted = $data->delete();
   	if($deleted)
   	{
   		return redirect('teacher/display');
   	}
   }

   //edit/update query
   public function edit($id)
   {

	$data = teacher::find($id);
   	return view('teacher.edit',compact('data'));
   }
   //update query
   public function update(Request $a)
   {

   	$data = teacher::find($a->id);
   	$data->name=$a->name;
   	$data->college=$a->college;
   	$data->branch=$a->branch;
   	$data->salary=$a->salary;
   	$data->subject=$a->subject;
   	$data->address=$a->address;
   	$data->phone=$a->phone;
   	$data->email=$a->email;
   	$data->gender=$a->gender;
    $data->save();
    if($data)
    {
      	return view('teacher.display');     
    }
   }
} 
