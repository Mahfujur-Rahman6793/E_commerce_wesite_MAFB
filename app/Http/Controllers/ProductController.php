<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\category;
use App\Models\Amount;


class ProductController extends Controller
{
    public function index(){
        $category= category::all();
        $product = Product::all();
        return view('product',compact('product','category'));
    }


    public function store(Request $req){
    
    $category = $req->category;
    $product = $req->product;
    $file = $req->image;
    $i=0;
    // $image1='';
    // $image2='';
    // $image3='';
    // $image4='';

    for($i=0; $i < count($file); $i++){
        $filename= $file[$i]->getClientOriginalName();
        $file[$i]->move('products/', $filename);
       // to allow multiple file at a time;
        $data = array('product_code'=>$req->pCode, 'category'=>$req->category, 'product'=>$req->product,'desc'=>$req->desc,'image'=>$filename);
       
        $p = Product::orderBy('id', 'DESC')->first();
        $amData = array('product_id'=>($p->id + 1),'product_code'=>$req->pCode, 'quantity'=>$req->quantity, 'price'=>$req->price);
        
        
        
        Product::create($data);
        Amount::create($amData);

    }
    // dd($file[3]->getClientOriginalName());
    // if(count($file)==4){
    //     $data = array('product_code'=>$req->pCode, 'category'=>$req->category, 'product'=>$req->product,'desc'=>$req->desc,'image'=>$file[0]->getClientOriginalName(), 'image1'=>$file[1]->getClientOriginalName(),'image2'=> $file[2]->getClientOriginalName(),'image3'=> $file[3]->getClientOriginalName());
    //     $amData = array('product_code'=>$req->pCode, 'quantity'=>$req->quantity, 'price'=>$req->price); 

    //     $A = Amount::create($amData);
    //    $P= Product::create($data);
        
     
    // }else{
    //     return redirect()->back()->with('failure','you should have 4 files');
    // }
        
    return redirect()->back()->with('success','files added');
    }

    

}
