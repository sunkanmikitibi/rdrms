<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{

    protected $fillable = [
        'name'
    ];
    
    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

   
}
