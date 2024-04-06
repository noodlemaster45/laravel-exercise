<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SanPham;
use App\Models\category;
use App\Http\Requests\CreateValidationRequest;
class PostController extends Controller
{
    public function index(Request $request){
        if($request->has('inputCateId')&&$request->inputCateId!=="All"){
            $product = SanPham::all()->where('category_id','==',$request->inputCateId);
        }else{
            $product = SanPham::all();
        }
        $category = category::all();
        $product->category = $category;
        return view("post")->with("product",$product)->with('category',$category);
    }
    public function create(){
        $category = category::all();
        return view("create")->with("category", $category);
    }
    public function store(Request $request){
        // $request->validated();
        $imgName = 'image'.time().'-'.$request->inputName.'.'.$request->inputImg->extension();
        $product = new SanPham();
        $product->name = $request->input("inputName");
        $product->description = $request->input("inputDesc"); 
        $product->price = $request->input("inputPrice");
        $product->category_id = $request->input("category");
        $product->image = $imgName;
        $product->save();
        $request->inputImg->move(public_path('images'),$imgName);
        return redirect("/post");
    }
    public function show($id){
        $product = SanPham::find($id);
        $category = category::find($product->category_id);
        $product->category = $category;
        return view('show')->with('product', $product);
    }
    public function edit($id){
        $product = SanPham::find($id);
        $category = category::all();    
        return view('edit',compact('product','category'));
    }
    public function update(Request $request, $id){
        $product = SanPham::where('id',$id)->update([
            'name' => $request->input('inputName'),
            'description' =>$request->input('inputDesc'),
            'price' => $request->input('inputPrice'),
            'category_id' =>$request->input('category'),
        ]);
        return redirect('/post');
    }
    public function destroy($id){
        $product = SanPham::find($id);
        $product->delete();
        return redirect('/post');
    }
}
