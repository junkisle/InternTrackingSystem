<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class InternController extends Controller{

            // Open Pages

    public function class_open_LandingPage(){
        return view('welcome');
    }

    public function class_open_LoginPage(){
        return view('LoginPage');
    }

    public function class_open_SignupPage(){
        return view('SignupPage');
    }

    public function class_open_CDD_Global(){
        return view('CDD_Global');
    }

    
            // Insert Datas

    public function class_signup(Request $request){
        $request->validate([
            'name_last' => 'required',
            'name_first' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password',
            'role' => 'required',
        ]);

        $insert[] = [
            'name_last' => $request->name_last,
            'name_first' => $request->name_first,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ];

        if($insert){
            DB::table('tbl_users')->insert($insert);
            return back()->with('success', 'User has been added');
        }  
        else{
            return back()->withErros(['errors' => 'Something went wrong']);
        }
    }

            // Login & Show dashboard who logged in

    public function class_login(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

            $checkLogin = DB::table('tbl_users')->where(['email' => $request->email])->first();

            if($checkLogin && Hash::check($request->password, $checkLogin->password)){
            
                Session::put('user_data', $checkLogin);

            // Redirect to the dashboard route
            return redirect()->route('dashboard');

            }
            else{
                
                return back()->withErrors(['login' => 'Login failed, Email or Password is incorrect!']);
            }
    }

                    // Who logged in
   
}