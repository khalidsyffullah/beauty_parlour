<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    //login
    public function index()
    {
        return view('auth.login');
    }
    public function loginprocess(Request $request)
    {
        $request -> validate([
            'email' => 'required',
            'password' => 'required',

        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            
                return redirect()->route('dashboard')->withSuccess('Successfully Login. Welcome Back ');
            
        }
    }
    //registration
    public function registration(){
        return view('auth.registration');
    }
    public function registrationprocess(Request $request){
        $request-> validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email|unique:users',
            'contactno'=>'required|numeric|min:11|unique:users',
            'password'=>'required|min:6',



        ]);
        $data= $request->all();
        $check = $this->create($data);

        

        return redirect()->route('dashboard')->withSuccess('Registration Successfull. You have now signed in');

    }
    public function create(array $data){
        return User::create([
        'fname'=>$data['fname'],
        'lname'=>$data['lname'],
        'email'=>$data['email'],
        'contactno'=>$data['contactno'],
        'password'=>Hash::make($data['password'])
        ]);
    }
    public function logout(){
        Session::flush();
        Auth::logout();


         // return to_route('login');

         // return redirect("login");

        return redirect()->route('login');
    }
    public function dashboard(){
        // dd(Auth::user());
        if(Auth::user()->usertype == 1 )
        {
    return view('admin.pages.admindashboard');
}
         else{
             return view('viewer.pages.userpanel.userdashboard');
         }
    }
   
    
    
}
