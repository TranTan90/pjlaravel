<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Newcontroller extends Controller
{
    
    function index()
    {

        $title ="this is title";
        $description ="this is description";
        $coppyring ="this is coppyright";
                return view('about')->with(['title'=>$title,'description'=> $description,'coppyright'=> $coppyring]);
    }



}
