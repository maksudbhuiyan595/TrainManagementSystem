<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wallet;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WalletController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wallets = Wallet::with(['user'])->get();
        return view("backend.wallet.index", compact("wallets"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where("role", 'customer')->get();
        return view("backend.wallet.create",compact("users"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'user_id'    =>'required|unique:wallets,user_id,except,id',
            'balance'     =>'required|numeric'
        ]);
        if($validator->fails())
        {
            Toastr::error($validator->getMessageBag()->first());
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Wallet::create([
                'user_id'   =>$request->user_id,
                'balance'  =>$request->balance,
                'status' =>$request->status,
        ]);
        Toastr::success('Successfully Added.');
        return redirect()->route('wallets.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $wallet = Wallet::findOrFail($id);
        $users = User::where('role', 'customer')->get();
        return view('backend.wallet.edit', compact('wallet','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'user_id' =>'required|unique:wallets,user_id,' . $id,
            'balance' => 'required|numeric'
        ]);
        if($validator->fails())
        {
            Toastr::error($validator->getMessageBag()->first());
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $wallet = Wallet::find($id);
        $wallet->update([
                'user_id'   =>$request->user_id,
                'balance'  =>$request->balance,
                'status' =>$request->status,
        ]);
        Toastr::success('Successfully Updated.');
        return redirect()->route('wallets.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $wallet = Wallet::find($id);
        $wallet->delete();
        Toastr::success('Successfully Deleted.');
        return redirect()->back();
    }
}
