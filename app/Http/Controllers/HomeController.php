<?php

namespace App\Http\Controllers;

use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function Registration(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'       => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email',
            'password'   => 'required|string|max:200|min:6',
            'c_password' => 'required|same:password',

        ]);
        if($validator->fails())
        {
            Toastr::error($validator->getMessageBag()->first());
            return redirect()->back()->withErrors($validator)->withInput();
        }

            User::create([
            'name'      =>$request->name,
            'email'     =>$request->email,
            'password'  =>bcrypt($request->password),
            'role'      =>'customer',
            'status'    =>1,
        ]);

            Toastr::success('Successfully Register.');
            return redirect()->back();
        }


}
