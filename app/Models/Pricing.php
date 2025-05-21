<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_type',
        'trip_type',
        'base_price_per_km',
        'minimum_distance',
        'driver_beta_300',
        'driver_beta_500',
        'waiting_charge_per_hour',
        'free_waiting_minutes',
        'hill_station_charge',
        
        'luggage_charge_per_kg',
        'free_luggage_kg',
    ];
}
