<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
    'name',
    'email',
    'contact',
    'pickup',
    'destination',
    'tripType',
    'booking_id',
    'status',
    'trip_status',
    'vehicle',
    'passengers',
    'no_of_days',
    'distance',
    'date',
    'time',
    'assigned_amount',
    'driver_id',

];

    public function driver()
{
    return $this->belongsTo(Driver::class);
}
 public function commission()
    {
        return $this->hasOne(Commission::class);
    }


}
