<?php

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
use App\Student;

Route::get('/', function () {
    return view('welcome');
});

Route::get('signup',function (){
    return view('signup');
});

Route::post('signup','studentController@insert');

Route::get('viewRecords',function (){
    $allStudents = Student::all();
    return view('viewRecords',['allStudents'=>$allStudents]);
});

Route::post('deleteStudent', 'studentController@delete');

Route::post('updateStudent', 'studentController@update');

Route::get('testing',function (){
   return "dotest";
});
