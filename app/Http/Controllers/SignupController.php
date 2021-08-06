<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

  
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\SignupModel;
use Hash;

class SignupController extends Controller
{
    /**
    * Write code on Method
    *
    * @return response()
    */
   public function index()
   {
       return view('signup');
   }  
     
   /**
    * Write code on Method
    *
    * @return response()
    */
//    public function registration()
//    {
//        return view('signup');
//    }
     
   /**
    * Write code on Method
    *
    * @return response()
    */
   public function postLogin(Request $request)
   {
       $request->validate([
           'userName' => 'required',
           'password' => 'required',
       ]);
  
       $credentials = $request->only('userName', 'password');
       if (Auth::attempt($credentials)) {
           return redirect("home") ->withSuccess('You have Successfully loggedin');
       }
 
       return redirect("signup")->withSuccess('Oppes! You have entered invalid credentials');
   }
     
   /**
    * Write code on Method
    *
    * @return response()
    */
   public function postRegistration(Request $request)
   {  
       $request->validate([
           'userName' => 'required',
           'email' => 'required',
           'password' => 'required|min:6',
       ]);
          
       $data = $request->all();
       $check = $this->create($data);
        
       return redirect("signup")->withSuccess('Great! You have Successfully loggedin');
   }
   
   /**
    * Write code on Method
    *
    * @return response()
    */
//    public function dashboard()
//    {
//        if(Auth::check()){
//            return view('dashboard');
//        }
 
//        return redirect("login")->withSuccess('Opps! You do not have access');
//    }
   
   /**
    * Write code on Method
    *
    * @return response()
    */
   public function create(array $data)
   {
     return SignupModel::create([
       'userName' => $data['userName'],
       'email' => $data['email'],
       'password' => Hash::make($data['password'])
     ]);
   }
   
   /**
    * Write code on Method
    *
    * @return response()
    */
//    public function logout() {
//        Session::flush();
//        Auth::logout();
 
//        return Redirect('login');
//    }
}
