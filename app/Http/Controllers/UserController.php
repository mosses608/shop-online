<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    public function home_page(){
        return view('index');
    }
    public function register_new(){
        return view('register');
    }
    public function explore(){
        return view('explore');
    }
    public function login(){
        return view('user-login');
    }
    public function store_users(Request $request){
        $userAccoutDetails = $request->validate([
            'region' => 'required|max:255',
            'email' => ['required', Rule::unique('users','email')],
            'password' => 'required|min:8',
            'trade_role' => 'required',
            'company_name' => 'nullable',
            'full_name' => 'nullable',
            'contact' => 'required|max:15|min:10',
            'term_policy' => 'required|integer',
            'confirm_password' => 'required',
        ]);

        $companyNameExists = User::where('company_name', $request->input('company_name'))->first();

        if($companyNameExists){
            return redirect()->back()->withErrors(['company_name' => 'Company name exists!'])->withInput();
        }

        $phoneNumberExists = User::where('contact', $request->input('contact'))->first();

        if($phoneNumberExists){
            return redirect()->back()->withErrors(['contact' => 'Phone number already exists.!'])->withInput();
        }

        if($userAccoutDetails['confirm_password'] != $userAccoutDetails['password']){
            return redirect()->back()->withErrors(['confirm_password' => 'Passwords do not match.'])->withInput();
        }

        $existsingAccount = User::where('email', $request->input('email'))->first();

        if($existsingAccount){
            return redirect()->back()->withErrors(['email' => 'Email is already exists!'])->withInput();
        }

        try{
            User::create($userAccoutDetails);
            return redirect()->back()->with('success_registration_message','Account created successfully, Login now!');
        }catch(\Throwable $e){
            return $e->getMessage();
        }
    }

    public function authentication(Request $request){
        $accountCredentials = $request->validate([
            'email' => 'required',
            'password' => 'required|min:8',
        ]);

        if(Auth::guard('web')->attempt($accountCredentials) && Auth::guard('web')->user()->trade_role == '2'){
            $request->session()->regenerateToken();
            return redirect('/business-dashboard')->with('success_login','Logged in successfully');
        }else{
            return redirect()->back()->with('insuccess_login','Incorrect email or password!');
        }
    }

    public function business_dashboard(){
        return view('/business-dashboard');
    }
}
