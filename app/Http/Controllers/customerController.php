<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mafb;

class customerController extends Controller
{
    public function index(){
        $customer = Mafb::all();
     return view('customer',compact('customer'));
    }
}
