<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test1Controller extends Controller
{
    public function index(){
        return view("input");
    }
    public function detail(Request $request){
        $key = $request->ngu;
        return view("test1",compact("key"));
    }
}
