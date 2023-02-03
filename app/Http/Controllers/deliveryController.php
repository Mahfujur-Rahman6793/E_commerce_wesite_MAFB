<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mafb;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Delivery;
class deliveryController extends Controller
{
    public function index(){
        $dboy = Mafb::where('role','Delivery')->get();
        $order = Cart::where('is_delivered','N')->where('is_ordered','Y')->where('is_assigned','N')->get();
        $delivery = Delivery::where('email',session('user'))->get();
        return view('order-deliver',compact('dboy','order','delivery'));
    }

    public function store(Request $req){
        $data = array('email'=>$req->email, 'order_id'=>$req->order, 'is_done'=>'N');
       
        // return view('order-deliver',compact('dboy','order'));
        $check = Delivery::where('order_id',$req->order)->count();
        if($check==1){
            return redirect()->back()->with('failure','Once set !');
        }else{
            Delivery::create($data);
            $cart_data = array('is_assigned'=>'Y');
            Cart::where('id',$req->order)->update($cart_data);
            return redirect()->back()->with('success','successfully set');
        }
        
    }


    public function update($id){
       
        $data = array('is_done'=>'Y');
        $cart_data = array('is_delivered'=>'Y','delivered_by'=>session('user'));
        Cart::where('id',$id)->update($cart_data);
        Delivery::where('order_id',$id)->update($data); 
        return redirect()->back()->with('success','successfully set');
    }
}
