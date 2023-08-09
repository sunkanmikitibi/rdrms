<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;
use App\User;
use App\Ticket;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $bikers = Driver::where('vehicle_type', 1)->get();
        $drivers = Driver::all();
        $ticket_total = Ticket::sum('amount');  
        $users = User::all();
        return view('dashboard', compact('drivers', 'users', 'bikers', 'ticket_total'));
    }
}
