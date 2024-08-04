<?php

namespace App\Http\Controllers;

use App\Models\Station;
use App\Models\Ticket;
use App\Models\TrainService;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::with(['user','station','train_service'])->orderBy("created_at","desc")->get();
       return view("backend.ticket.index", compact("tickets"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::where("role","customer")->orderBy("created_at","desc")->get();
        $train_services = TrainService::where('status',1)->get();
        $stations = Station::where('status',1)->get();
        return view("backend.ticket.create", compact("users","train_services","stations"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id'           => 'required|unique:users,id,' . $request->user_id,
            'train_service_id'  => 'required|unique:train_services,id,' . $request->train_service_id,
            'station_id'        => 'required|unique:stations,id,' . $request->station_id,
            'departure_time'    => 'required',
            'price'             => 'required|numeric'
        ]);

        if ($validator->fails()) {
            Toastr::error($validator->getMessageBag()->first());
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Ticket::create([
            'user_id'           => $request->user_id,
            'train_service_id'  => $request->train_service_id,
            'station_id'        => $request->station_id,
            'departure_time'    => $request->departure_time,
            'price'             => $request->price,
            'status'            => $request->status,
        ]);

        Toastr::success('Successfully Added.');
        return redirect()->route('tickets.index');

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
        $ticket = Ticket::find($id);
        $users = User::where("role","customer")->orderBy("created_at","desc")->get();
        $train_services = TrainService::where('status',1)->get();
        $stations = Station::where('status',1)->get();
        return view("backend.ticket.edit", compact("users","train_services","stations","ticket"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    // Find the ticket record to be updated
    $ticket = Ticket::find($id);

    $validator = Validator::make($request->all(), [
        'user_id'           => 'required|exists:users,id|unique:tickets,user_id,' . $ticket->id,
        'train_service_id'  => 'required|exists:train_services,id|unique:tickets,train_service_id,' . $ticket->id,
        'station_id'        => 'required|exists:stations,id|unique:tickets,station_id,' . $ticket->id,
        'departure_time'    => 'required|',
        'price'             => 'required|numeric'
    ]);

    if ($validator->fails()) {
        Toastr::error($validator->getMessageBag()->first());
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $ticket->update([
        'user_id'           => $request->user_id,
        'train_service_id'  => $request->train_service_id,
        'station_id'        => $request->station_id,
        'departure_time'    => $request->departure_time,
        'price'             => $request->price,
        'status'            => $request->status,
    ]);

    Toastr::success('Successfully Updated.');
    return redirect()->route('tickets.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        Toastr::success('Successfully Deleted.');
        return redirect()->back();
    }
}
