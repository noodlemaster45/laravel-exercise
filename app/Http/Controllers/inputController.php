<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inputController extends Controller
{
    public function index(){
        return view("input");
    }
    public function indexKey($key){
        return "my friend is a ".$key;
    }
    public function inputKey(Request $request){
        $key = $request->input("name");
        echo "my best friend is".$key;
    }
    public function detail(){
        $detail =[
            "id"=> "1",
            "des"=> "blah blah",
        ];
        return view('input',compact('detail'));
    }
}
