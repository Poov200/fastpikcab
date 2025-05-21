<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class DriverController extends Controller
{
    // Store a newly created driver in the database

public function store(Request $request)
{
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'email' => 'required|email|unique:drivers,email',
        'carType' => 'required|string|max:100',
        'carNumber' => 'required|string|max:20',
        'status' => 'required|in:active,inactive'
    ], [
        'email.unique' => 'This email is already registered.',
        'carType.required' => 'Car type is required.',
        'carNumber.required' => 'Car number is required.',
    ]);

    if ($validator->fails()) {
        throw new HttpResponseException(response()->json([
            'success' => false,
            'errors' => $validator->errors()
        ], 422));
    }

    Driver::create($request->all());

    return response()->json(['message' => 'Driver created successfully'], 201);
  }

    // Update the specified driver
    public function update(Request $request, $id)
    {
        $driver = Driver::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|unique:drivers,email,' . $id,
            'carType' => 'required|string|max:100',
            'carNumber' => 'required|string|max:20',
            'status' => 'required|in:active,inactive'
        ]);

        $driver->update($request->all());

        return response()->json(['message' => 'Driver updated successfully']);
    }

    // Delete the specified driver
    public function destroy($id)
    {
        $driver = Driver::findOrFail($id);
        $driver->delete();

        return response()->json(['message' => 'Driver deleted successfully']);
    }

    // Get all active drivers
public function getActiveDrivers()
{
    $activeDrivers = Driver::where('status', 'active')->get();
    return response()->json($activeDrivers);
}

    // Get all drivers
    public function index()
    {
        $drivers = Driver::all();
        return response()->json($drivers);
    }

    // Get a single driver by ID
    public function show($id)
    {
        $driver = Driver::findOrFail($id);
        return response()->json($driver);
    }





}
