<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function studentList(){
        $student = array();
        for($i=0; $i<10; $i++){
            $student=array(
                "name"=>"Student ".($i+1),
                "id"=>"00".($i+1),
                "dob"=>"00-00-0000"
            );
            $students[]=(object)$student;
        }
        return view('pages.student.list')->with('students',$students);
    }

    public function studentcreate(){
        return view('pages.student.studentCreate');
    }

    public function studentcreatesubmitted(Request $request){
        $validate=$request->validate([
            'name' => 'required',
            'id' => 'required',
            'dob' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
        return "Student Info Submitted";
        //return view('pages.student.studentCreateSubmitted');
    }
}
