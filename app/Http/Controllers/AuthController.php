<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('signup.signup');
    }
    public function loginview()
    {
        return view('signup.login');
    }
    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|max:55',
            'fullname' => 'required|max:55',
            'position'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'password'=>'required',

        ]);
        if($validated){
            $data=array(
                'username'=>$request->username,
                'fullname'=>$request->fullname,
                'email'=>$request->email,
                'password'=>$request->password,
                'phone'=>$request->phone,
                'position'=>$request->position,
                'pin'=>$request->pin
            );
            $user=new ApiController();
            $response=$user->register($data);
            if($response==="1"){
                return view('signup.signup',['response'=>$response]);
            }
            else{
                return view('signup.signup',['response'=>'Oops Something Went wrong!!']);
            }
        }
        else{
            return view('signup.signup');
        }
        
    }
    //login 
    public function login(Request $request)
    {
        $validate=$request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if($validate){
            $logindata=array(
                'email'=>$request->email,
                'password'=>$request->password
            );
            $obj=new ApiController();
            $responsefromlogin=$obj->Login($logindata);
            $res_decode=json_decode($responsefromlogin,true);
            if($res_decode['access_token']!=null){
                return redirect('/dashboard');
            }
            
            
        }
        
        

    }
}
