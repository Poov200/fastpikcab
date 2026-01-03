<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ride extends Model
{
    protected $fillable = [
        'pickup_location',
        'drop_location',
        'status',
        'driver_id'
    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
