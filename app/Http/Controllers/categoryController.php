<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
class categoryController extends Controller
{
    public function index(){
        $category = category::all();
        return view('category',compact('category'));
        
    }


    public function store(Request $req){
     $cat = $req->category;
     $data = array('category'=>$req->category);
     $count = category::where('category',$cat)->count();
     if($count==1){
        return redirect()->back()->with('failure','category already exists');
     }
     else{
        $query = category::create($data);
        return redirect()->back()->with('success','category added');
     }
     
     
    }

    public function delete($id){
        category::where('id',$id)->delete();
        return redirect()->back()->with('success','category deleted');
    }
    
}
