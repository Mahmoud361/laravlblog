<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Validator;

use App\Student;

class studentController extends Controller
{
    function insert(Request $request){
//        $request->validate([
//            'fristName' => 'required|max:5',
//            'lastName'  => 'required|max:255',
//            'email'     => 'required',
//            'address'   => 'required|max:255',
//        ]);

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
            //$student->fristName = $request->get('fristName');
            $student->setFristName($request->get('fristName'));

            $student->setLastName($request->get('lastName'));
            $student->setEmail($request->get('email'));
            $student->setAddress($request->get('address'));

            $student->save();
        }
        return view('signup');
    }

    function  delete(Request $request){
        $id = $request->get('id');
        Student::where('id',$id)->delete();
        return redirect('viewRecords');
    }

    function getStudent(Request $request){
        $id = $request->get('id');
        $student = Student::find($id);
        //return $student;
        return view('signup')->with(compact('student'));
    }
}
