<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;
use App\Vehicle;
use App\Lga;
use DB;
use Image;
use Storage;
use Session;
use Illuminate\Support\Str;

class DriverController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth', ['except' => [ 'show']]);
    }

    public function index()
    {
      if(auth()->user()->lga_id == 0)  
      {
         $alldrivers = Driver::all(); 
      } else {
        $alldrivers = Driver::where('lga_id', '=', auth()->user()->lga_id);
      }      
       
        return view('driver.index', compact('alldrivers'));
    }

    public function getAllBikers()
    {
        if(auth()->user()->lga_id == 0)
        {
            $bikers = Driver::where('vehicle_type', 1)
            ->orWhere('vehicle_type', 2)->get();
        }else{  
            $bikers = Driver::where('vehicle_type', 1)
            ->where('lga_id', '=', auth()->user()->id)
            ->orWhere('vehicle_type', 2)->get();
        }
        return view('driver.bikers', compact('bikers'));
    }

    public function koropeDrivers()
    {
        if(auth()->user()->lga_id == 0)
        {
            $korope = Driver::where('vehicle_type', 4)->get();
        } else {
            $korope = Driver::where('vehicle_type', 4)->where('lga_id', '=', auth()->user()->id)->get();
        }
        
        return view('driver.korope', compact('korope'));
    }


    public function create()
    {
        $allvehicles = Vehicle::all();
        $alllgas = Lga::all();
        return view('driver.create', compact('allvehicles', 'alllgas'));
    }

    public function store(Request $request)
    {       
        
        $data = $request->validate(
            [
                'firstname' => 'required',
                'lastname' => 'required',
                'phone_number' => 'required',
                'engine_chasis_no' => 'required',
                'driver_licence_no' => 'required',
                'address' => 'required',
                'lga_id' => 'required|integer',
                'plate_no' => 'required',
                'vehicle_type'=>'required',
                'passport' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]
            );

            //save the data to database
            $driver = new Driver;

            $driver->firstname = $request->firstname;
            $driver->lastname = $request->lastname;
            $driver->phone_number = $request->phone_number;
            $driver->engine_chasis_no = $request->engine_chasis_no;
            $driver->address = $request->address;
            $driver->lga_id = $request->lga_id;
            $driver->plate_no = $request->plate_no;
            $driver->driver_licence_no = $request->driver_licence_no;
            $driver->vehicle_type = $request->vehicle_type;
            $driver->tax_id = random_int(1000, 9999);



            if($request->hasFile('passport')) {
                $image = $request->file('passport');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/'. $filename);
                Image::make($image)->resize(300, 300)->save($location);

                $driver->passport = $filename;
            }

            $driver->save();


            return redirect()->route('drivers.index')
                        ->with('message', 'Driver account created successfully.');

            
    }

   
    public function getDriverDetails(Driver $driver)
    { 
        return view('driver.driver-details', compact('driver'));
    }

    public function show(Driver $driver)
    {
        return view('driver.show', compact('driver'));
    }

    public function edit(Driver $driver)
    {
        $allvehicles = Vehicle::all();
        $alllgas = Lga::all();
        return view('driver.edit', compact('driver', 'alllgas', 'allvehicles'));
    }

    public function update(Request $request, $id)
    {

        //validate data
        $validatedData = $request->validate(
            [
                'firstname' => 'sometimes',
                'lastname' => 'sometimes',
                'phone_number' => 'required',
                'engine_chasis_no' => 'required',
                'driver_licence_no' => 'required',
                'address' => 'required',
                'lga_id' => 'required|integer',
                'plate_no' => 'required',
                'vehicle_type'=>'required',
                'passport' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            ]
            );

        $driver = Driver::findOrFail($id);

        $driver->firstname = $request->input('firstname');
        $driver->lastname = $request->input('lastname');
        $driver->phone_number = $request->input('phone_number');
        $driver->engine_chasis_no = $request->input('engine_chasis_no');
        $driver->driver_licence_no = $request->input('driver_licence_no');
        $driver->address = $request->input('address');
        $driver->lga_id = $request->input('lga_id');
        $driver->vehicle_type = $request->input('vehicle_type');
        
        if($request->hasFile('passport')){
            //add new photo
            $image = $request->file('passport');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/'. $filename);
            Image::make($image)->resize(300, 300)->save($location);

            $oldFilename = $driver->passport;
        
            //update database
            $driver->passport = $filename;
            //delete old photo

            Storage::delete($oldFilename);
        }

        $driver->save();

        return redirect()->route('drivers.index')->with('success', 'Successfully Updated');        
    }

    public function destroy($id)
    {
        $driver = Driver::findOrFail($id);

        $driver->delete();

        return redirect()->route('drivers.index')->with('message', 'Data Deleted Successfully');
    }
}
