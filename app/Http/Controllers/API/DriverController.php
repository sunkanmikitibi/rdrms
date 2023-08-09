<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Driver;
use App\Http\Resources\DriverResource;


class DriverController extends Controller
{ 
    public function index()
    {
        //return Driver::all();
         return DriverResource::collection(Driver::all());
    }

    
    public function store(Request $request)
    {
        $driver = Driver::create(
            [
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'phone_number' => $request->phone_number,
                'engine_chasis_no' => $request->engine_chasis_no,
                'vehicle_type' => $request->vehicle_type,
                'address' => $request->address,
                'lga_id' => $request->lga_id,
                'driver_licence_no' => $request->driver_licence_no,
                'plate_no' => $request->plate_no,
            ]
            );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        return new DriverResource($driver);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
