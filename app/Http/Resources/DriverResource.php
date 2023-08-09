<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DriverResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => (string)$this->id,
            'type' => 'Drivers',
            'plate_no' => $this->plate_no,                
            'engine_chasis_no' => $this->engine_chasis_no,
            'vehicle_type' => new VehicleResource($this->vehicle),                   
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'phone_number' => $this->phone_number,
            'driver_licence_no' => $this->driver_licence_no,
            'passport' => $this->passport,
            'lga_id' => new LgaResource($this->lga),
            'tax_id' => $this->tax_id,
            'address' => $this->address,
            'created_at' => (string)$this->created_at,
            'updated_at' => (string)$this->updated_at,        
        ];
    }
}
