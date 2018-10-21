<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use App\Student;

class studentController extends Controller
{
    function insert(Request $request){
        $id = $request->get('id');
        if(isset($id)){//update exist student
            $fristName = $request->get('fristName');
            $lastName = $request->get('lastName');
            $email = $request->get('email');
            $address = $request->get('address');
            Student::where('id',$id)->update([
                'fristName'=> $fristName,
                'lastName' => $lastName,
                'email' => $email,
                'address' => $address
            ]);
            return redirect('viewRecords');
        }else{//insert new student
            //Student::create($request->all());
            $student = new Student();
            $student->fristName = $request->get('fristName');
            $student->lastName = $request->get('lastName');
            $student->email = $request->get('email');
            $student->address = $request->get('address');
            $student->save();
        }
        return view('signup');
    }

    function  delete(Request $request){
        $id = $request->get('id');
        Student::where('id',$id)->delete();
        return redirect('viewRecords');
    }

    function update(Request $request){
        $id = $request->get('id');
        $student = Student::find($id);
        //return $student;
        return view('signup')->with(compact('student'));
    }
}
