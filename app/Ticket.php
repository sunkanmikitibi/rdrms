<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'driver_id',
        'lga_id',
        'amount',
    ];
    
    public function driver() 
    {
        return $this->belongsTo(Driver::class);
    }

    
    public function lga()
    {
        return $this->belongsTo(Lga::class);
    }
}
