<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\CommissionController;
use App\Http\Controllers\SitemapController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/ContactPage', function () {
    return view('layouts.contactpage');
})->name('contactpage');

Route::get('/testimonial', function () {
    return view('layouts.testimonial');
})->name('contactpage');

Route::get('/chennai-to-villupuram-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-villupuram');
})->name('chennai-to-villupuram');

Route::get('/chennai-to-bangalore-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-bangalore');
})->name('chennai-to-bangalore');

Route::get('/chennai-to-cuddalore-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-cuddalore');
})->name('chennai-to-cuddalore');

Route::get('/chennai-to-madurai-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-madurai');
})->name('chennai-to-madurai');

Route::get('/chennai-to-erode-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-erode');
})->name('chennai-to-erode');

Route::get('/chennai-to-arakkonam-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-arakkonam');
})->name('chennai-to-arakkonam');

Route::get('/chennai-to-arani-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-arani');
})->name('chennai-to-arani');

Route::get('/chennai-to-chengalpattu-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-chengalpattu');
})->name('chennai-to-chengalpattu');

Route::get('/chennai-to-coimbatore-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-coimbatore');
})->name('chennai-to-coimbatore');

Route::get('/chennai-to-dharmapuri-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-dharmapuri');
})->name('chennai-to-dharmapuri');

Route::get('/chennai-to-dindigul-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-dindigul');
})->name('chennai-to-dindigul');

Route::get('/chennai-to-hosur-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-hosur');
})->name('chennai-to-hosur');

Route::get('/chennai-to-kanchipuram-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-kanchipuram');
})->name('chennai-to-kanchipuram');

Route::get('/chennai-to-karur-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-karur');
})->name('chennai-to-karur');

Route::get('/chennai-to-krishnagiri-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-krishnagiri');
})->name('chennai-to-krishnagiri');

Route::get('/chennai-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-mayiladuthurai');
})->name('chennai-to-mayiladuthurai');

Route::get('/chennai-to-nagapattinam-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-nagapattinam');
})->name('chennai-to-nagapattinam');

Route::get('/chennai-to-nagercoil-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-nagercoil');
})->name('chennai-to-nagercoil');

Route::get('/chennai-to-namakkal-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-namakkal');
})->name('chennai-to-namakkal');

Route::get('/chennai-to-perambalur-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-perambalur');
})->name('chennai-to-perambalur');

Route::get('/chennai-to-pudukkottai-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-pudukkottai');
})->name('chennai-to-pudukkottai');

Route::get('/chennai-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-ramanathapuram');
})->name('chennai-to-ramanathapuram');

Route::get('/chennai-to-ranipet-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-ranipet');
})->name('chennai-to-ranipet');

Route::get('/chennai-to-sivakasi-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-sivakasi');
})->name('chennai-to-sivakasi');

Route::get('/chennai-to-tenkasi-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-tenkasi');
})->name('chennai-to-tenkasi');

Route::get('/chennai-to-thanjavur-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-thanjavur');
})->name('chennai-to-thanjavur');

Route::get('/chennai-to-thiruvarur-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-thiruvarur');
})->name('chennai-to-thiruvarur');

Route::get('/chennai-to-thoothukudi-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-thoothukudi');
})->name('chennai-to-thoothukudi');

Route::get('/chennai-to-tiruppur-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-tiruppur');
})->name('chennai-to-tiruppur');

Route::get('/chennai-to-trichy-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-trichy');
})->name('chennai-to-trichy');

Route::get('/chennai-to-vellore-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-vellore');
})->name('chennai-to-vellore');

Route::get('/chennai-to-virudhunagar-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-virudhunagar');
})->name('chennai-to-virudhunagar');

Route::get('/chennai-to-selam-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-selam');
})->name('chennai-to-selam');

Route::get('/chennai-taxi-service', function () {
    return view('layouts.chennai.chennai-taxi-service');
})->name('chennai-taxi-service');


Route::get('/adminlogin', function () {
    return view('layouts.admin.adminLogin');
});

Route::post('/adminlogin', [AdminAuthController::class, 'login']);
Route::get('/adminlogout', [AdminAuthController::class, 'webLogout']);

Route::middleware(['admin.auth'])->group(function () {
    Route::get('/admindashboard', function () {
        return view('layouts.admin.admindashboard');
    });

    Route::get('/adminContact', function () {
        return view('layouts.admin.adminContact');
    });

    Route::get('/admintestimonial', function () {
        return view('layouts.admin.testimonial');
    });

    Route::get('/adminpricing', function () {
        return view('layouts.admin.adminpricing');
    });

    Route::get('/admindriverManagement', function () {
        return view('layouts.admin.driverManagement');
    });

    Route::get('/adminassigndriver', function () {
        return view('layouts.admin.adminassigndriver');
    });

    Route::get('/bookinglist', function () {
        return view('layouts.admin.bookinglist');
    });
    Route::get('/booklist', function () {
        return view('layouts.admin.booklist');
    });
    Route::get('/price', function () {
        return view('layouts.admin.pricing');
    });
    Route::get('/route', function () {
        return view('layouts.admin.addroute');
    });
    Route::get('/admincommissions', function () {
        return view('layouts.admin.commissions');
    });
});

// Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');




Route::get('/contact-messages', [ContactController::class, 'getAllContactMessages']);










//api routes

Route::get('/routes', [RouteController::class, 'index']);          // Get all routes
Route::post('/routes', [RouteController::class, 'store']);         // Create new route
Route::get('/routes/{id}', [RouteController::class, 'show']);      // Get single route
Route::put('/routes/{id}', [RouteController::class, 'update']);    // Update route
Route::delete('/routes/{id}', [RouteController::class, 'destroy']); // Delete route



// Pricing routes
Route::get('/pricings', [PricingController::class, 'index']);
Route::post('/add/pricings', [PricingController::class, 'store']);
Route::put('/pricings/{id}', [PricingController::class, 'update']);
Route::delete('/pricings/{id}', [PricingController::class, 'destroy']);


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






// Booking routes
Route::get('/bookings', [BookingController::class, 'index']);
Route::post('/add/bookings', [BookingController::class, 'store']);
Route::put('/bookings/{id}', [BookingController::class, 'update']);
Route::delete('/bookings/{id}', [BookingController::class, 'destroy']);
Route::patch('/bookings/{id}/trip-status', [BookingController::class, 'updateTripStatus']);

Route::patch('/bookings/{id}/assign-driver', [BookingController::class, 'assignDriver']);
Route::patch('/bookings/{id}/mark-stored', [BookingController::class, 'markStored']);
Route::get('/bookings/assigned', [BookingController::class, 'getAssignedBookings']);






Route::get('/commissions', [CommissionController::class, 'index']);
Route::post('/commissions', [CommissionController::class, 'store']);
Route::get('/completed-bookings', [CommissionController::class, 'completedBookings']);


Route::get('/sitemap.xml', [SitemapController::class, 'index']);


