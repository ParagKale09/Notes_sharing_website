<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Using Model To access table data
use App\Models\Logininfo;

use Hash;
use Session;

class LoginController extends Controller
{
    public function signup(){
        //return view('signup');
        if(Session::has('LoginID')){
            return view('signup');
        }
        else{
            return view('signup');
        }
    }
    
    public function signup_backend(Request $request){
         
        $request->validate(
            [
                'username' => 'required',
                'useremail' => 'required|email',
                'password' => 'required',
                'cpassword' => 'required|same:password'
            ]
            );
        
        $user = new logininfo;
        $user->name = $request['username'];
        $user->email = $request['useremail'];
        $user->password = Hash::make($request['password']);
        $user->save();

        return back()->with('signup_success','You have registred sucessfully');

    }

    public function login(){
        //return view('login');
        if(Session::has('LoginID')){
            return redirect('instruinsights/home');
        }
        else{
            return view('login');
        }
    }

    public function login_backend(Request $request){
        $request->validate(
            [
                'useremail' => 'required|email',
                'password' => 'required',
            ]
            );

        $userinfo = logininfo::where('email',"=",$request['useremail'])->first();
        if($userinfo){
            if (Hash::check($request->password, $userinfo->password)) {
                $request->session()->put('LoginID',$userinfo->name);
                return redirect('/instruinsights/home');
            }
            else{
                return back()->with('Login_passfail','Password not Match');
            }
        }
        else{
            return back()->with('Login_emailfail','Email not found');
        }
    }

    
    
    public function logout(){
        if (Session::has('LoginID')){
            Session::pull('LoginID');
            return redirect('/instruinsights/login')->with('userlogout','Bye Bye Tata');
        }
    }
}
