<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mafb;
class signupController extends Controller
{
   public function index(Request $req){
    $email = $req->email;

   
    return view('signup',compact('email'));
   }


//    public function index(){
//     return view('signup');
//    }
   public function createCustomerAccount(Request $req){
    
      $role = $req->role;

      if(is_null($role)){
         $role = "customer";
      }

    $data = array('fname'=>$req->fname, 'lname'=>$req->lname, 'email'=>$req->email, 'password'=>$req->pass, 'address'=>$req->address,'city'=>$req->city,
                   'zip'=>$req->zip,'state'=>$req->state, 'role'=>$role);
                
   
    $double = Mafb::where('email',$req->email)->get();
    if(count($double)==0){
        $query = Mafb::create($data);
        return redirect('/mafb-log-in');
    }

    
   }



   public function addUser(){
      return view('add-user');
   }
}
