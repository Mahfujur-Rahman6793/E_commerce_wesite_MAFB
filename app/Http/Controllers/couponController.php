<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coupon;
class couponController extends Controller
{
    public function index(){
        $coupon=Coupon::all();
        return view('coupon',compact('coupon'));
    }

    public function store(Request $req){
        $data = array("day"=>$req->day, "coupon"=>$req->coupon,"from"=>$req->from,"to"=>$req->to,"discount"=>$req->disc);
        Coupon::create($data);
        return redirect()->back()->with('success',"coupon addd successfully");
    }

    public function delete($id){
        Coupon::where('id',$id)->delete();
        return redirect()->back()->with('success',"coupon deleted successfully");
    }
}
