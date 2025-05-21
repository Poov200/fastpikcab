<?php

namespace App\Http\Controllers;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    //


      public function index()
    {
        return Route::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'route' => 'required|string|max:255',
            'description' => 'nullable|string',
            'pricing' => 'required|numeric|min:0',
        ]);

        return Route::create($request->all());
    }

    public function show($id)
    {
        return Route::findOrFail($id);
    }

public function update(Request $request, $id)
{
    $route = Route::find($id);

    if (!$route) {
        return response()->json(['message' => 'Route not found'], 404);
    }

    $route->route = $request->route;
    $route->description = $request->description;
    $route->pricing = $request->pricing;
    $route->save();

    return response()->json(['message' => 'Route updated successfully']);
}


    public function destroy($id)
    {
        $route = Route::findOrFail($id);
        $route->delete();

        return response()->json(['message' => 'Route deleted successfully']);
    }
}
