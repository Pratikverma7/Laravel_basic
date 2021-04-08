<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('a');
});
Route::get('pratik', function () {
    return view('hello');
});

// Route::get('a','EmployeeController@create'); //@ define method
// Route::get('/','EmployeeController@display'); //@ define method
//condition controller
Route::get('p','ConditionController@if'); //@ define method
Route::get('aelse','ConditionController@else'); //@ define method
Route::get('elseif','ConditionController@elseif'); //@ define method
Route::get('aisset','ConditionController@isset'); //@ define method
// loop controller
Route::get('afor','LoopController@afor');
Route::get('awhile','LoopController@while');
Route::get('adowhile','LoopController@dowhile');
//curd contoller

Route::get('curd/create','CurdController@curd');
Route::post('curd/insert','CurdController@save');

//register controller
Route::get('register','RegisterController@register');
Route::post('register/insert','RegisterController@save');
Route::get('display','RegisterController@display');
Route::get('display/show{id}','RegisterController@show');
// @if(session('message'))

// 		     <p class ="alert alert-success">
// 		     	{{session('message')}}
// 		     </p>
		     	
// 		@endif

//task controller
Route::get('task/insert','TaskController@insert');

//form controller
Route::get('form','FormController@form');
Route::post('form/insert','FormController@save');
Route::get('form/display','FormController@display');
Route::get('form/formshow{id}','FormController@show');
Route::get('form/delete{id}','FormController@delete');

//teacher Controller
Route::get('teacher','TeacherController@teacher');
Route::post('teacher/insert','TeacherController@save');
Route::get('teacher/display','TeacherController@display');
Route::get('teacher/show/{id}','TeacherController@show');
Route::get('teacher/delete/{id}','TeacherController@delete');
Route::post('teacher/update/{id}','TeacherController@update');
Route::get('teacher/edit/{id}','TeacherController@edit');

//department controller
Route::get('image','DepartmentController@create');
Route::post('image/insert','DepartmentController@save');
//Banner controller
Route::get('banner','BannerController@banner');
Route::post('banner/insert','BannerController@save');
//
Route::get('member','MemberController@member');
Route::post('member/insert','MemberController@save');
Route::get('member/display','MemberController@display');
Route::get('member/show/{id}','MemberController@show');
Route::get('member/delete/{id}','MemberController@delete');
Route::get('member/edit/{id}','MemberController@edit');
Route::post('member/update','MemberController@update');




















