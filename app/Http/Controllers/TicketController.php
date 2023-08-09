<?php

namespace App\Http\Controllers;
use App\Ticket;
use App\Lga;
use App\Driver;

use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $drivers = Driver::all();
        $lgas = Lga::all();
        return view('tickets.create', compact('drivers', 'lgas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate data

        $data = $request->validate(
            [
                'driver_id' => 'required',
                'lga_id' => 'required',
                'amount' => 'required',
            ]
            );

        //dd($request->all());

        $ticket = new Ticket;

        $ticket->driver_id = $request->driver_id;
        $ticket->lga_id = $request->lga_id;
        $ticket->amount = $request->amount;

        $ticket->save();

        return redirect()->route('ticket-sales.index')->with('message', 'Tickets Sales Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ticket = Ticket::find($id);
        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ticket = Ticket::find($id);        
        $drivers = Driver::all();        
        $lgas = Lga::all();
        return view('tickets.edit', compact('ticket', 'drivers', 'lgas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ticket = Ticket::findOrFail($id);

        $ticket->driver_id = $request->input('driver_id');
        $ticket->lga_id = $request->input('lga_id');
        $ticket->amount = $request->input('amount');

        $ticket->save();

        return redirect()->route('ticket-sales.index')->with('message', 'Editted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Ticket::find($id);

        $ticket->delete();
        
        return redirect()->route('ticket-sales.index')->with('message', 'Deleted Successfully');
    }
}
