<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //return "Hello From Pages Controller";
        return view('hello');
    }

    public function profile(){
        //return "Hello From Pages Controller";
        $name = "Mr. X";
        $id = "111";
        $dob = "11-11-11";
        //$details=array("Mr. X", "111", "11-11-11");
        $details=array("$name", "$id", "$dob");
        return view('profile')
        ->with('name', $name)
        ->with('id', $id)
        ->with('dob', $dob)
        ->with('details', $details);
/*        return view('profile', [
          "name"=>$name,
          "id"=>$id,
          "dob"=>$dob,
          "details"=>$details
        ]);
*/
    }
}
