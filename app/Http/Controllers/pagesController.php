<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
   public function index(){
       $title= "Welcome to Campus Today!";
       return view('pages.index')->with('title',$title);
   }
   public function about(){
       $title= "About Campus Today!";
       return view('pages.about')->with('title',$title);
   }
    public function services(){
        $title= "Our Services";
        return view('pages.services')->with('title',$title);
    }
}


