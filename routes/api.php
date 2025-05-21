<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\DriverController;


use App\Http\Controllers\PricingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\CommissionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});





// Route::get('/contact-messages', [ContactController::class, 'getAllContactMessages']);

Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');




// List all testimonials
Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial.index');

Route::get('/testimonial/export', [TestimonialController::class, 'export'])->name('testimonial.export');

// Store a testimonial
Route::post('/testimonial/add', [TestimonialController::class, 'store'])->name('testimonial.store');

// Update a testimonial
Route::put('/testimonial/{id}', [TestimonialController::class, 'update'])->name('testimonial.update');

// Delete a testimonial
Route::delete('/testimonial/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');

// Approve a testimonial
Route::patch('/testimonial/{id}/approve', [TestimonialController::class, 'approve'])->name('testimonial.approve');

// Toggle featured status
Route::patch('/testimonial/{id}/toggle-featured', [TestimonialController::class, 'toggleFeatured'])->name('testimonial.toggleFeatured');




// Create a new driver
Route::post('/add/drivers', [DriverController::class, 'store']);

// Update a driver
Route::put('/drivers/{id}', [DriverController::class, 'update']);

// Delete a driver
Route::delete('/drivers/{id}', [DriverController::class, 'destroy']);

// List all drivers
Route::get('/drivers', [DriverController::class, 'index']);

Route::get('/drivers/active', [DriverController::class, 'getActiveDrivers']);

// Show a specific driver by ID
Route::get('/drivers/{id}', [DriverController::class, 'show']);





// Pricing routes
Route::get('/pricings', [PricingController::class, 'index']);
Route::post('/add/pricings', [PricingController::class, 'store']);
Route::put('/pricings/{id}', [PricingController::class, 'update']);
Route::delete('/pricings/{id}', [PricingController::class, 'destroy']);

// Booking routes
Route::get('/bookings', [BookingController::class, 'index']);
Route::post('/add/bookings', [BookingController::class, 'store']);
Route::put('/bookings/{id}', [BookingController::class, 'update']);
Route::delete('/bookings/{id}', [BookingController::class, 'destroy']);
Route::patch('/bookings/{id}/trip-status', [BookingController::class, 'updateTripStatus']);

Route::patch('/bookings/{id}/assign-driver', [BookingController::class, 'assignDriver']);
Route::patch('/bookings/{id}/mark-stored', [BookingController::class, 'markStored']);
Route::get('/bookings/assigned', [BookingController::class, 'getAssignedBookings']);



Route::get('/routes', [RouteController::class, 'index']);          // Get all routes
Route::post('/routes', [RouteController::class, 'store']);         // Create new route
Route::get('/routes/{id}', [RouteController::class, 'show']);      // Get single route
Route::put('/routes/{id}', [RouteController::class, 'update']);    // Update route
Route::delete('/routes/{id}', [RouteController::class, 'destroy']); // Delete route



Route::get('/commissions', [CommissionController::class, 'index']);
Route::post('/commissions', [CommissionController::class, 'store']);
Route::get('/completed-bookings', [CommissionController::class, 'completedBookings']);


// routes/web.php
// Route::post('/logout', [AdminAuthController::class, 'logout']);
