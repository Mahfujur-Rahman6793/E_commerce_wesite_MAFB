<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
class homeController extends Controller
{
    public function index(){
        $product = Product::orderBy('id', 'desc')->take(20)->get();
        $suggest = Product::orderBy('id', 'desc')->take(20)->get();
        $pCode = array();
        $category = array();
        if (session('user')){
            $mostbuy = Cart::where('email',session('user'))->take(20)->get();
             foreach($mostbuy as $m){
               array_push($pCode,$m->product_id);
             }
            
             if(!empty($pCode)){
                $cat = Product::whereIn('id',$pCode)->take(20)->get();
                foreach($cat as $c){
                  array_push($category,$c->category);
                }

                $suggest = Product::whereIn('category',$category)->take(8)->get();
             }
            
        }
        return view('index',compact('product','suggest'));
    }


    public function shop(){

      $product = Product::orderBy('id', 'desc')->get();
      $suggest = Product::orderBy('id', 'desc')->get();
      $pCode = array();
      $category = array();
      if (session('user')){
          $mostbuy = Cart::where('email',session('user'))->get();
           foreach($mostbuy as $m){
             array_push($pCode,$m->product_id);
           }
          
           if(!empty($pCode)){
              $cat = Product::whereIn('id',$pCode)->get();
              foreach($cat as $c){
                array_push($category,$c->category);
              }

              $suggest = Product::whereIn('category',$category)->get();
           }
          
      }
      
      return view('shop',compact('product','suggest'));
    }

    public function about(){
      return view('about');
    }
    public function contact(){
      return view('contact');
    }
}
