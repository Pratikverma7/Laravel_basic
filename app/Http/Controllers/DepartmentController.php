<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
class DepartmentController extends Controller
{
   public function create()
   {
   	// echo "working";
   	return view('image.create');
   }

   public function save(Request $a)
   {
    // print_r($a->file('image'));
    $file=$a->file('image');
    // dd($file);//dump and die use to check any code
    // exit;
    $filename='image'.time().'.'.$a->image->extension();
    // dd($filename);//dump and die use to check any code
    // exit;
    $file->move("upload/",$filename);
    $data = new Department;
    $data->name=$a->name;
    $data->image=$filename;

    $data->save();
   }
}
