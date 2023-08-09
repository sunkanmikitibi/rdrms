<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lga;

class LgaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lgas = Lga::all();
        return view('lga.index', compact('lgas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());
      
        $data = $request->validate(
            [
                'name' => 'required',
                'lga_code' => 'required',
            ]
            );

            $lga = new Lga;

            $lga->name = $request->name;
            $lga->lga_code  = $request->lga_code;

            $lga->save();

            return redirect()->route('lgas.index')->with('message', 'LGA Added Suucessfully');
             
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lga = Lga::find($id);
        return view('lga.show', compact('lga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $lga = Lga::find($id);
       return view('lga.edit', compact('lga'));
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
       
        
        //validate the data

        $updatedata = $request->validate(
            [
                'name' => 'sometimes',
                'lga_code' => 'sometimes',
            ]
            );
            $lga = Lga::find($id);

            $lga->name = $request->input('name');
            $lga->lga_code = $request->input('lga_code');

            $lga->save();

            return redirect()->route('lgas.index')->with('message', 'LGA Updated Successfully');

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
