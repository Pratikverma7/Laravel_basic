<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
class MemberController extends Controller
{
    public function member()
    {
    	// echo "working";
    	return view('Member.index');
    }

    //insert query
    public function save(Request $a)
    {

    // $this->validate($a,["name"=>"required|max:8|min:3"
    //   ,"email"=>"required|max:30|max:8|email|unique:members",
    //   "image"="required"
    // ])
    $file=$a->file('image');
    $filename='image'.time().'.'.$a->image->extension();
    $file->move("upload/",$filename);
    $data = new Member;
    $data->name=$a->name;
    $data->email=$a->email;
    $data->phone=$a->phone;
    $data->post=$a->post;
    $data->gender=$a->gender;
    $data->education=$a->education;
    $data->image=$filename;
    $data->save();
    if($data)
    {
    	return redirect('member')->with('$message','Registred Successfully');
    }
    }

    //display query
    public function display()
    {
    	// echo "Display working";
    	$a= member::all();
        // echo"<pre>";
        // print_r($a);
    	return view('Member.display',compact('a'));
    }
    
    //edit/update query
   public function edit($id)
   {

	$a = member::find($id);
   	return view('Member.edit',compact('a'));
   }

   //show query
   public function show($id)
   {
   	$a = member::find($id);
   	return view('Member.show',compact('a'));
   }

   //delete query
   public function delete($id)
   {
   	$a = member::find($id);
   	$deleted = $a->delete();
   	if($deleted)
   	{
   		return redirect('member/display');
   	}
   }

   //update query
   public function update(Request $a)
   {
   	// $file=$a->file('image');
    // $filename='image'.time().'.'.$a->image->extension();
    // $file->move("upload/",$filename);
   	 $data = new Member;
    $data->name=$a->name;
    $data->email=$a->email;
    $data->phone=$a->phone;
    $data->post=$a->post;
    $data->gender=$a->gender;
    $data->education=$a->education;
    $data->image=$filename;

    $data->save();
    if($data)
    {
    	return redirect('member/display');
    }
   }
}
