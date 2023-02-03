<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Coupon;
use App\Models\Mafb;
class cartController extends Controller
{
    public function cart(){
    $customer = Mafb::where('email',session('user'))->first();
    $date = date('Y-m-d');
    $total = 0;
    $fCoupon = Coupon::where('from','<=', $date)->where('to','>=',$date)->first();
    return view('cart',compact('customer','fCoupon','total'));
    }
    public function index(Request $req){

        if(!$req->session()->exists('user')){
            // dd($req->size);
            return redirect('mafb-log-in');
        }else{

            
            $data = array('product_id'=>$req->prod,'email'=>session('user'),'product_code'=>$req->pCode,'size'=>$req->size,'quantity'=>$req->quantity);
            
            
            Cart::create($data);
            return redirect('cart-list');
        }
    }

    public function coupon(Request $req){
        
        $coupon = $req->coupon;
        $date = date('Y-m-d');
        $customer = Mafb::where('email',session('user'))->first();
        $fCoupon = Coupon::where('coupon',$coupon)->where('from','<=', $date)->where('to','>=',$date)->first();
       if(!is_null($fCoupon)){
        $total = $req->total - ($req->total*($fCoupon->discount/100));
        
        return view('cart',compact('fCoupon','customer','total'));
       }else{
        return redirect('cart-list')->with('fail','no Coupons are applied');
       }
       
    }


    public function order(Request $req){
       $cart = $req->cart_id;
       
       foreach($cart as $c){  
        $cart_data = array('is_ordered'=>'Y');
        Cart::where('id',$c)->update($cart_data); 
       }
      
        $data = array('email'=>session('user'),'total'=>$req->totalCost);
        Order::create($data);
        
        return redirect('cart-list')->with('success','order placed successfully');
    }
}
