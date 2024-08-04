<?php

namespace App\Http\Controllers;

use App\Models\TrainService;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TrainServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $train_services = TrainService::orderBy("created_at","desc")->get();
        return view("backend.train_service.index",compact("train_services"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.train_service.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),[
            'name'           =>'required',
            'route'           =>'required'
        ]);
        if($validator->fails())
        {
            Toastr::error($validator->getMessageBag()->first());
            return redirect()->back()->withErrors($validator)->withInput();
        }
        TrainService::create([
                'name'   =>$request->name,
                'route'  =>$request->route,
                'status' =>$request->status,
        ]);
        Toastr::success('Successfully Added.');
        return redirect()->route('train-services.index');

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
        $train_service = TrainService::find($id);
        return view("backend.train_service.edit",compact("train_service"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[
            'name'           =>'required',
            'route'           =>'required'
        ]);
        if($validator->fails())
        {
            Toastr::error($validator->getMessageBag()->first());
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $train_service = TrainService::find($id);
        $train_service->update([
                'name'   =>$request->name,
                'route'  =>$request->route,
                'status' =>$request->status,
        ]);
        Toastr::success('Successfully Updated.');
        return redirect()->route('train-services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $train_service = TrainService::find($id);
        $train_service->delete();
        Toastr::success('Successfully Deleted.');
        return redirect()->back();
    }
}
