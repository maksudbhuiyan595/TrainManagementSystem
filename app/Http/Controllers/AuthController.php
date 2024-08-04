<?php

namespace App\Http\Controllers;

use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('backend.auth.loginForm');
    }
    public function adminLogin(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'     =>'required',
            'password'  =>'required|min:6|max:16',
        ]);
        if($validator->fails())
        {
            Toastr::error($validator->getMessageBag()->first());
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $credentials=$request->except(['_token']);
        $user = User::where('email',$request->email)->first();
        // dd($user);
        if($user){
            if(auth()->attempt($credentials))
            {
                // dd("match");
                if($user->role == 'admin'){
                    toastr()->success('successfully login.');
                    return redirect()->route('dashboard');
              
                }else{
                    return back();
                }
            }
            else
            {
               Toastr::error('Invalid user informations');
                return redirect()->back()->withInput();
            }
        }
        Toastr::error('You are not user');
        return back()->withInput();
    }
    public function logout()
    {
        Auth::logout();
        Toastr::success('Successfully logout');
        return redirect()->route('login.form');
    }
}
