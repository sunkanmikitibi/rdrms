<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Lga;
use App\Http\Resources\LgaResource;
use Illuminate\Http\Request;

class LgaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LgaResource::collection(Lga::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lga = Lga::create(
            [
                'name' => $request->name,
                'lga_code' => $request->lga_code,
            ]
            );
            return new LgaResource($lga);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lga  $lga
     * @return \Illuminate\Http\Response
     */
    public function show(Lga $lga)
    {
        return new LgaResource($lga);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lga  $lga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lga $lga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lga  $lga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lga $lga)
    {
        //
    }
}
