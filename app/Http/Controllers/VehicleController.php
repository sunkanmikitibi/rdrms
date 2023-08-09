<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('vehicle.index', compact('vehicles'));
    }

    public function create()
    { 
        return view('vehicle.create');
    }

    public function store(Request $request)
    {
        $valid_vehicle = $request->validate(
            [
                'name' => 'required',
            ]
            );

            Vehicle::create(
                [
                    'name' => $request->name,
                ]
            );

            return redirect()->route('vehicle.index')->with('message', 'Vehicle Added Successfully');
    }

    public function edit($id)
    {
        $vehicle = Vehicle::find($id);
        return view('vehicle.edit', compact('vehicle'));
    }

    public function update(Request $request, $id)
    {
        $vehicle = Vehicle::find($id);

        $data = $request->validate(
            [
                'name' => 'sometimes',
            ]
            );

        $vehicle->name = $request->input('name');

        $vehicle->save();

        return redirect()->route('vehicle.index')->with('message', 'Vehicle Updated Successfully');
    }

    public function destroy($id)
    {
            $vehicle = Vehicle::findOrFail($id);

            $vehicle->delete();

            return  redirect()->route('vehicle.index')->with('message', 'Vehicle Deleted Successfully');
    }
}
