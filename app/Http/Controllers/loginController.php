<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Mafb;
use App\Models\Permission;
class loginController extends Controller
{
    public function index(){
            return view('login');
        }
    public function login(Request $req){
        
        $data= array('email'=>$req->email,'password'=>$req->pass);

        $query = Mafb::where('email',$req->email)->where('password',$req->pass)->get();
       
        if($query->count()==1){

            $req->session()->put('user',$req->email);
            
            foreach($query as $q){
                $req->session()->put('role',$q->role);
                $req->session()->put('username',$q->fname.' '.$q->lname);
                $req->session()->put('profile',$q->image);
                $userq = Mafb::where('email',session('user'))->first(); 
                $req->session()->put('can',$userq);
            }
           
            // $req->session()->forget('user');
            if(session('role')=='customer'){
                return redirect('/');
            }else{
                return redirect('dashboard');
            }
            
        }else{
            return redirect()->back()->with('failure','invalid username or password');
        }

    }

    public function logout(Request $request){
        $request->session()->forget('user');
        return redirect('/');
    }
}
