<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stations = Station::orderBy("id","desc")->get();
        return view("backend.stations.index",compact("stations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.stations.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'           =>'required',
            'location'           =>'required'
        ]);
        if($validator->fails())
        {
            Toastr::error($validator->getMessageBag()->first());
            return redirect()->back()->withErrors($validator)->withInput();
        }
        Station::create([
                'name'   =>$request->name,
                'location'  =>$request->location,
                'status' =>$request->status,
        ]);
        Toastr::success('Successfully Added.');
        return redirect()->route('stations.index');

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
        $station = Station::find($id);
        return view('backend.stations.edit',compact('station'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'name'           =>'required',
            'location'       =>'required'
        ]);
        if($validator->fails())
        {
            Toastr::error($validator->getMessageBag()->first());
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $station = Station::find($id);
        $station->update([
                'name'   =>$request->name,
                'location'  =>$request->location,
                'status' =>$request->status,
        ]);
        Toastr::success('Successfully Updated.');
        return redirect()->route('stations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $station = Station::find($id);
        $station->delete();
        Toastr::success('Successfully Deleted.');
        return redirect()->back();
    }
}
