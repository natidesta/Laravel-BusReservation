<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class UserController extends Controller
{
    //
    public function login(){
        return view("login");
    }
    public function registration(){
        return view("registration");
    }
    public function registeruser(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:3|max:15',
        ]);
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $res=$user->save();
        if($res){
            return back()->with('success','you have registered successfully');
        } else {
            return back()->with('fail','Something is wrong');
        }
    }
    


    public function loginuser(Request $request){
        $request->validate([
            'name'=>'required',
            'password'=>'required|min:3|max:15',
        ]);
        $user=user::where('name','=',$request->name)->first();
        if($user){
            if(hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('/main');
            } else{
                return back()->with('fail','password not match');
            }
        } else{
            return back()->with('fail','Not Registered');
        }
    }
    public function loginadmin(Request $request){
        $request->validate([
            'name'=>'required',
            'password'=>'required|min:3|max:15',
        ]);
        $user=user::where('name','=',$request->name)->first();
        if($user){
            if(hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('/admin');
            } else{
                return back()->with('fail','password not match');
            }
        } else{
            return back()->with('fail','Not Registered');
        }
    }
    public function admin(){
        return view('admin');
    }
    public function main(){
        return view('main');
    }
    public function reservation(Request $request){
        $d = $request->info;
        $e = explode("&", $d);
        // dd($e);
        return view('reservation', ['data'=> $e]);
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
    public function adminlogout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('admin_login');
        }
    }


}
