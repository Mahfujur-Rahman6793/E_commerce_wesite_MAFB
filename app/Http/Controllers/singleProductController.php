<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class singleProductController extends Controller
{
    public function index($product_code){
        // dd($product_code);
        $product = Product::where('product_code',$product_code)->get();
        return view('single-product',compact('product'));
    }
}
