<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('home');
    }
    public function pservice(){
        $a = "Product A";
        $b = "Product B";
        $c = "Product C";
        $pnames=array($a, $b, $c);
        return view('product/service')
        ->with('a', $a)
        ->with('b', $b)
        ->with('c', $c)
        ->with('pnames', $pnames);
    }
    public function ourteams(){
        return view('our_teams');
    }
    public function aboutus(){
        return view('about_us');
    }
    public function contactus(){
        return view('contact_us');
    }
}
