<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Mafb;
use App\Models\Order;
class dashboardController extends Controller
{
    public function index(){
        
        return view('dashboard');
    }
}
