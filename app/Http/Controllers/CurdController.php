<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\curd;
class CurdController extends Controller
{
   public function curd()
   {
   	// echo "working Curd";
   	return view('curd.create');

   }
   public function save(Request $data)
   {
   	// echo "saved";
   	// print_r($data->all());
   	$a=new curd;
   	$a->username=$data->username;
   	$a->password=$data->password;

   	$a->save();
   	if($a)
   	{
     return redirect('curd/create');
   	}
   }
}
