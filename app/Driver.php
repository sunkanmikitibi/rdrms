<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = [
        'firstname', 
        'lastname',
        'engine_chasis_no',
        'vehicle_type',
        'tax_id',
        'address', 
        'phone_number', 
        'lga_id', 
        'driver_licence_no',
        'passport',
        'plate_no'
    ];
    //
 
    /**
     * Get the user associated with the Driver
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vehicle()
    {
        return $this->hasOne(Vehicle::class, 'id', 'vehicle_type');
    }
    
    public function lga()
    {
        return $this->belongsTo(Lga::class);
    }
}
