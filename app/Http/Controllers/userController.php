<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mafb;
class userController extends Controller
{
    public function edit($email){
        $user = Mafb::where('email',session('user'))->first();
        return view('setting',compact('user'));
    }

    public function update(Request $req){
        if(!$req->pass){
            $fu = Mafb::where('email',session('user'))->first();
            $req->pass = $fu->password;
        }
        if($req->image){
            $file = $req->image;
            $filename = $file->getClientOriginalName();
            $file->move("profile/",$filename);
            $req->image = $filename;
            $data = array("fname"=>$req->fname,"lname"=>$req->lname,"password"=>$req->pass,"image"=>$filename);
            Mafb::where('email',session('user'))->update($data);
            return redirect()->back()->with('success','profile updated Successfully!');
        }
        
    }
}
