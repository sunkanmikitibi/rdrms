<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
 
    protected $fillable = [
        'name',
    ];
 
    public function drivers()
    {
        return $this->hasMany(Driver::class);
    }
}
