<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
class orderController extends Controller
{
    public function index(){
        $order = Cart::where('is_ordered','Y')->get();
        return view('newOrder',compact('order'));
    }
}
