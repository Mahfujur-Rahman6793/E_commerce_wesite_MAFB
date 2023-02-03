<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mafb;
use App\Models\Cart;
use App\Models\Permission;

class trackerController extends Controller
{
        public function index(){
            $ch=curl_init();
    curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json/?fields=61439");
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    $result=curl_exec($ch);
    $result=json_decode($result);

    if($result->status=='success'){
      $country= $result->country;
      $reg=  $result->regionName;
       $city= $result->city;
       $zip = $result->zip;
        if(isset($result->lat) && isset($result->lon)){
           $lat=$result->lat;
           $lon=$result->lon;
        }
        $ip = $result->query;
        
    }
    $data = array('lat'=>$lat, 'lon'=>$lon);
    
    // $access = array('view-income','add-category','add-product','add-employee','view-customer','view-delivery',
    // 'view-order-list','own-order-list','cart-list','setting','view-product-list');
    $access = array('view-delivery',
    'view-order-list','cart-list','setting','view-product-list');
    foreach($access as $a){
        $customer = array("role"=>"customer","cando"=>$a);
        Permission::create($customer);
    }

    Mafb::where('email',session('user'))->update($data);
    // return view('tracker');
}
 
}
