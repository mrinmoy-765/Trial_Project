<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User; 
use Hash;
use Session;


class CustomAuthController extends Controller
{
    public function login(){

        return view("auth.login");
    }

    public function registration(){

        return view("auth.registration");
    }

    public function registerUser(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12'
        ]);

        $user = new User();
        $user ->name = $request->name;
        $user ->email = $request->email;
        $user ->password =Hash::make($request->password);
        $res = $user->save();
        if($res){
            return back()->with('success', 'Registration Successfull');
        }else{
            return back()->with('fail','Failed to register');
        }

    }

    public function loginUser(Request $request){
        $request->validate([
        
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
                   
        $user = User::where('email','=',$request->email)->first();
        if($user){
            
             if(Hash::check($request->password , $user->password))
                {
                    $request->session()->put('loginId',$user->id);
                    return redirect('dashboard');
                }else
                    
                {
                    return back()->with('fail','Invalid email or password');
                }

        }else{
            return back()->with('fail','Invalid Email or password');
        }
    }


    public function dashboard()
    {
        return view('dashboard');
    }

   


    public function logout(){

        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('login');
        }
    }
}
