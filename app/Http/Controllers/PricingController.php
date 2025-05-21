<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    // Get all pricing entries
    public function index()
    {
        return Pricing::all();
    }

    // Store a new pricing entry
    public function store(Request $request)
    {
        $data = $request->validate([
            'vehicle_type' => 'required|string',
            'trip_type' => 'required|string',
            'base_price_per_km' => 'required|numeric',
            'minimum_distance' => 'required|integer',
            'driver_beta_300' => 'nullable|numeric',
            'driver_beta_500' => 'nullable|numeric',
            'waiting_charge_per_hour' => 'required|numeric',
            'free_waiting_minutes' => 'required|integer',
            'hill_station_charge' => 'required|numeric',
           
            'luggage_charge_per_kg' => 'required|numeric',
            'free_luggage_kg' => 'required|integer',
        ]);

        return Pricing::create($data);
    }

    // Update pricing
    public function update(Request $request, $id)
    {
        $pricing = Pricing::findOrFail($id);
        $pricing->update($request->all());
        return $pricing;
    }

    // Delete pricing
    public function destroy($id)
    {
        $pricing = Pricing::findOrFail($id);
        $pricing->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}

