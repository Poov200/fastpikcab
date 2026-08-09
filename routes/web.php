<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\BlogController;
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

Route::get('/deleteaccount', function () {
    return view('deleteaccount');
})->name('deleteaccount');

Route::get('/blogs', function () {
    return view('layouts.blog');
})->name('blogs');

Route::get('/one-way-drop-taxi', function () {
    return view('layouts.one-way-drop-taxi');
})->name('one-way-drop-taxi');

Route::get('/outstation-drop-taxi', function () {
    return view('layouts.outstation-drop-taxi');
})->name('outstation-drop-taxi');

Route::get('/one-way-drop-taxi', function () {
    return view('layouts.one-way-drop-taxi');
})->name('one-way-drop-taxi');
Route::get('/airport-drop-taxi', function () {
    return view('layouts.airport-drop-taxi');
})->name('airport-drop-taxi');
Route::get('/round-trip-taxi', function () {
    return view('layouts.round-trip-taxi');
})->name('round-trip-taxi');
Route::get('/corporate-taxi', function () {
    return view('layouts.corporate-taxi');
})->name('corporate-taxi');


Route::get('/admin/blog/create', [BlogController::class, 'adminIndex']);
Route::post('/admin/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');

use App\Http\Controllers\UserBlogController;

Route::get('/blog', [UserBlogController::class, 'index']);
Route::get('/blog/{slug}', [UserBlogController::class, 'show']);





//service main pages




Route::get('/chennai-taxi-service', function () {
    return view('layouts.chennai.chennai-taxi-service');
})->name('chennai-taxi-service');

Route::get('/chengalpattu-taxi-service', function () {
    return view('layouts.chengalpattu.chengalpattu-taxi-service');
})->name('chengalpattu-taxi-service');

Route::get('/arakkonam-taxi-service', function () {
    return view('layouts.arakkonam.arakkonam-taxi-service');
})->name('arakkonam-taxi-service');

Route::get('/coimbatore-taxi-service', function () {
    return view('layouts.coimbatore.coimbatore-taxi-service');
})->name('coimbatore-taxi-service');

Route::get('/cuddalore-taxi-service', function () {
    return view('layouts.cuddalore.cuddalore-taxi-service');
})->name('cuddalore-taxi-service');

Route::get('/dharmapuri-taxi-service', function () {
    return view('layouts.dharmapuri.dharmapuri-taxi-service');
})->name('dharmapuri-taxi-service');

Route::get('/dindigul-taxi-service', function () {
    return view('layouts.dindigul.dindigul-taxi-service');
})->name('dindigul-taxi-service');

Route::get('/erode-taxi-service', function () {
    return view('layouts.erode.erode-taxi-service');
})->name('erode-taxi-service');

Route::get('/hosur-taxi-service', function () {
    return view('layouts.hosur.hosur-taxi-service');
})->name('hosur-taxi-service');

Route::get('/kanchipuram-taxi-service', function () {
    return view('layouts.kanchipuram.kanchipuram-taxi-service');
})->name('kanchipuram-taxi-service');

Route::get('/karur-taxi-service', function () {
    return view('layouts.karur.karur-taxi-service');
})->name('karur-taxi-service');

Route::get('/krishnagiri-taxi-service', function () {
    return view('layouts.krishnagiri.krishnagiri-taxi-service');
})->name('krishnagiri-taxi-service');

Route::get('/madurai-taxi-service', function () {
    return view('layouts.madurai.madurai-taxi-service');
})->name('madurai-taxi-service');

Route::get('/mayiladuthurai-taxi-service', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-taxi-service');
})->name('mayiladuthurai-taxi-service');

Route::get('/nagapattinam-taxi-service', function () {
    return view('layouts.nagapattinam.nagapattinam-taxi-service');
})->name('nagapattinam-taxi-service');

Route::get('/nagercoil-taxi-service', function () {
    return view('layouts.nagercoil.nagercoil-taxi-service');
})->name('nagercoil-taxi-service');

Route::get('/namakkal-taxi-service', function () {
    return view('layouts.namakkal.namakkal-taxi-service');
})->name('namakkal-taxi-service');

Route::get('/perambalur-taxi-service', function () {
    return view('layouts.perambalur.perambalur-taxi-service');
})->name('perambalur-taxi-service');

Route::get('/puducherry-taxi-service', function () {
    return view('layouts.puducherry.puducherry-taxi-service');
})->name('puducherry-taxi-service');

Route::get('/pudukkottai-taxi-service', function () {
    return view('layouts.pudukkottai.pudukkottai-taxi-service');
})->name('pudukkottai-taxi-service');

Route::get('/ramanathapuram-taxi-service', function () {
    return view('layouts.ramanathapuram.ramanathapuram-taxi-service');
})->name('ramanathapuram-taxi-service');

Route::get('/ranipet-taxi-service', function () {
    return view('layouts.ranipet.ranipet-taxi-service');
})->name('ranipet-taxi-service');

Route::get('/salem-taxi-service', function () {
    return view('layouts.salem.salem-taxi-service');
})->name('salem-taxi-service');

Route::get('/sivakasi-taxi-service', function () {
    return view('layouts.sivakasi.sivakasi-taxi-service');
})->name('sivakasi-taxi-service');

Route::get('/tenkasi-taxi-service', function () {
    return view('layouts.tenkasi.tenkasi-taxi-service');
})->name('tenkasi-taxi-service');

Route::get('/thanjavur-taxi-service', function () {
    return view('layouts.thanjavur.thanjavur-taxi-service');
})->name('thanjavur-taxi-service');

Route::get('/thiruvarur-taxi-service', function () {
    return view('layouts.thiruvarur.thiruvarur-taxi-service');
})->name('thiruvarur-taxi-service');

Route::get('/thoothukudi-taxi-service', function () {
    return view('layouts.thoothukudi.thoothukudi-taxi-service');
})->name('thoothukudi-taxi-service');

Route::get('/tirunelveli-taxi-service', function () {
    return view('layouts.tirunelveli.tirunelveli-taxi-service');
})->name('tirunelveli-taxi-service');

Route::get('/tiruppur-taxi-service', function () {
    return view('layouts.tiruppur.tiruppur-taxi-service');
})->name('tiruppur-taxi-service');

Route::get('/trichy-taxi-service', function () {
    return view('layouts.trichy.trichy-taxi-service');
})->name('trichy-taxi-service');

Route::get('/vellore-taxi-service', function () {
    return view('layouts.vellore.vellore-taxi-service');
})->name('vellore-taxi-service');

Route::get('/villupuram-taxi-service', function () {
    return view('layouts.villupuram.villupuram-taxi-service');
})->name('villupuram-taxi-service');

Route::get('/virudhunagar-taxi-service', function () {
    return view('layouts.virudhunagar.virudhunagar-taxi-service');
})->name('virudhunagar-taxi-service');

Route::get('/arani-taxi-service', function () {
    return view('layouts.arani.arani-taxi-service');
})->name('arani-taxi-service');

Route::get('/bangalore-taxi-service', function () {
    return view('layouts.bangalore.bangalore-taxi-service');
})->name('bangalore-taxi-service');

Route::get('/karaikal-taxi-service', function () {
    return view('layouts.karaikal.karaikal-taxi-service');
})->name('karaikal-taxi-service');

Route::get('/kochi-taxi-service', function () {
    return view('layouts.kochi.kochi-taxi-service');
})->name('kochi-taxi-service');

Route::get('/tirupati-taxi-service', function () {
    return view('layouts.tirupati.tirupati-taxi-service');
})->name('tirupati-taxi-service');

Route::get('/tiruvannamalai-taxi-service', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-taxi-service');
})->name('tiruvannamalai-taxi-service');

Route::get('/kerala-taxi-service', function () {
    return view('layouts.kerala.kerala-taxi-service');
})->name('kerala-taxi-service');

Route::get('/ariyalur-taxi-service', function () {
    return view('layouts.ariyalur.ariyalur-taxi-service');
})->name('ariyalur-taxi-service');


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
    Route::get('/admin/blog/create', function () {
        return view('layouts.admin.blog-create');
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








//routes for chennai drop taxi service pages

// 📌 Chennai to All Cities Routes
Route::get('/chennai-to-ariyalur-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-ariyalur');
})->name('chennai-to-ariyalur');

Route::get('/chennai-to-arakkonam-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-arakkonam');
})->name('chennai-to-arakkonam');

Route::get('/chennai-to-arani-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-arani');
})->name('chennai-to-arani');

Route::get('/chennai-to-bangalore-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-bangalore');
})->name('chennai-to-bangalore');

Route::get('/chennai-to-chengalpattu-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-chengalpattu');
})->name('chennai-to-chengalpattu');

Route::get('/chennai-to-coimbatore-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-coimbatore');
})->name('chennai-to-coimbatore');

Route::get('/chennai-to-cuddalore-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-cuddalore');
})->name('chennai-to-cuddalore');

Route::get('/chennai-to-trichy-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-trichy');
})->name('chennai-to-trichy');

Route::get('/chennai-to-dharmapuri-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-dharmapuri');
})->name('chennai-to-dharmapuri');

Route::get('/chennai-to-dindigul-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-dindigul');
})->name('chennai-to-dindigul');

Route::get('/chennai-to-erode-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-erode');
})->name('chennai-to-erode');

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

Route::get('/chennai-to-madurai-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-madurai');
})->name('chennai-to-madurai');

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

Route::get('/chennai-to-puducherry-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-puducherry');
})->name('chennai-to-puducherry');

Route::get('/chennai-to-pudukkottai-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-pudukkottai');
})->name('chennai-to-pudukkottai');

Route::get('/chennai-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-ramanathapuram');
})->name('chennai-to-ramanathapuram');

Route::get('/chennai-to-ranipet-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-ranipet');
})->name('chennai-to-ranipet');

Route::get('/chennai-to-salem-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-salem');
})->name('chennai-to-salem');

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

Route::get('/chennai-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-tiruvannamalai');
})->name('chennai-to-tiruvannamalai');

Route::get('/chennai-to-tirunelveli-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-tirunelveli');
})->name('chennai-to-tirunelveli');

Route::get('/chennai-to-tiruppur-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-tiruppur');
})->name('chennai-to-tiruppur');

Route::get('/chennai-to-tiruchirappalli-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-tiruchirappalli');
})->name('chennai-to-tiruchirappalli');

Route::get('/chennai-to-tirupati-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-tirupati');
})->name('chennai-to-tirupati');

Route::get('/chennai-to-vellore-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-vellore');
})->name('chennai-to-vellore');

Route::get('/chennai-to-virudhunagar-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-virudhunagar');
})->name('chennai-to-virudhunagar');

Route::get('/chennai-to-karaikal-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-karaikal');
})->name('chennai-to-karaikal');

Route::get('/chennai-to-kochi-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-kochi');
})->name('chennai-to-kochi');

Route::get('/chennai-to-kerala-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-kerala');
})->name('chennai-to-kerala');

Route::get('/chennai-to-chennai-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-chennai');
})->name('chennai-to-chennai');

Route::get('/chennai-to-villupuram-drop-taxi', function () {
    return view('layouts.chennai.chennai-to-villupuram');
})->name('chennai-to-villupuram');
// End of Chennai to All Cities Routes

// 📌 Arakkonam to All Cities Routes
Route::get('/arakkonam-to-ariyalur-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-ariyalur');
})->name('arakkonam-to-ariyalur');

Route::get('/arakkonam-to-arakkonam-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-arakkonam');
})->name('arakkonam-to-arakkonam');

Route::get('/arakkonam-to-arani-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-arani');
})->name('arakkonam-to-arani');

Route::get('/arakkonam-to-bangalore-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-bangalore');
})->name('arakkonam-to-bangalore');

Route::get('/arakkonam-to-chengalpattu-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-chengalpattu');
})->name('arakkonam-to-chengalpattu');

Route::get('/arakkonam-to-chennai-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-chennai');
})->name('arakkonam-to-chennai');

Route::get('/arakkonam-to-coimbatore-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-coimbatore');
})->name('arakkonam-to-coimbatore');

Route::get('/arakkonam-to-cuddalore-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-cuddalore');
})->name('arakkonam-to-cuddalore');

Route::get('/arakkonam-to-dharmapuri-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-dharmapuri');
})->name('arakkonam-to-dharmapuri');

Route::get('/arakkonam-to-dindigul-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-dindigul');
})->name('arakkonam-to-dindigul');

Route::get('/arakkonam-to-erode-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-erode');
})->name('arakkonam-to-erode');

Route::get('/arakkonam-to-hosur-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-hosur');
})->name('arakkonam-to-hosur');

Route::get('/arakkonam-to-kanchipuram-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-kanchipuram');
})->name('arakkonam-to-kanchipuram');

Route::get('/arakkonam-to-karur-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-karur');
})->name('arakkonam-to-karur');

Route::get('/arakkonam-to-krishnagiri-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-krishnagiri');
})->name('arakkonam-to-krishnagiri');

Route::get('/arakkonam-to-madurai-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-madurai');
})->name('arakkonam-to-madurai');

Route::get('/arakkonam-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-mayiladuthurai');
})->name('arakkonam-to-mayiladuthurai');

Route::get('/arakkonam-to-nagapattinam-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-nagapattinam');
})->name('arakkonam-to-nagapattinam');

Route::get('/arakkonam-to-nagercoil-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-nagercoil');
})->name('arakkonam-to-nagercoil');

Route::get('/arakkonam-to-namakkal-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-namakkal');
})->name('arakkonam-to-namakkal');

Route::get('/arakkonam-to-perambalur-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-perambalur');
})->name('arakkonam-to-perambalur');

Route::get('/arakkonam-to-puducherry-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-puducherry');
})->name('arakkonam-to-puducherry');

Route::get('/arakkonam-to-pudukkottai-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-pudukkottai');
})->name('arakkonam-to-pudukkottai');

Route::get('/arakkonam-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-ramanathapuram');
})->name('arakkonam-to-ramanathapuram');

Route::get('/arakkonam-to-ranipet-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-ranipet');
})->name('arakkonam-to-ranipet');

Route::get('/arakkonam-to-salem-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-salem');
})->name('arakkonam-to-salem');

Route::get('/arakkonam-to-sivakasi-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-sivakasi');
})->name('arakkonam-to-sivakasi');

Route::get('/arakkonam-to-tenkasi-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-tenkasi');
})->name('arakkonam-to-tenkasi');

Route::get('/arakkonam-to-thanjavur-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-thanjavur');
})->name('arakkonam-to-thanjavur');

Route::get('/arakkonam-to-thiruvarur-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-thiruvarur');
})->name('arakkonam-to-thiruvarur');

Route::get('/arakkonam-to-thoothukudi-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-thoothukudi');
})->name('arakkonam-to-thoothukudi');

Route::get('/arakkonam-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-tiruvannamalai');
})->name('arakkonam-to-tiruvannamalai');

Route::get('/arakkonam-to-tirunelveli-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-tirunelveli');
})->name('arakkonam-to-tirunelveli');

Route::get('/arakkonam-to-tiruppur-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-tiruppur');
})->name('arakkonam-to-tiruppur');

Route::get('/arakkonam-to-trichy-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-trichy');
})->name('arakkonam-to-trichy');

Route::get('/arakkonam-to-tirupati-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-tirupati');
})->name('arakkonam-to-tirupati');

Route::get('/arakkonam-to-vellore-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-vellore');
})->name('arakkonam-to-vellore');

Route::get('/arakkonam-to-virudhunagar-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-virudhunagar');
})->name('arakkonam-to-virudhunagar');

Route::get('/arakkonam-to-karaikal-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-karaikal');
})->name('arakkonam-to-karaikal');

Route::get('/arakkonam-to-kochi-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-kochi');
})->name('arakkonam-to-kochi');

Route::get('/arakkonam-to-kerala-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-kerala');
})->name('arakkonam-to-kerala');

Route::get('/arakkonam-to-villupuram-drop-taxi', function () {
    return view('layouts.arakkonam.arakkonam-to-villupuram');
})->name('arakkonam-to-villupuram');

// End of Arakkonam to All Cities Routes

Route::get('/chengalpattu-to-villupuram-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-villupuram');
})->name('chengalpattu-to-villupuram');

Route::get('/chengalpattu-to-chennai-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-chennai');
})->name('chengalpattu-to-chennai');

Route::get('/chengalpattu-to-puducherry-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-puducherry');
})->name('chengalpattu-to-puducherry');

Route::get('/chengalpattu-to-bangalore-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-bangalore');
})->name('chengalpattu-to-bangalore');

Route::get('/chengalpattu-to-cuddalore-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-cuddalore');
})->name('chengalpattu-to-cuddalore');

Route::get('/chengalpattu-to-madurai-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-madurai');
})->name('chengalpattu-to-madurai');

Route::get('/chengalpattu-to-erode-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-erode');
})->name('chengalpattu-to-erode');

Route::get('/chengalpattu-to-arakkonam-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-arakkonam');
})->name('chengalpattu-to-arakkonam');

Route::get('/chengalpattu-to-arani-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-arani');
})->name('chengalpattu-to-arani');

Route::get('/chengalpattu-to-chengalpattu-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-chengalpattu');
})->name('chengalpattu-to-chengalpattu');

Route::get('/chengalpattu-to-coimbatore-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-coimbatore');
})->name('chengalpattu-to-coimbatore');

Route::get('/chengalpattu-to-dharmapuri-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-dharmapuri');
})->name('chengalpattu-to-dharmapuri');

Route::get('/chengalpattu-to-dindigul-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-dindigul');
})->name('chengalpattu-to-dindigul');

Route::get('/chengalpattu-to-hosur-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-hosur');
})->name('chengalpattu-to-hosur');

Route::get('/chengalpattu-to-kanchipuram-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-kanchipuram');
})->name('chengalpattu-to-kanchipuram');

Route::get('/chengalpattu-to-karur-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-karur');
})->name('chengalpattu-to-karur');

Route::get('/chengalpattu-to-krishnagiri-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-krishnagiri');
})->name('chengalpattu-to-krishnagiri');

Route::get('/chengalpattu-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-mayiladuthurai');
})->name('chengalpattu-to-mayiladuthurai');

Route::get('/chengalpattu-to-nagapattinam-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-nagapattinam');
})->name('chengalpattu-to-nagapattinam');

Route::get('/chengalpattu-to-nagercoil-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-nagercoil');
})->name('chengalpattu-to-nagercoil');

Route::get('/chengalpattu-to-namakkal-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-namakkal');
})->name('chengalpattu-to-namakkal');

Route::get('/chengalpattu-to-perambalur-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-perambalur');
})->name('chengalpattu-to-perambalur');

Route::get('/chengalpattu-to-pudukkottai-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-pudukkottai');
})->name('chengalpattu-to-pudukkottai');

Route::get('/chengalpattu-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-ramanathapuram');
})->name('chengalpattu-to-ramanathapuram');

Route::get('/chengalpattu-to-ranipet-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-ranipet');
})->name('chengalpattu-to-ranipet');

Route::get('/chengalpattu-to-sivakasi-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-sivakasi');
})->name('chengalpattu-to-sivakasi');

Route::get('/chengalpattu-to-tenkasi-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-tenkasi');
})->name('chengalpattu-to-tenkasi');

Route::get('/chengalpattu-to-thanjavur-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-thanjavur');
})->name('chengalpattu-to-thanjavur');

Route::get('/chengalpattu-to-thiruvarur-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-thiruvarur');
})->name('chengalpattu-to-thiruvarur');

Route::get('/chengalpattu-to-thoothukudi-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-thoothukudi');
})->name('chengalpattu-to-thoothukudi');

Route::get('/chengalpattu-to-tiruppur-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-tiruppur');
})->name('chengalpattu-to-tiruppur');

Route::get('/chengalpattu-to-trichy-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-trichy');
})->name('chengalpattu-to-trichy');

Route::get('/chengalpattu-to-vellore-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-vellore');
})->name('chengalpattu-to-vellore');

Route::get('/chengalpattu-to-virudhunagar-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-virudhunagar');
})->name('chengalpattu-to-virudhunagar');

Route::get('/chengalpattu-to-salem-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-salem');
})->name('chengalpattu-to-salem');

Route::get('/chengalpattu-to-tirunelveli-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-tirunelveli');
})->name('chengalpattu-to-tirunelveli');

/* ✅ Missing Added */
Route::get('/chengalpattu-to-ariyalur-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-ariyalur');
})->name('chengalpattu-to-ariyalur');

Route::get('/chengalpattu-to-karaikal-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-karaikal');
})->name('chengalpattu-to-karaikal');

Route::get('/chengalpattu-to-kochi-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-kochi');
})->name('chengalpattu-to-kochi');

Route::get('/chengalpattu-to-tirupati-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-tirupati');
})->name('chengalpattu-to-tirupati');

Route::get('/chengalpattu-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-tiruvannamalai');
})->name('chengalpattu-to-tiruvannamalai');

Route::get('/chengalpattu-to-kerala-drop-taxi', function () {
    return view('layouts.chengalpattu.chengalpattu-to-kerala');
})->name('chengalpattu-to-kerala');
// End of Chengalpattu to All Cities Routes


Route::get('/coimbatore-to-villupuram-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-villupuram');
})->name('coimbatore-to-villupuram');

Route::get('/coimbatore-to-puducherry-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-puducherry');
})->name('coimbatore-to-puducherry');

Route::get('/coimbatore-to-bangalore-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-bangalore');
})->name('coimbatore-to-bangalore');

Route::get('/coimbatore-to-cuddalore-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-cuddalore');
})->name('coimbatore-to-cuddalore');

Route::get('/coimbatore-to-madurai-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-madurai');
})->name('coimbatore-to-madurai');

Route::get('/coimbatore-to-erode-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-erode');
})->name('coimbatore-to-erode');

Route::get('/coimbatore-to-arakkonam-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-arakkonam');
})->name('coimbatore-to-arakkonam');

Route::get('/coimbatore-to-arani-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-arani');
})->name('coimbatore-to-arani');

Route::get('/coimbatore-to-chengalpattu-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-chengalpattu');
})->name('coimbatore-to-chengalpattu');

Route::get('/coimbatore-to-chennai-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-chennai');
})->name('coimbatore-to-chennai');

Route::get('/coimbatore-to-dharmapuri-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-dharmapuri');
})->name('coimbatore-to-dharmapuri');

Route::get('/coimbatore-to-dindigul-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-dindigul');
})->name('coimbatore-to-dindigul');

Route::get('/coimbatore-to-hosur-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-hosur');
})->name('coimbatore-to-hosur');

Route::get('/coimbatore-to-kanchipuram-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-kanchipuram');
})->name('coimbatore-to-kanchipuram');

Route::get('/coimbatore-to-karur-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-karur');
})->name('coimbatore-to-karur');

Route::get('/coimbatore-to-krishnagiri-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-krishnagiri');
})->name('coimbatore-to-krishnagiri');

Route::get('/coimbatore-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-mayiladuthurai');
})->name('coimbatore-to-mayiladuthurai');

Route::get('/coimbatore-to-nagapattinam-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-nagapattinam');
})->name('coimbatore-to-nagapattinam');

Route::get('/coimbatore-to-nagercoil-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-nagercoil');
})->name('coimbatore-to-nagercoil');

Route::get('/coimbatore-to-namakkal-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-namakkal');
})->name('coimbatore-to-namakkal');

Route::get('/coimbatore-to-perambalur-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-perambalur');
})->name('coimbatore-to-perambalur');

Route::get('/coimbatore-to-pudukkottai-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-pudukkottai');
})->name('coimbatore-to-pudukkottai');

Route::get('/coimbatore-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-ramanathapuram');
})->name('coimbatore-to-ramanathapuram');

Route::get('/coimbatore-to-ranipet-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-ranipet');
})->name('coimbatore-to-ranipet');

Route::get('/coimbatore-to-sivakasi-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-sivakasi');
})->name('coimbatore-to-sivakasi');

Route::get('/coimbatore-to-tenkasi-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-tenkasi');
})->name('coimbatore-to-tenkasi');

Route::get('/coimbatore-to-thanjavur-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-thanjavur');
})->name('coimbatore-to-thanjavur');

Route::get('/coimbatore-to-thiruvarur-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-thiruvarur');
})->name('coimbatore-to-thiruvarur');

Route::get('/coimbatore-to-thoothukudi-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-thoothukudi');
})->name('coimbatore-to-thoothukudi');

Route::get('/coimbatore-to-tiruppur-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-tiruppur');
})->name('coimbatore-to-tiruppur');

Route::get('/coimbatore-to-trichy-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-trichy');
})->name('coimbatore-to-trichy');

Route::get('/coimbatore-to-vellore-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-vellore');
})->name('coimbatore-to-vellore');

Route::get('/coimbatore-to-virudhunagar-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-virudhunagar');
})->name('coimbatore-to-virudhunagar');

Route::get('/coimbatore-to-salem-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-salem');
})->name('coimbatore-to-salem');

Route::get('/coimbatore-to-tirunelveli-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-tirunelveli');
})->name('coimbatore-to-tirunelveli');

/* ✅ Missing Added */
Route::get('/coimbatore-to-ariyalur-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-ariyalur');
})->name('coimbatore-to-ariyalur');

Route::get('/coimbatore-to-karaikal-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-karaikal');
})->name('coimbatore-to-karaikal');

Route::get('/coimbatore-to-kochi-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-kochi');
})->name('coimbatore-to-kochi');

Route::get('/coimbatore-to-tirupati-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-tirupati');
})->name('coimbatore-to-tirupati');

Route::get('/coimbatore-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-tiruvannamalai');
})->name('coimbatore-to-tiruvannamalai');

Route::get('/coimbatore-to-kerala-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-kerala');
})->name('coimbatore-to-kerala');

Route::get('/coimbatore-to-coimbatore-drop-taxi', function () {
    return view('layouts.coimbatore.coimbatore-to-coimbatore');
})->name('coimbatore-to-coimbatore');
// End of Coimbatore to All Cities Routes



Route::get('/cuddalore-to-villupuram-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-villupuram');
})->name('cuddalore-to-villupuram');

Route::get('/cuddalore-to-puducherry-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-puducherry');
})->name('cuddalore-to-puducherry');

Route::get('/cuddalore-to-bangalore-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-bangalore');
})->name('cuddalore-to-bangalore');

Route::get('/cuddalore-to-cuddalore-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-cuddalore');
})->name('cuddalore-to-cuddalore');

Route::get('/cuddalore-to-chennai-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-chennai');
})->name('cuddalore-to-chennai');

Route::get('/cuddalore-to-madurai-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-madurai');
})->name('cuddalore-to-madurai');

Route::get('/cuddalore-to-erode-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-erode');
})->name('cuddalore-to-erode');

Route::get('/cuddalore-to-arakkonam-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-arakkonam');
})->name('cuddalore-to-arakkonam');

Route::get('/cuddalore-to-arani-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-arani');
})->name('cuddalore-to-arani');

Route::get('/cuddalore-to-chengalpattu-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-chengalpattu');
})->name('cuddalore-to-chengalpattu');

Route::get('/cuddalore-to-coimbatore-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-coimbatore');
})->name('cuddalore-to-coimbatore');

Route::get('/cuddalore-to-dharmapuri-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-dharmapuri');
})->name('cuddalore-to-dharmapuri');

Route::get('/cuddalore-to-dindigul-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-dindigul');
})->name('cuddalore-to-dindigul');

Route::get('/cuddalore-to-hosur-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-hosur');
})->name('cuddalore-to-hosur');

Route::get('/cuddalore-to-kanchipuram-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-kanchipuram');
})->name('cuddalore-to-kanchipuram');

Route::get('/cuddalore-to-karur-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-karur');
})->name('cuddalore-to-karur');

Route::get('/cuddalore-to-krishnagiri-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-krishnagiri');
})->name('cuddalore-to-krishnagiri');

Route::get('/cuddalore-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-mayiladuthurai');
})->name('cuddalore-to-mayiladuthurai');

Route::get('/cuddalore-to-nagapattinam-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-nagapattinam');
})->name('cuddalore-to-nagapattinam');

Route::get('/cuddalore-to-nagercoil-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-nagercoil');
})->name('cuddalore-to-nagercoil');

Route::get('/cuddalore-to-namakkal-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-namakkal');
})->name('cuddalore-to-namakkal');

Route::get('/cuddalore-to-perambalur-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-perambalur');
})->name('cuddalore-to-perambalur');

Route::get('/cuddalore-to-pudukkottai-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-pudukkottai');
})->name('cuddalore-to-pudukkottai');

Route::get('/cuddalore-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-ramanathapuram');
})->name('cuddalore-to-ramanathapuram');

Route::get('/cuddalore-to-ranipet-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-ranipet');
})->name('cuddalore-to-ranipet');

Route::get('/cuddalore-to-sivakasi-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-sivakasi');
})->name('cuddalore-to-sivakasi');

Route::get('/cuddalore-to-tenkasi-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-tenkasi');
})->name('cuddalore-to-tenkasi');

Route::get('/cuddalore-to-thanjavur-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-thanjavur');
})->name('cuddalore-to-thanjavur');

Route::get('/cuddalore-to-thiruvarur-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-thiruvarur');
})->name('cuddalore-to-thiruvarur');

Route::get('/cuddalore-to-thoothukudi-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-thoothukudi');
})->name('cuddalore-to-thoothukudi');

Route::get('/cuddalore-to-tiruppur-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-tiruppur');
})->name('cuddalore-to-tiruppur');

Route::get('/cuddalore-to-trichy-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-trichy');
})->name('cuddalore-to-trichy');

Route::get('/cuddalore-to-vellore-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-vellore');
})->name('cuddalore-to-vellore');

Route::get('/cuddalore-to-virudhunagar-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-virudhunagar');
})->name('cuddalore-to-virudhunagar');

Route::get('/cuddalore-to-salem-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-salem');
})->name('cuddalore-to-salem');

Route::get('/cuddalore-to-tirunelveli-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-tirunelveli');
})->name('cuddalore-to-tirunelveli');

# ✅ Missing routes added
Route::get('/cuddalore-to-ariyalur-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-ariyalur');
})->name('cuddalore-to-ariyalur');

Route::get('/cuddalore-to-karaikal-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-karaikal');
})->name('cuddalore-to-karaikal');

Route::get('/cuddalore-to-kochi-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-kochi');
})->name('cuddalore-to-kochi');

Route::get('/cuddalore-to-tirupati-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-tirupati');
})->name('cuddalore-to-tirupati');

Route::get('/cuddalore-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-tiruvannamalai');
})->name('cuddalore-to-tiruvannamalai');

Route::get('/cuddalore-to-kerala-drop-taxi', function () {
    return view('layouts.cuddalore.cuddalore-to-kerala');
})->name('cuddalore-to-kerala');
// End of Cuddalore to All Cities Routes



Route::get('/dharmapuri-to-villupuram-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-villupuram');
})->name('dharmapuri-to-villupuram');

Route::get('/dharmapuri-to-puducherry-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-puducherry');
})->name('dharmapuri-to-puducherry');

Route::get('/dharmapuri-to-chennai-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-chennai');
})->name('dharmapuri-to-chennai');

Route::get('/dharmapuri-to-bangalore-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-bangalore');
})->name('dharmapuri-to-bangalore');

Route::get('/dharmapuri-to-cuddalore-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-cuddalore');
})->name('dharmapuri-to-cuddalore');

Route::get('/dharmapuri-to-madurai-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-madurai');
})->name('dharmapuri-to-madurai');

Route::get('/dharmapuri-to-erode-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-erode');
})->name('dharmapuri-to-erode');

Route::get('/dharmapuri-to-arakkonam-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-arakkonam');
})->name('dharmapuri-to-arakkonam');

Route::get('/dharmapuri-to-arani-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-arani');
})->name('dharmapuri-to-arani');

Route::get('/dharmapuri-to-chengalpattu-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-chengalpattu');
})->name('dharmapuri-to-chengalpattu');

Route::get('/dharmapuri-to-coimbatore-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-coimbatore');
})->name('dharmapuri-to-coimbatore');

Route::get('/dharmapuri-to-dharmapuri-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-dharmapuri');
})->name('dharmapuri-to-dharmapuri');

Route::get('/dharmapuri-to-dindigul-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-dindigul');
})->name('dharmapuri-to-dindigul');

Route::get('/dharmapuri-to-hosur-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-hosur');
})->name('dharmapuri-to-hosur');

Route::get('/dharmapuri-to-kanchipuram-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-kanchipuram');
})->name('dharmapuri-to-kanchipuram');

Route::get('/dharmapuri-to-karur-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-karur');
})->name('dharmapuri-to-karur');

Route::get('/dharmapuri-to-krishnagiri-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-krishnagiri');
})->name('dharmapuri-to-krishnagiri');

Route::get('/dharmapuri-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-mayiladuthurai');
})->name('dharmapuri-to-mayiladuthurai');

Route::get('/dharmapuri-to-nagapattinam-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-nagapattinam');
})->name('dharmapuri-to-nagapattinam');

Route::get('/dharmapuri-to-nagercoil-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-nagercoil');
})->name('dharmapuri-to-nagercoil');

Route::get('/dharmapuri-to-namakkal-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-namakkal');
})->name('dharmapuri-to-namakkal');

Route::get('/dharmapuri-to-perambalur-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-perambalur');
})->name('dharmapuri-to-perambalur');

Route::get('/dharmapuri-to-pudukkottai-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-pudukkottai');
})->name('dharmapuri-to-pudukkottai');

Route::get('/dharmapuri-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-ramanathapuram');
})->name('dharmapuri-to-ramanathapuram');

Route::get('/dharmapuri-to-ranipet-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-ranipet');
})->name('dharmapuri-to-ranipet');

Route::get('/dharmapuri-to-sivakasi-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-sivakasi');
})->name('dharmapuri-to-sivakasi');

Route::get('/dharmapuri-to-tenkasi-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-tenkasi');
})->name('dharmapuri-to-tenkasi');

Route::get('/dharmapuri-to-thanjavur-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-thanjavur');
})->name('dharmapuri-to-thanjavur');

Route::get('/dharmapuri-to-thiruvarur-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-thiruvarur');
})->name('dharmapuri-to-thiruvarur');

Route::get('/dharmapuri-to-thoothukudi-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-thoothukudi');
})->name('dharmapuri-to-thoothukudi');

Route::get('/dharmapuri-to-tiruppur-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-tiruppur');
})->name('dharmapuri-to-tiruppur');

Route::get('/dharmapuri-to-trichy-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-trichy');
})->name('dharmapuri-to-trichy');

Route::get('/dharmapuri-to-vellore-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-vellore');
})->name('dharmapuri-to-vellore');

Route::get('/dharmapuri-to-virudhunagar-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-virudhunagar');
})->name('dharmapuri-to-virudhunagar');

Route::get('/dharmapuri-to-salem-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-salem');
})->name('dharmapuri-to-salem');

Route::get('/dharmapuri-to-tirunelveli-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-tirunelveli');
})->name('dharmapuri-to-tirunelveli');

/* ✅ Newly added cities */
Route::get('/dharmapuri-to-kochi-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-kochi');
})->name('dharmapuri-to-kochi');

Route::get('/dharmapuri-to-karaikal-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-karaikal');
})->name('dharmapuri-to-karaikal');

Route::get('/dharmapuri-to-tirupati-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-tirupati');
})->name('dharmapuri-to-tirupati');

Route::get('/dharmapuri-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-tiruvannamalai');
})->name('dharmapuri-to-tiruvannamalai');

Route::get('/dharmapuri-to-kerala-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-kerala');
})->name('dharmapuri-to-kerala');

Route::get('/dharmapuri-to-ariyalur-drop-taxi', function () {
    return view('layouts.dharmapuri.dharmapuri-to-ariyalur');
})->name('dharmapuri-to-ariyalur');
// End of Dharmapuri to All Cities Routes


Route::get('/dindigul-to-villupuram-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-villupuram');
})->name('dindigul-to-villupuram');

Route::get('/dindigul-to-puducherry-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-puducherry');
})->name('dindigul-to-puducherry');

Route::get('/dindigul-to-chennai-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-chennai');
})->name('dindigul-to-chennai');

Route::get('/dindigul-to-bangalore-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-bangalore');
})->name('dindigul-to-bangalore');

Route::get('/dindigul-to-cuddalore-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-cuddalore');
})->name('dindigul-to-cuddalore');

Route::get('/dindigul-to-madurai-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-madurai');
})->name('dindigul-to-madurai');

Route::get('/dindigul-to-erode-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-erode');
})->name('dindigul-to-erode');

Route::get('/dindigul-to-arakkonam-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-arakkonam');
})->name('dindigul-to-arakkonam');

Route::get('/dindigul-to-arani-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-arani');
})->name('dindigul-to-arani');

Route::get('/dindigul-to-chengalpattu-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-chengalpattu');
})->name('dindigul-to-chengalpattu');

Route::get('/dindigul-to-coimbatore-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-coimbatore');
})->name('dindigul-to-coimbatore');

Route::get('/dindigul-to-dharmapuri-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-dharmapuri');
})->name('dindigul-to-dharmapuri');

Route::get('/dindigul-to-dindigul-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-dindigul');
})->name('dindigul-to-dindigul');

Route::get('/dindigul-to-hosur-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-hosur');
})->name('dindigul-to-hosur');

Route::get('/dindigul-to-kanchipuram-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-kanchipuram');
})->name('dindigul-to-kanchipuram');

Route::get('/dindigul-to-karur-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-karur');
})->name('dindigul-to-karur');

Route::get('/dindigul-to-krishnagiri-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-krishnagiri');
})->name('dindigul-to-krishnagiri');

Route::get('/dindigul-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-mayiladuthurai');
})->name('dindigul-to-mayiladuthurai');

Route::get('/dindigul-to-nagapattinam-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-nagapattinam');
})->name('dindigul-to-nagapattinam');

Route::get('/dindigul-to-nagercoil-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-nagercoil');
})->name('dindigul-to-nagercoil');

Route::get('/dindigul-to-namakkal-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-namakkal');
})->name('dindigul-to-namakkal');

Route::get('/dindigul-to-perambalur-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-perambalur');
})->name('dindigul-to-perambalur');

Route::get('/dindigul-to-pudukkottai-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-pudukkottai');
})->name('dindigul-to-pudukkottai');

Route::get('/dindigul-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-ramanathapuram');
})->name('dindigul-to-ramanathapuram');

Route::get('/dindigul-to-ranipet-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-ranipet');
})->name('dindigul-to-ranipet');

Route::get('/dindigul-to-sivakasi-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-sivakasi');
})->name('dindigul-to-sivakasi');

Route::get('/dindigul-to-tenkasi-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-tenkasi');
})->name('dindigul-to-tenkasi');

Route::get('/dindigul-to-thanjavur-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-thanjavur');
})->name('dindigul-to-thanjavur');

Route::get('/dindigul-to-thiruvarur-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-thiruvarur');
})->name('dindigul-to-thiruvarur');

Route::get('/dindigul-to-thoothukudi-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-thoothukudi');
})->name('dindigul-to-thoothukudi');

Route::get('/dindigul-to-tiruppur-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-tiruppur');
})->name('dindigul-to-tiruppur');

Route::get('/dindigul-to-trichy-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-trichy');
})->name('dindigul-to-trichy');

Route::get('/dindigul-to-vellore-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-vellore');
})->name('dindigul-to-vellore');

Route::get('/dindigul-to-virudhunagar-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-virudhunagar');
})->name('dindigul-to-virudhunagar');

Route::get('/dindigul-to-salem-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-salem');
})->name('dindigul-to-salem');

Route::get('/dindigul-to-tirunelveli-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-tirunelveli');
})->name('dindigul-to-tirunelveli');

/* ✅ Newly added cities */
Route::get('/dindigul-to-kochi-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-kochi');
})->name('dindigul-to-kochi');

Route::get('/dindigul-to-karaikal-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-karaikal');
})->name('dindigul-to-karaikal');

Route::get('/dindigul-to-tirupati-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-tirupati');
})->name('dindigul-to-tirupati');

Route::get('/dindigul-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-tiruvannamalai');
})->name('dindigul-to-tiruvannamalai');

Route::get('/dindigul-to-kerala-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-kerala');
})->name('dindigul-to-kerala');

Route::get('/dindigul-to-ariyalur-drop-taxi', function () {
    return view('layouts.dindigul.dindigul-to-ariyalur');
})->name('dindigul-to-ariyalur');
// End of Dindigul to All Cities Routes



Route::get('/erode-to-villupuram-drop-taxi', function () {
    return view('layouts.erode.erode-to-villupuram');
})->name('erode-to-villupuram');

Route::get('/erode-to-puducherry-drop-taxi', function () {
    return view('layouts.erode.erode-to-puducherry');
})->name('erode-to-puducherry');

Route::get('/erode-to-chennai-drop-taxi', function () {
    return view('layouts.erode.erode-to-chennai');
})->name('erode-to-chennai');

Route::get('/erode-to-bangalore-drop-taxi', function () {
    return view('layouts.erode.erode-to-bangalore');
})->name('erode-to-bangalore');

Route::get('/erode-to-cuddalore-drop-taxi', function () {
    return view('layouts.erode.erode-to-cuddalore');
})->name('erode-to-cuddalore');

Route::get('/erode-to-madurai-drop-taxi', function () {
    return view('layouts.erode.erode-to-madurai');
})->name('erode-to-madurai');

Route::get('/erode-to-erode-drop-taxi', function () {
    return view('layouts.erode.erode-to-erode');
})->name('erode-to-erode');

Route::get('/erode-to-arakkonam-drop-taxi', function () {
    return view('layouts.erode.erode-to-arakkonam');
})->name('erode-to-arakkonam');

Route::get('/erode-to-arani-drop-taxi', function () {
    return view('layouts.erode.erode-to-arani');
})->name('erode-to-arani');

Route::get('/erode-to-chengalpattu-drop-taxi', function () {
    return view('layouts.erode.erode-to-chengalpattu');
})->name('erode-to-chengalpattu');

Route::get('/erode-to-coimbatore-drop-taxi', function () {
    return view('layouts.erode.erode-to-coimbatore');
})->name('erode-to-coimbatore');

Route::get('/erode-to-dharmapuri-drop-taxi', function () {
    return view('layouts.erode.erode-to-dharmapuri');
})->name('erode-to-dharmapuri');

Route::get('/erode-to-dindigul-drop-taxi', function () {
    return view('layouts.erode.erode-to-dindigul');
})->name('erode-to-dindigul');

Route::get('/erode-to-hosur-drop-taxi', function () {
    return view('layouts.erode.erode-to-hosur');
})->name('erode-to-hosur');

Route::get('/erode-to-kanchipuram-drop-taxi', function () {
    return view('layouts.erode.erode-to-kanchipuram');
})->name('erode-to-kanchipuram');

Route::get('/erode-to-karur-drop-taxi', function () {
    return view('layouts.erode.erode-to-karur');
})->name('erode-to-karur');

Route::get('/erode-to-krishnagiri-drop-taxi', function () {
    return view('layouts.erode.erode-to-krishnagiri');
})->name('erode-to-krishnagiri');

Route::get('/erode-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.erode.erode-to-mayiladuthurai');
})->name('erode-to-mayiladuthurai');

Route::get('/erode-to-nagapattinam-drop-taxi', function () {
    return view('layouts.erode.erode-to-nagapattinam');
})->name('erode-to-nagapattinam');

Route::get('/erode-to-nagercoil-drop-taxi', function () {
    return view('layouts.erode.erode-to-nagercoil');
})->name('erode-to-nagercoil');

Route::get('/erode-to-namakkal-drop-taxi', function () {
    return view('layouts.erode.erode-to-namakkal');
})->name('erode-to-namakkal');

Route::get('/erode-to-perambalur-drop-taxi', function () {
    return view('layouts.erode.erode-to-perambalur');
})->name('erode-to-perambalur');

Route::get('/erode-to-pudukkottai-drop-taxi', function () {
    return view('layouts.erode.erode-to-pudukkottai');
})->name('erode-to-pudukkottai');

Route::get('/erode-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.erode.erode-to-ramanathapuram');
})->name('erode-to-ramanathapuram');

Route::get('/erode-to-ranipet-drop-taxi', function () {
    return view('layouts.erode.erode-to-ranipet');
})->name('erode-to-ranipet');

Route::get('/erode-to-sivakasi-drop-taxi', function () {
    return view('layouts.erode.erode-to-sivakasi');
})->name('erode-to-sivakasi');

Route::get('/erode-to-tenkasi-drop-taxi', function () {
    return view('layouts.erode.erode-to-tenkasi');
})->name('erode-to-tenkasi');

Route::get('/erode-to-thanjavur-drop-taxi', function () {
    return view('layouts.erode.erode-to-thanjavur');
})->name('erode-to-thanjavur');

Route::get('/erode-to-thiruvarur-drop-taxi', function () {
    return view('layouts.erode.erode-to-thiruvarur');
})->name('erode-to-thiruvarur');

Route::get('/erode-to-thoothukudi-drop-taxi', function () {
    return view('layouts.erode.erode-to-thoothukudi');
})->name('erode-to-thoothukudi');

Route::get('/erode-to-tiruppur-drop-taxi', function () {
    return view('layouts.erode.erode-to-tiruppur');
})->name('erode-to-tiruppur');

Route::get('/erode-to-trichy-drop-taxi', function () {
    return view('layouts.erode.erode-to-trichy');
})->name('erode-to-trichy');

Route::get('/erode-to-vellore-drop-taxi', function () {
    return view('layouts.erode.erode-to-vellore');
})->name('erode-to-vellore');

Route::get('/erode-to-virudhunagar-drop-taxi', function () {
    return view('layouts.erode.erode-to-virudhunagar');
})->name('erode-to-virudhunagar');

Route::get('/erode-to-salem-drop-taxi', function () {
    return view('layouts.erode.erode-to-salem');
})->name('erode-to-salem');

Route::get('/erode-to-tirunelveli-drop-taxi', function () {
    return view('layouts.erode.erode-to-tirunelveli');
})->name('erode-to-tirunelveli');

/* ✅ Newly added cities */
Route::get('/erode-to-kochi-drop-taxi', function () {
    return view('layouts.erode.erode-to-kochi');
})->name('erode-to-kochi');

Route::get('/erode-to-karaikal-drop-taxi', function () {
    return view('layouts.erode.erode-to-karaikal');
})->name('erode-to-karaikal');

Route::get('/erode-to-tirupati-drop-taxi', function () {
    return view('layouts.erode.erode-to-tirupati');
})->name('erode-to-tirupati');

Route::get('/erode-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.erode.erode-to-tiruvannamalai');
})->name('erode-to-tiruvannamalai');

Route::get('/erode-to-kerala-drop-taxi', function () {
    return view('layouts.erode.erode-to-kerala');
})->name('erode-to-kerala');

Route::get('/erode-to-ariyalur-drop-taxi', function () {
    return view('layouts.erode.erode-to-ariyalur');
})->name('erode-to-ariyalur');




Route::get('/hosur-to-villupuram-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-villupuram');
})->name('hosur-to-villupuram');

Route::get('/hosur-to-chennai-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-chennai');
})->name('hosur-to-chennai');

Route::get('/hosur-to-puducherry-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-puducherry');
})->name('hosur-to-puducherry');

Route::get('/hosur-to-bangalore-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-bangalore');
})->name('hosur-to-bangalore');

Route::get('/hosur-to-cuddalore-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-cuddalore');
})->name('hosur-to-cuddalore');

Route::get('/hosur-to-madurai-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-madurai');
})->name('hosur-to-madurai');

Route::get('/hosur-to-erode-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-erode');
})->name('hosur-to-erode');

Route::get('/hosur-to-arakkonam-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-arakkonam');
})->name('hosur-to-arakkonam');

Route::get('/hosur-to-arani-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-arani');
})->name('hosur-to-arani');

Route::get('/hosur-to-chengalpattu-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-chengalpattu');
})->name('hosur-to-chengalpattu');

Route::get('/hosur-to-coimbatore-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-coimbatore');
})->name('hosur-to-coimbatore');

Route::get('/hosur-to-dharmapuri-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-dharmapuri');
})->name('hosur-to-dharmapuri');

Route::get('/hosur-to-dindigul-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-dindigul');
})->name('hosur-to-dindigul');

Route::get('/hosur-to-hosur-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-hosur');
})->name('hosur-to-hosur');

Route::get('/hosur-to-kanchipuram-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-kanchipuram');
})->name('hosur-to-kanchipuram');

Route::get('/hosur-to-karur-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-karur');
})->name('hosur-to-karur');

Route::get('/hosur-to-krishnagiri-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-krishnagiri');
})->name('hosur-to-krishnagiri');

Route::get('/hosur-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-mayiladuthurai');
})->name('hosur-to-mayiladuthurai');

Route::get('/hosur-to-nagapattinam-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-nagapattinam');
})->name('hosur-to-nagapattinam');

Route::get('/hosur-to-nagercoil-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-nagercoil');
})->name('hosur-to-nagercoil');

Route::get('/hosur-to-namakkal-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-namakkal');
})->name('hosur-to-namakkal');

Route::get('/hosur-to-perambalur-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-perambalur');
})->name('hosur-to-perambalur');

Route::get('/hosur-to-pudukkottai-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-pudukkottai');
})->name('hosur-to-pudukkottai');

Route::get('/hosur-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-ramanathapuram');
})->name('hosur-to-ramanathapuram');

Route::get('/hosur-to-ranipet-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-ranipet');
})->name('hosur-to-ranipet');

Route::get('/hosur-to-sivakasi-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-sivakasi');
})->name('hosur-to-sivakasi');

Route::get('/hosur-to-tenkasi-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-tenkasi');
})->name('hosur-to-tenkasi');

Route::get('/hosur-to-thanjavur-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-thanjavur');
})->name('hosur-to-thanjavur');

Route::get('/hosur-to-thiruvarur-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-thiruvarur');
})->name('hosur-to-thiruvarur');

Route::get('/hosur-to-thoothukudi-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-thoothukudi');
})->name('hosur-to-thoothukudi');

Route::get('/hosur-to-tiruppur-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-tiruppur');
})->name('hosur-to-tiruppur');

Route::get('/hosur-to-trichy-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-trichy');
})->name('hosur-to-trichy');

Route::get('/hosur-to-vellore-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-vellore');
})->name('hosur-to-vellore');

Route::get('/hosur-to-virudhunagar-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-virudhunagar');
})->name('hosur-to-virudhunagar');

Route::get('/hosur-to-salem-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-salem');
})->name('hosur-to-salem');

Route::get('/hosur-to-tirunelveli-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-tirunelveli');
})->name('hosur-to-tirunelveli');

/* ✅ Newly added cities */
Route::get('/hosur-to-kochi-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-kochi');
})->name('hosur-to-kochi');

Route::get('/hosur-to-karaikal-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-karaikal');
})->name('hosur-to-karaikal');

Route::get('/hosur-to-tirupati-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-tirupati');
})->name('hosur-to-tirupati');

Route::get('/hosur-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-tiruvannamalai');
})->name('hosur-to-tiruvannamalai');

Route::get('/hosur-to-kerala-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-kerala');
})->name('hosur-to-kerala');

Route::get('/hosur-to-ariyalur-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-ariyalur');
})->name('hosur-to-ariyalur');
// End of Hosur to All Cities Routes


Route::get('/kanchipuram-to-villupuram-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-villupuram');
})->name('kanchipuram-to-villupuram');

Route::get('/kanchipuram-to-chennai-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-chennai');
})->name('kanchipuram-to-chennai');

Route::get('/kanchipuram-to-puducherry-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-puducherry');
})->name('kanchipuram-to-puducherry');

Route::get('/kanchipuram-to-bangalore-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-bangalore');
})->name('kanchipuram-to-bangalore');

Route::get('/kanchipuram-to-cuddalore-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-cuddalore');
})->name('kanchipuram-to-cuddalore');

Route::get('/kanchipuram-to-madurai-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-madurai');
})->name('kanchipuram-to-madurai');

Route::get('/kanchipuram-to-erode-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-erode');
})->name('kanchipuram-to-erode');

Route::get('/kanchipuram-to-arakkonam-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-arakkonam');
})->name('kanchipuram-to-arakkonam');

Route::get('/kanchipuram-to-arani-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-arani');
})->name('kanchipuram-to-arani');

Route::get('/kanchipuram-to-chengalpattu-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-chengalpattu');
})->name('kanchipuram-to-chengalpattu');

Route::get('/kanchipuram-to-coimbatore-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-coimbatore');
})->name('kanchipuram-to-coimbatore');

Route::get('/kanchipuram-to-dharmapuri-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-dharmapuri');
})->name('kanchipuram-to-dharmapuri');

Route::get('/kanchipuram-to-dindigul-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-dindigul');
})->name('kanchipuram-to-dindigul');

Route::get('/kanchipuram-to-hosur-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-hosur');
})->name('kanchipuram-to-hosur');

Route::get('/kanchipuram-to-kanchipuram-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-kanchipuram');
})->name('kanchipuram-to-kanchipuram');

Route::get('/kanchipuram-to-karur-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-karur');
})->name('kanchipuram-to-karur');

Route::get('/kanchipuram-to-krishnagiri-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-krishnagiri');
})->name('kanchipuram-to-krishnagiri');

Route::get('/kanchipuram-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-mayiladuthurai');
})->name('kanchipuram-to-mayiladuthurai');

Route::get('/kanchipuram-to-nagapattinam-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-nagapattinam');
})->name('kanchipuram-to-nagapattinam');

Route::get('/kanchipuram-to-nagercoil-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-nagercoil');
})->name('kanchipuram-to-nagercoil');

Route::get('/kanchipuram-to-namakkal-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-namakkal');
})->name('kanchipuram-to-namakkal');

Route::get('/kanchipuram-to-perambalur-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-perambalur');
})->name('kanchipuram-to-perambalur');

Route::get('/kanchipuram-to-pudukkottai-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-pudukkottai');
})->name('kanchipuram-to-pudukkottai');

Route::get('/kanchipuram-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-ramanathapuram');
})->name('kanchipuram-to-ramanathapuram');

Route::get('/kanchipuram-to-ranipet-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-ranipet');
})->name('kanchipuram-to-ranipet');

Route::get('/kanchipuram-to-sivakasi-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-sivakasi');
})->name('kanchipuram-to-sivakasi');

Route::get('/kanchipuram-to-tenkasi-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-tenkasi');
})->name('kanchipuram-to-tenkasi');

Route::get('/kanchipuram-to-thanjavur-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-thanjavur');
})->name('kanchipuram-to-thanjavur');

Route::get('/kanchipuram-to-thiruvarur-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-thiruvarur');
})->name('kanchipuram-to-thiruvarur');

Route::get('/kanchipuram-to-thoothukudi-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-thoothukudi');
})->name('kanchipuram-to-thoothukudi');

Route::get('/kanchipuram-to-tiruppur-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-tiruppur');
})->name('kanchipuram-to-tiruppur');

Route::get('/kanchipuram-to-trichy-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-trichy');
})->name('kanchipuram-to-trichy');

Route::get('/kanchipuram-to-vellore-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-vellore');
})->name('kanchipuram-to-vellore');

Route::get('/kanchipuram-to-virudhunagar-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-virudhunagar');
})->name('kanchipuram-to-virudhunagar');

Route::get('/kanchipuram-to-salem-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-salem');
})->name('kanchipuram-to-salem');

Route::get('/kanchipuram-to-tirunelveli-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-tirunelveli');
})->name('kanchipuram-to-tirunelveli');

Route::get('/hosur-to-kochi-drop-taxi', function () {
    return view('layouts.hosur.hosur-to-kochi');
})->name('hosur-to-kochi');

Route::get('/kanchipuram-to-kochi-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-kochi');
})->name('kanchipuram-to-kochi');

Route::get('/kanchipuram-to-karaikal-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-karaikal');
})->name('kanchipuram-to-karaikal');

Route::get('/kanchipuram-to-tirupati-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-tirupati');
})->name('kanchipuram-to-tirupati');

Route::get('/kanchipuram-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-tiruvannamalai');
})->name('kanchipuram-to-tiruvannamalai');

Route::get('/kanchipuram-to-kerala-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-kerala');
})->name('kanchipuram-to-kerala');

Route::get('/kanchipuram-to-ariyalur-drop-taxi', function () {
    return view('layouts.kanchipuram.kanchipuram-to-ariyalur');
})->name('kanchipuram-to-ariyalur');





Route::get('/karur-to-villupuram-drop-taxi', function () {
    return view('layouts.karur.karur-to-villupuram');
})->name('karur-to-villupuram');

Route::get('/karur-to-chennai-drop-taxi', function () {
    return view('layouts.karur.karur-to-chennai');
})->name('karur-to-chennai');

Route::get('/karur-to-puducherry-drop-taxi', function () {
    return view('layouts.karur.karur-to-puducherry');
})->name('karur-to-puducherry');

Route::get('/karur-to-bangalore-drop-taxi', function () {
    return view('layouts.karur.karur-to-bangalore');
})->name('karur-to-bangalore');

Route::get('/karur-to-cuddalore-drop-taxi', function () {
    return view('layouts.karur.karur-to-cuddalore');
})->name('karur-to-cuddalore');

Route::get('/karur-to-madurai-drop-taxi', function () {
    return view('layouts.karur.karur-to-madurai');
})->name('karur-to-madurai');

Route::get('/karur-to-erode-drop-taxi', function () {
    return view('layouts.karur.karur-to-erode');
})->name('karur-to-erode');

Route::get('/karur-to-arakkonam-drop-taxi', function () {
    return view('layouts.karur.karur-to-arakkonam');
})->name('karur-to-arakkonam');

Route::get('/karur-to-arani-drop-taxi', function () {
    return view('layouts.karur.karur-to-arani');
})->name('karur-to-arani');

Route::get('/karur-to-chengalpattu-drop-taxi', function () {
    return view('layouts.karur.karur-to-chengalpattu');
})->name('karur-to-chengalpattu');

Route::get('/karur-to-coimbatore-drop-taxi', function () {
    return view('layouts.karur.karur-to-coimbatore');
})->name('karur-to-coimbatore');

Route::get('/karur-to-dharmapuri-drop-taxi', function () {
    return view('layouts.karur.karur-to-dharmapuri');
})->name('karur-to-dharmapuri');

Route::get('/karur-to-dindigul-drop-taxi', function () {
    return view('layouts.karur.karur-to-dindigul');
})->name('karur-to-dindigul');

Route::get('/karur-to-hosur-drop-taxi', function () {
    return view('layouts.karur.karur-to-hosur');
})->name('karur-to-hosur');

Route::get('/karur-to-kanchipuram-drop-taxi', function () {
    return view('layouts.karur.karur-to-kanchipuram');
})->name('karur-to-kanchipuram');

Route::get('/karur-to-karur-drop-taxi', function () {
    return view('layouts.karur.karur-to-karur');
})->name('karur-to-karur');

Route::get('/karur-to-krishnagiri-drop-taxi', function () {
    return view('layouts.karur.karur-to-krishnagiri');
})->name('karur-to-krishnagiri');

Route::get('/karur-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.karur.karur-to-mayiladuthurai');
})->name('karur-to-mayiladuthurai');

Route::get('/karur-to-nagapattinam-drop-taxi', function () {
    return view('layouts.karur.karur-to-nagapattinam');
})->name('karur-to-nagapattinam');

Route::get('/karur-to-nagercoil-drop-taxi', function () {
    return view('layouts.karur.karur-to-nagercoil');
})->name('karur-to-nagercoil');

Route::get('/karur-to-namakkal-drop-taxi', function () {
    return view('layouts.karur.karur-to-namakkal');
})->name('karur-to-namakkal');

Route::get('/karur-to-perambalur-drop-taxi', function () {
    return view('layouts.karur.karur-to-perambalur');
})->name('karur-to-perambalur');

Route::get('/karur-to-pudukkottai-drop-taxi', function () {
    return view('layouts.karur.karur-to-pudukkottai');
})->name('karur-to-pudukkottai');

Route::get('/karur-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.karur.karur-to-ramanathapuram');
})->name('karur-to-ramanathapuram');

Route::get('/karur-to-ranipet-drop-taxi', function () {
    return view('layouts.karur.karur-to-ranipet');
})->name('karur-to-ranipet');

Route::get('/karur-to-sivakasi-drop-taxi', function () {
    return view('layouts.karur.karur-to-sivakasi');
})->name('karur-to-sivakasi');

Route::get('/karur-to-tenkasi-drop-taxi', function () {
    return view('layouts.karur.karur-to-tenkasi');
})->name('karur-to-tenkasi');

Route::get('/karur-to-thanjavur-drop-taxi', function () {
    return view('layouts.karur.karur-to-thanjavur');
})->name('karur-to-thanjavur');

Route::get('/karur-to-thiruvarur-drop-taxi', function () {
    return view('layouts.karur.karur-to-thiruvarur');
})->name('karur-to-thiruvarur');

Route::get('/karur-to-thoothukudi-drop-taxi', function () {
    return view('layouts.karur.karur-to-thoothukudi');
})->name('karur-to-thoothukudi');

Route::get('/karur-to-tiruppur-drop-taxi', function () {
    return view('layouts.karur.karur-to-tiruppur');
})->name('karur-to-tiruppur');

Route::get('/karur-to-trichy-drop-taxi', function () {
    return view('layouts.karur.karur-to-trichy');
})->name('karur-to-trichy');

Route::get('/karur-to-vellore-drop-taxi', function () {
    return view('layouts.karur.karur-to-vellore');
})->name('karur-to-vellore');

Route::get('/karur-to-virudhunagar-drop-taxi', function () {
    return view('layouts.karur.karur-to-virudhunagar');
})->name('karur-to-virudhunagar');

Route::get('/karur-to-salem-drop-taxi', function () {
    return view('layouts.karur.karur-to-salem');
})->name('karur-to-salem');

Route::get('/karur-to-tirunelveli-drop-taxi', function () {
    return view('layouts.karur.karur-to-tirunelveli');
})->name('karur-to-tirunelveli');

Route::get('/karur-to-kochi-drop-taxi', function () {
    return view('layouts.karur.karur-to-kochi');
})->name('karur-to-kochi');

Route::get('/karur-to-karaikal-drop-taxi', function () {
    return view('layouts.karur.karur-to-karaikal');
})->name('karur-to-karaikal');

Route::get('/karur-to-tirupati-drop-taxi', function () {
    return view('layouts.karur.karur-to-tirupati');
})->name('karur-to-tirupati');

Route::get('/karur-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.karur.karur-to-tiruvannamalai');
})->name('karur-to-tiruvannamalai');

Route::get('/karur-to-kerala-drop-taxi', function () {
    return view('layouts.karur.karur-to-kerala');
})->name('karur-to-kerala');

Route::get('/karur-to-ariyalur-drop-taxi', function () {
    return view('layouts.karur.karur-to-ariyalur');
})->name('karur-to-ariyalur');



Route::get('/krishnagiri-to-villupuram-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-villupuram');
})->name('krishnagiri-to-villupuram');

Route::get('/krishnagiri-to-chennai-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-chennai');
})->name('krishnagiri-to-chennai');

Route::get('/krishnagiri-to-puducherry-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-puducherry');
})->name('krishnagiri-to-puducherry');

Route::get('/krishnagiri-to-bangalore-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-bangalore');
})->name('krishnagiri-to-bangalore');

Route::get('/krishnagiri-to-cuddalore-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-cuddalore');
})->name('krishnagiri-to-cuddalore');

Route::get('/krishnagiri-to-madurai-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-madurai');
})->name('krishnagiri-to-madurai');

Route::get('/krishnagiri-to-erode-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-erode');
})->name('krishnagiri-to-erode');

Route::get('/krishnagiri-to-arakkonam-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-arakkonam');
})->name('krishnagiri-to-arakkonam');

Route::get('/krishnagiri-to-arani-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-arani');
})->name('krishnagiri-to-arani');

Route::get('/krishnagiri-to-chengalpattu-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-chengalpattu');
})->name('krishnagiri-to-chengalpattu');

Route::get('/krishnagiri-to-coimbatore-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-coimbatore');
})->name('krishnagiri-to-coimbatore');

Route::get('/krishnagiri-to-dharmapuri-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-dharmapuri');
})->name('krishnagiri-to-dharmapuri');

Route::get('/krishnagiri-to-dindigul-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-dindigul');
})->name('krishnagiri-to-dindigul');

Route::get('/krishnagiri-to-hosur-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-hosur');
})->name('krishnagiri-to-hosur');

Route::get('/krishnagiri-to-kanchipuram-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-kanchipuram');
})->name('krishnagiri-to-kanchipuram');

Route::get('/krishnagiri-to-karur-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-karur');
})->name('krishnagiri-to-karur');

Route::get('/krishnagiri-to-krishnagiri-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-krishnagiri');
})->name('krishnagiri-to-krishnagiri');

Route::get('/krishnagiri-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-mayiladuthurai');
})->name('krishnagiri-to-mayiladuthurai');

Route::get('/krishnagiri-to-nagapattinam-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-nagapattinam');
})->name('krishnagiri-to-nagapattinam');

Route::get('/krishnagiri-to-nagercoil-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-nagercoil');
})->name('krishnagiri-to-nagercoil');

Route::get('/krishnagiri-to-namakkal-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-namakkal');
})->name('krishnagiri-to-namakkal');

Route::get('/krishnagiri-to-perambalur-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-perambalur');
})->name('krishnagiri-to-perambalur');

Route::get('/krishnagiri-to-pudukkottai-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-pudukkottai');
})->name('krishnagiri-to-pudukkottai');

Route::get('/krishnagiri-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-ramanathapuram');
})->name('krishnagiri-to-ramanathapuram');

Route::get('/krishnagiri-to-ranipet-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-ranipet');
})->name('krishnagiri-to-ranipet');

Route::get('/krishnagiri-to-sivakasi-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-sivakasi');
})->name('krishnagiri-to-sivakasi');

Route::get('/krishnagiri-to-tenkasi-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-tenkasi');
})->name('krishnagiri-to-tenkasi');

Route::get('/krishnagiri-to-thanjavur-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-thanjavur');
})->name('krishnagiri-to-thanjavur');

Route::get('/krishnagiri-to-thiruvarur-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-thiruvarur');
})->name('krishnagiri-to-thiruvarur');

Route::get('/krishnagiri-to-thoothukudi-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-thoothukudi');
})->name('krishnagiri-to-thoothukudi');

Route::get('/krishnagiri-to-tiruppur-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-tiruppur');
})->name('krishnagiri-to-tiruppur');

Route::get('/krishnagiri-to-trichy-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-trichy');
})->name('krishnagiri-to-trichy');

Route::get('/krishnagiri-to-vellore-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-vellore');
})->name('krishnagiri-to-vellore');

Route::get('/krishnagiri-to-virudhunagar-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-virudhunagar');
})->name('krishnagiri-to-virudhunagar');

Route::get('/krishnagiri-to-salem-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-salem');
})->name('krishnagiri-to-salem');

Route::get('/krishnagiri-to-tirunelveli-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-tirunelveli');
})->name('krishnagiri-to-tirunelveli');

Route::get('/krishnagiri-to-kochi-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-kochi');
})->name('krishnagiri-to-kochi');

Route::get('/krishnagiri-to-karaikal-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-karaikal');
})->name('krishnagiri-to-karaikal');

Route::get('/krishnagiri-to-tirupati-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-tirupati');
})->name('krishnagiri-to-tirupati');

Route::get('/krishnagiri-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-tiruvannamalai');
})->name('krishnagiri-to-tiruvannamalai');

Route::get('/krishnagiri-to-kerala-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-kerala');
})->name('krishnagiri-to-kerala');

Route::get('/krishnagiri-to-ariyalur-drop-taxi', function () {
    return view('layouts.krishnagiri.krishnagiri-to-ariyalur');
})->name('krishnagiri-to-ariyalur');



Route::get('/madurai-to-villupuram-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-villupuram');
})->name('madurai-to-villupuram');

Route::get('/madurai-to-chennai-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-chennai');
})->name('madurai-to-chennai');

Route::get('/madurai-to-puducherry-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-puducherry');
})->name('madurai-to-puducherry');

Route::get('/madurai-to-bangalore-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-bangalore');
})->name('madurai-to-bangalore');

Route::get('/madurai-to-cuddalore-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-cuddalore');
})->name('madurai-to-cuddalore');

Route::get('/madurai-to-madurai-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-madurai');
})->name('madurai-to-madurai');

Route::get('/madurai-to-erode-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-erode');
})->name('madurai-to-erode');

Route::get('/madurai-to-arakkonam-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-arakkonam');
})->name('madurai-to-arakkonam');

Route::get('/madurai-to-arani-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-arani');
})->name('madurai-to-arani');

Route::get('/madurai-to-chengalpattu-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-chengalpattu');
})->name('madurai-to-chengalpattu');

Route::get('/madurai-to-coimbatore-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-coimbatore');
})->name('madurai-to-coimbatore');

Route::get('/madurai-to-dharmapuri-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-dharmapuri');
})->name('madurai-to-dharmapuri');

Route::get('/madurai-to-dindigul-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-dindigul');
})->name('madurai-to-dindigul');

Route::get('/madurai-to-hosur-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-hosur');
})->name('madurai-to-hosur');

Route::get('/madurai-to-kanchipuram-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-kanchipuram');
})->name('madurai-to-kanchipuram');

Route::get('/madurai-to-karur-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-karur');
})->name('madurai-to-karur');

Route::get('/madurai-to-krishnagiri-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-krishnagiri');
})->name('madurai-to-krishnagiri');

Route::get('/madurai-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-mayiladuthurai');
})->name('madurai-to-mayiladuthurai');

Route::get('/madurai-to-nagapattinam-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-nagapattinam');
})->name('madurai-to-nagapattinam');

Route::get('/madurai-to-nagercoil-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-nagercoil');
})->name('madurai-to-nagercoil');

Route::get('/madurai-to-namakkal-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-namakkal');
})->name('madurai-to-namakkal');

Route::get('/madurai-to-perambalur-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-perambalur');
})->name('madurai-to-perambalur');

Route::get('/madurai-to-pudukkottai-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-pudukkottai');
})->name('madurai-to-pudukkottai');

Route::get('/madurai-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-ramanathapuram');
})->name('madurai-to-ramanathapuram');

Route::get('/madurai-to-ranipet-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-ranipet');
})->name('madurai-to-ranipet');

Route::get('/madurai-to-sivakasi-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-sivakasi');
})->name('madurai-to-sivakasi');

Route::get('/madurai-to-tenkasi-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-tenkasi');
})->name('madurai-to-tenkasi');

Route::get('/madurai-to-thanjavur-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-thanjavur');
})->name('madurai-to-thanjavur');

Route::get('/madurai-to-thiruvarur-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-thiruvarur');
})->name('madurai-to-thiruvarur');

Route::get('/madurai-to-thoothukudi-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-thoothukudi');
})->name('madurai-to-thoothukudi');

Route::get('/madurai-to-tiruppur-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-tiruppur');
})->name('madurai-to-tiruppur');

Route::get('/madurai-to-trichy-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-trichy');
})->name('madurai-to-trichy');

Route::get('/madurai-to-vellore-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-vellore');
})->name('madurai-to-vellore');

Route::get('/madurai-to-virudhunagar-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-virudhunagar');
})->name('madurai-to-virudhunagar');

Route::get('/madurai-to-salem-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-salem');
})->name('madurai-to-salem');

Route::get('/madurai-to-tirunelveli-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-tirunelveli');
})->name('madurai-to-tirunelveli');

Route::get('/madurai-to-kochi-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-kochi');
})->name('madurai-to-kochi');

Route::get('/madurai-to-karaikal-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-karaikal');
})->name('madurai-to-karaikal');

Route::get('/madurai-to-tirupati-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-tirupati');
})->name('madurai-to-tirupati');

Route::get('/madurai-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-tiruvannamalai');
})->name('madurai-to-tiruvannamalai');

Route::get('/madurai-to-kerala-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-kerala');
})->name('madurai-to-kerala');

Route::get('/madurai-to-ariyalur-drop-taxi', function () {
    return view('layouts.madurai.madurai-to-ariyalur');
})->name('madurai-to-ariyalur');



Route::get('/mayiladuthurai-to-villupuram-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-villupuram');
})->name('mayiladuthurai-to-villupuram');

Route::get('/mayiladuthurai-to-chennai-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-chennai');
})->name('mayiladuthurai-to-chennai');

Route::get('/mayiladuthurai-to-puducherry-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-puducherry');
})->name('mayiladuthurai-to-puducherry');

Route::get('/mayiladuthurai-to-bangalore-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-bangalore');
})->name('mayiladuthurai-to-bangalore');

Route::get('/mayiladuthurai-to-cuddalore-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-cuddalore');
})->name('mayiladuthurai-to-cuddalore');

Route::get('/mayiladuthurai-to-madurai-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-madurai');
})->name('mayiladuthurai-to-madurai');

Route::get('/mayiladuthurai-to-erode-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-erode');
})->name('mayiladuthurai-to-erode');

Route::get('/mayiladuthurai-to-arakkonam-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-arakkonam');
})->name('mayiladuthurai-to-arakkonam');

Route::get('/mayiladuthurai-to-arani-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-arani');
})->name('mayiladuthurai-to-arani');

Route::get('/mayiladuthurai-to-chengalpattu-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-chengalpattu');
})->name('mayiladuthurai-to-chengalpattu');

Route::get('/mayiladuthurai-to-coimbatore-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-coimbatore');
})->name('mayiladuthurai-to-coimbatore');

Route::get('/mayiladuthurai-to-dharmapuri-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-dharmapuri');
})->name('mayiladuthurai-to-dharmapuri');

Route::get('/mayiladuthurai-to-dindigul-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-dindigul');
})->name('mayiladuthurai-to-dindigul');

Route::get('/mayiladuthurai-to-hosur-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-hosur');
})->name('mayiladuthurai-to-hosur');

Route::get('/mayiladuthurai-to-kanchipuram-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-kanchipuram');
})->name('mayiladuthurai-to-kanchipuram');

Route::get('/mayiladuthurai-to-karur-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-karur');
})->name('mayiladuthurai-to-karur');

Route::get('/mayiladuthurai-to-krishnagiri-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-krishnagiri');
})->name('mayiladuthurai-to-krishnagiri');

Route::get('/mayiladuthurai-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-mayiladuthurai');
})->name('mayiladuthurai-to-mayiladuthurai');

Route::get('/mayiladuthurai-to-nagapattinam-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-nagapattinam');
})->name('mayiladuthurai-to-nagapattinam');

Route::get('/mayiladuthurai-to-nagercoil-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-nagercoil');
})->name('mayiladuthurai-to-nagercoil');

Route::get('/mayiladuthurai-to-namakkal-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-namakkal');
})->name('mayiladuthurai-to-namakkal');

Route::get('/mayiladuthurai-to-perambalur-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-perambalur');
})->name('mayiladuthurai-to-perambalur');

Route::get('/mayiladuthurai-to-pudukkottai-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-pudukkottai');
})->name('mayiladuthurai-to-pudukkottai');

Route::get('/mayiladuthurai-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-ramanathapuram');
})->name('mayiladuthurai-to-ramanathapuram');

Route::get('/mayiladuthurai-to-ranipet-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-ranipet');
})->name('mayiladuthurai-to-ranipet');

Route::get('/mayiladuthurai-to-sivakasi-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-sivakasi');
})->name('mayiladuthurai-to-sivakasi');

Route::get('/mayiladuthurai-to-tenkasi-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-tenkasi');
})->name('mayiladuthurai-to-tenkasi');

Route::get('/mayiladuthurai-to-thanjavur-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-thanjavur');
})->name('mayiladuthurai-to-thanjavur');

Route::get('/mayiladuthurai-to-thiruvarur-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-thiruvarur');
})->name('mayiladuthurai-to-thiruvarur');

Route::get('/mayiladuthurai-to-thoothukudi-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-thoothukudi');
})->name('mayiladuthurai-to-thoothukudi');

Route::get('/mayiladuthurai-to-tiruppur-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-tiruppur');
})->name('mayiladuthurai-to-tiruppur');

Route::get('/mayiladuthurai-to-trichy-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-trichy');
})->name('mayiladuthurai-to-trichy');

Route::get('/mayiladuthurai-to-vellore-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-vellore');
})->name('mayiladuthurai-to-vellore');

Route::get('/mayiladuthurai-to-virudhunagar-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-virudhunagar');
})->name('mayiladuthurai-to-virudhunagar');

Route::get('/mayiladuthurai-to-salem-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-salem');
})->name('mayiladuthurai-to-salem');

Route::get('/mayiladuthurai-to-tirunelveli-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-tirunelveli');
})->name('mayiladuthurai-to-tirunelveli');

Route::get('/mayiladuthurai-to-kochi-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-kochi');
})->name('mayiladuthurai-to-kochi');

Route::get('/mayiladuthurai-to-karaikal-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-karaikal');
})->name('mayiladuthurai-to-karaikal');

Route::get('/mayiladuthurai-to-tirupati-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-tirupati');
})->name('mayiladuthurai-to-tirupati');

Route::get('/mayiladuthurai-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-tiruvannamalai');
})->name('mayiladuthurai-to-tiruvannamalai');

Route::get('/mayiladuthurai-to-kerala-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-kerala');
})->name('mayiladuthurai-to-kerala');

Route::get('/mayiladuthurai-to-ariyalur-drop-taxi', function () {
    return view('layouts.mayiladuthurai.mayiladuthurai-to-ariyalur');
})->name('mayiladuthurai-to-ariyalur');


Route::get('/nagapattinam-to-villupuram-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-villupuram');
})->name('nagapattinam-to-villupuram');

Route::get('/nagapattinam-to-chennai-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-chennai');
})->name('nagapattinam-to-chennai');

Route::get('/nagapattinam-to-puducherry-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-puducherry');
})->name('nagapattinam-to-puducherry');

Route::get('/nagapattinam-to-bangalore-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-bangalore');
})->name('nagapattinam-to-bangalore');

Route::get('/nagapattinam-to-cuddalore-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-cuddalore');
})->name('nagapattinam-to-cuddalore');

Route::get('/nagapattinam-to-madurai-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-madurai');
})->name('nagapattinam-to-madurai');

Route::get('/nagapattinam-to-erode-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-erode');
})->name('nagapattinam-to-erode');

Route::get('/nagapattinam-to-arakkonam-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-arakkonam');
})->name('nagapattinam-to-arakkonam');

Route::get('/nagapattinam-to-arani-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-arani');
})->name('nagapattinam-to-arani');

Route::get('/nagapattinam-to-chengalpattu-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-chengalpattu');
})->name('nagapattinam-to-chengalpattu');

Route::get('/nagapattinam-to-coimbatore-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-coimbatore');
})->name('nagapattinam-to-coimbatore');

Route::get('/nagapattinam-to-dharmapuri-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-dharmapuri');
})->name('nagapattinam-to-dharmapuri');

Route::get('/nagapattinam-to-dindigul-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-dindigul');
})->name('nagapattinam-to-dindigul');

Route::get('/nagapattinam-to-hosur-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-hosur');
})->name('nagapattinam-to-hosur');

Route::get('/nagapattinam-to-kanchipuram-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-kanchipuram');
})->name('nagapattinam-to-kanchipuram');

Route::get('/nagapattinam-to-karur-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-karur');
})->name('nagapattinam-to-karur');

Route::get('/nagapattinam-to-krishnagiri-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-krishnagiri');
})->name('nagapattinam-to-krishnagiri');

Route::get('/nagapattinam-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-mayiladuthurai');
})->name('nagapattinam-to-mayiladuthurai');

Route::get('/nagapattinam-to-nagapattinam-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-nagapattinam');
})->name('nagapattinam-to-nagapattinam');

Route::get('/nagapattinam-to-nagercoil-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-nagercoil');
})->name('nagapattinam-to-nagercoil');

Route::get('/nagapattinam-to-namakkal-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-namakkal');
})->name('nagapattinam-to-namakkal');

Route::get('/nagapattinam-to-perambalur-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-perambalur');
})->name('nagapattinam-to-perambalur');

Route::get('/nagapattinam-to-pudukkottai-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-pudukkottai');
})->name('nagapattinam-to-pudukkottai');

Route::get('/nagapattinam-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-ramanathapuram');
})->name('nagapattinam-to-ramanathapuram');

Route::get('/nagapattinam-to-ranipet-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-ranipet');
})->name('nagapattinam-to-ranipet');

Route::get('/nagapattinam-to-sivakasi-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-sivakasi');
})->name('nagapattinam-to-sivakasi');

Route::get('/nagapattinam-to-tenkasi-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-tenkasi');
})->name('nagapattinam-to-tenkasi');

Route::get('/nagapattinam-to-thanjavur-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-thanjavur');
})->name('nagapattinam-to-thanjavur');

Route::get('/nagapattinam-to-thiruvarur-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-thiruvarur');
})->name('nagapattinam-to-thiruvarur');

Route::get('/nagapattinam-to-thoothukudi-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-thoothukudi');
})->name('nagapattinam-to-thoothukudi');

Route::get('/nagapattinam-to-tiruppur-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-tiruppur');
})->name('nagapattinam-to-tiruppur');

Route::get('/nagapattinam-to-trichy-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-trichy');
})->name('nagapattinam-to-trichy');

Route::get('/nagapattinam-to-vellore-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-vellore');
})->name('nagapattinam-to-vellore');

Route::get('/nagapattinam-to-virudhunagar-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-virudhunagar');
})->name('nagapattinam-to-virudhunagar');

Route::get('/nagapattinam-to-salem-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-salem');
})->name('nagapattinam-to-salem');

Route::get('/nagapattinam-to-tirunelveli-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-tirunelveli');
})->name('nagapattinam-to-tirunelveli');

Route::get('/nagapattinam-to-kochi-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-kochi');
})->name('nagapattinam-to-kochi');

Route::get('/nagapattinam-to-karaikal-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-karaikal');
})->name('nagapattinam-to-karaikal');

Route::get('/nagapattinam-to-tirupati-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-tirupati');
})->name('nagapattinam-to-tirupati');

Route::get('/nagapattinam-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-tiruvannamalai');
})->name('nagapattinam-to-tiruvannamalai');

Route::get('/nagapattinam-to-kerala-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-kerala');
})->name('nagapattinam-to-kerala');

Route::get('/nagapattinam-to-ariyalur-drop-taxi', function () {
    return view('layouts.nagapattinam.nagapattinam-to-ariyalur');
})->name('nagapattinam-to-ariyalur');


Route::get('/nagercoil-to-villupuram-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-villupuram');
})->name('nagercoil-to-villupuram');

Route::get('/nagercoil-to-chennai-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-chennai');
})->name('nagercoil-to-chennai');

Route::get('/nagercoil-to-puducherry-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-puducherry');
})->name('nagercoil-to-puducherry');

Route::get('/nagercoil-to-bangalore-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-bangalore');
})->name('nagercoil-to-bangalore');

Route::get('/nagercoil-to-cuddalore-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-cuddalore');
})->name('nagercoil-to-cuddalore');

Route::get('/nagercoil-to-madurai-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-madurai');
})->name('nagercoil-to-madurai');

Route::get('/nagercoil-to-erode-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-erode');
})->name('nagercoil-to-erode');

Route::get('/nagercoil-to-arakkonam-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-arakkonam');
})->name('nagercoil-to-arakkonam');

Route::get('/nagercoil-to-arani-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-arani');
})->name('nagercoil-to-arani');

Route::get('/nagercoil-to-chengalpattu-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-chengalpattu');
})->name('nagercoil-to-chengalpattu');

Route::get('/nagercoil-to-coimbatore-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-coimbatore');
})->name('nagercoil-to-coimbatore');

Route::get('/nagercoil-to-dharmapuri-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-dharmapuri');
})->name('nagercoil-to-dharmapuri');

Route::get('/nagercoil-to-dindigul-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-dindigul');
})->name('nagercoil-to-dindigul');

Route::get('/nagercoil-to-hosur-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-hosur');
})->name('nagercoil-to-hosur');

Route::get('/nagercoil-to-kanchipuram-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-kanchipuram');
})->name('nagercoil-to-kanchipuram');

Route::get('/nagercoil-to-karur-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-karur');
})->name('nagercoil-to-karur');

Route::get('/nagercoil-to-krishnagiri-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-krishnagiri');
})->name('nagercoil-to-krishnagiri');

Route::get('/nagercoil-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-mayiladuthurai');
})->name('nagercoil-to-mayiladuthurai');

Route::get('/nagercoil-to-nagapattinam-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-nagapattinam');
})->name('nagercoil-to-nagapattinam');

Route::get('/nagercoil-to-nagercoil-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-nagercoil');
})->name('nagercoil-to-nagercoil');

Route::get('/nagercoil-to-namakkal-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-namakkal');
})->name('nagercoil-to-namakkal');

Route::get('/nagercoil-to-perambalur-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-perambalur');
})->name('nagercoil-to-perambalur');

Route::get('/nagercoil-to-pudukkottai-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-pudukkottai');
})->name('nagercoil-to-pudukkottai');

Route::get('/nagercoil-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-ramanathapuram');
})->name('nagercoil-to-ramanathapuram');

Route::get('/nagercoil-to-ranipet-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-ranipet');
})->name('nagercoil-to-ranipet');

Route::get('/nagercoil-to-sivakasi-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-sivakasi');
})->name('nagercoil-to-sivakasi');

Route::get('/nagercoil-to-tenkasi-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-tenkasi');
})->name('nagercoil-to-tenkasi');

Route::get('/nagercoil-to-thanjavur-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-thanjavur');
})->name('nagercoil-to-thanjavur');

Route::get('/nagercoil-to-thiruvarur-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-thiruvarur');
})->name('nagercoil-to-thiruvarur');

Route::get('/nagercoil-to-thoothukudi-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-thoothukudi');
})->name('nagercoil-to-thoothukudi');

Route::get('/nagercoil-to-tiruppur-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-tiruppur');
})->name('nagercoil-to-tiruppur');

Route::get('/nagercoil-to-trichy-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-trichy');
})->name('nagercoil-to-trichy');

Route::get('/nagercoil-to-vellore-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-vellore');
})->name('nagercoil-to-vellore');

Route::get('/nagercoil-to-virudhunagar-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-virudhunagar');
})->name('nagercoil-to-virudhunagar');

Route::get('/nagercoil-to-salem-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-salem');
})->name('nagercoil-to-salem');

Route::get('/nagercoil-to-tirunelveli-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-tirunelveli');
})->name('nagercoil-to-tirunelveli');

Route::get('/nagercoil-to-kochi-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-kochi');
})->name('nagercoil-to-kochi');

Route::get('/nagercoil-to-karaikal-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-karaikal');
})->name('nagercoil-to-karaikal');

Route::get('/nagercoil-to-tirupati-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-tirupati');
})->name('nagercoil-to-tirupati');

Route::get('/nagercoil-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-tiruvannamalai');
})->name('nagercoil-to-tiruvannamalai');

Route::get('/nagercoil-to-kerala-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-kerala');
})->name('nagercoil-to-kerala');

Route::get('/nagercoil-to-ariyalur-drop-taxi', function () {
    return view('layouts.nagercoil.nagercoil-to-ariyalur');
})->name('nagercoil-to-ariyalur');


Route::get('/namakkal-to-villupuram-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-villupuram');
})->name('namakkal-to-villupuram');

Route::get('/namakkal-to-chennai-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-chennai');
})->name('namakkal-to-chennai');

Route::get('/namakkal-to-puducherry-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-puducherry');
})->name('namakkal-to-puducherry');

Route::get('/namakkal-to-bangalore-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-bangalore');
})->name('namakkal-to-bangalore');

Route::get('/namakkal-to-cuddalore-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-cuddalore');
})->name('namakkal-to-cuddalore');

Route::get('/namakkal-to-madurai-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-madurai');
})->name('namakkal-to-madurai');

Route::get('/namakkal-to-erode-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-erode');
})->name('namakkal-to-erode');

Route::get('/namakkal-to-arakkonam-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-arakkonam');
})->name('namakkal-to-arakkonam');

Route::get('/namakkal-to-arani-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-arani');
})->name('namakkal-to-arani');

Route::get('/namakkal-to-chengalpattu-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-chengalpattu');
})->name('namakkal-to-chengalpattu');

Route::get('/namakkal-to-coimbatore-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-coimbatore');
})->name('namakkal-to-coimbatore');

Route::get('/namakkal-to-dharmapuri-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-dharmapuri');
})->name('namakkal-to-dharmapuri');

Route::get('/namakkal-to-dindigul-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-dindigul');
})->name('namakkal-to-dindigul');

Route::get('/namakkal-to-hosur-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-hosur');
})->name('namakkal-to-hosur');

Route::get('/namakkal-to-kanchipuram-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-kanchipuram');
})->name('namakkal-to-kanchipuram');

Route::get('/namakkal-to-karur-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-karur');
})->name('namakkal-to-karur');

Route::get('/namakkal-to-krishnagiri-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-krishnagiri');
})->name('namakkal-to-krishnagiri');

Route::get('/namakkal-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-mayiladuthurai');
})->name('namakkal-to-mayiladuthurai');

Route::get('/namakkal-to-nagapattinam-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-nagapattinam');
})->name('namakkal-to-nagapattinam');

Route::get('/namakkal-to-nagercoil-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-nagercoil');
})->name('namakkal-to-nagercoil');

Route::get('/namakkal-to-namakkal-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-namakkal');
})->name('namakkal-to-namakkal');

Route::get('/namakkal-to-perambalur-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-perambalur');
})->name('namakkal-to-perambalur');

Route::get('/namakkal-to-pudukkottai-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-pudukkottai');
})->name('namakkal-to-pudukkottai');

Route::get('/namakkal-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-ramanathapuram');
})->name('namakkal-to-ramanathapuram');

Route::get('/namakkal-to-ranipet-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-ranipet');
})->name('namakkal-to-ranipet');

Route::get('/namakkal-to-sivakasi-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-sivakasi');
})->name('namakkal-to-sivakasi');

Route::get('/namakkal-to-tenkasi-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-tenkasi');
})->name('namakkal-to-tenkasi');

Route::get('/namakkal-to-thanjavur-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-thanjavur');
})->name('namakkal-to-thanjavur');

Route::get('/namakkal-to-thiruvarur-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-thiruvarur');
})->name('namakkal-to-thiruvarur');

Route::get('/namakkal-to-thoothukudi-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-thoothukudi');
})->name('namakkal-to-thoothukudi');

Route::get('/namakkal-to-tiruppur-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-tiruppur');
})->name('namakkal-to-tiruppur');

Route::get('/namakkal-to-trichy-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-trichy');
})->name('namakkal-to-trichy');

Route::get('/namakkal-to-vellore-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-vellore');
})->name('namakkal-to-vellore');

Route::get('/namakkal-to-virudhunagar-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-virudhunagar');
})->name('namakkal-to-virudhunagar');

Route::get('/namakkal-to-salem-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-salem');
})->name('namakkal-to-salem');

Route::get('/namakkal-to-tirunelveli-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-tirunelveli');
})->name('namakkal-to-tirunelveli');

Route::get('/namakkal-to-kochi-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-kochi');
})->name('namakkal-to-kochi');

Route::get('/namakkal-to-karaikal-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-karaikal');
})->name('namakkal-to-karaikal');

Route::get('/namakkal-to-tirupati-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-tirupati');
})->name('namakkal-to-tirupati');

Route::get('/namakkal-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-tiruvannamalai');
})->name('namakkal-to-tiruvannamalai');

Route::get('/namakkal-to-kerala-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-kerala');
})->name('namakkal-to-kerala');

Route::get('/namakkal-to-ariyalur-drop-taxi', function () {
    return view('layouts.namakkal.namakkal-to-ariyalur');
})->name('namakkal-to-ariyalur');


Route::get('/perambalur-to-villupuram-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-villupuram');
})->name('perambalur-to-villupuram');

Route::get('/perambalur-to-chennai-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-chennai');
})->name('perambalur-to-chennai');

Route::get('/perambalur-to-puducherry-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-puducherry');
})->name('perambalur-to-puducherry');

Route::get('/perambalur-to-bangalore-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-bangalore');
})->name('perambalur-to-bangalore');

Route::get('/perambalur-to-cuddalore-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-cuddalore');
})->name('perambalur-to-cuddalore');

Route::get('/perambalur-to-madurai-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-madurai');
})->name('perambalur-to-madurai');

Route::get('/perambalur-to-erode-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-erode');
})->name('perambalur-to-erode');

Route::get('/perambalur-to-arakkonam-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-arakkonam');
})->name('perambalur-to-arakkonam');

Route::get('/perambalur-to-arani-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-arani');
})->name('perambalur-to-arani');

Route::get('/perambalur-to-chengalpattu-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-chengalpattu');
})->name('perambalur-to-chengalpattu');

Route::get('/perambalur-to-coimbatore-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-coimbatore');
})->name('perambalur-to-coimbatore');

Route::get('/perambalur-to-dharmapuri-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-dharmapuri');
})->name('perambalur-to-dharmapuri');

Route::get('/perambalur-to-dindigul-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-dindigul');
})->name('perambalur-to-dindigul');

Route::get('/perambalur-to-hosur-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-hosur');
})->name('perambalur-to-hosur');

Route::get('/perambalur-to-kanchipuram-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-kanchipuram');
})->name('perambalur-to-kanchipuram');

Route::get('/perambalur-to-karur-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-karur');
})->name('perambalur-to-karur');

Route::get('/perambalur-to-krishnagiri-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-krishnagiri');
})->name('perambalur-to-krishnagiri');

Route::get('/perambalur-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-mayiladuthurai');
})->name('perambalur-to-mayiladuthurai');

Route::get('/perambalur-to-nagapattinam-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-nagapattinam');
})->name('perambalur-to-nagapattinam');

Route::get('/perambalur-to-nagercoil-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-nagercoil');
})->name('perambalur-to-nagercoil');

Route::get('/perambalur-to-namakkal-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-namakkal');
})->name('perambalur-to-namakkal');

Route::get('/perambalur-to-perambalur-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-perambalur');
})->name('perambalur-to-perambalur');

Route::get('/perambalur-to-pudukkottai-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-pudukkottai');
})->name('perambalur-to-pudukkottai');

Route::get('/perambalur-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-ramanathapuram');
})->name('perambalur-to-ramanathapuram');

Route::get('/perambalur-to-ranipet-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-ranipet');
})->name('perambalur-to-ranipet');

Route::get('/perambalur-to-sivakasi-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-sivakasi');
})->name('perambalur-to-sivakasi');

Route::get('/perambalur-to-tenkasi-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-tenkasi');
})->name('perambalur-to-tenkasi');

Route::get('/perambalur-to-thanjavur-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-thanjavur');
})->name('perambalur-to-thanjavur');

Route::get('/perambalur-to-thiruvarur-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-thiruvarur');
})->name('perambalur-to-thiruvarur');

Route::get('/perambalur-to-thoothukudi-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-thoothukudi');
})->name('perambalur-to-thoothukudi');

Route::get('/perambalur-to-tiruppur-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-tiruppur');
})->name('perambalur-to-tiruppur');

Route::get('/perambalur-to-trichy-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-trichy');
})->name('perambalur-to-trichy');

Route::get('/perambalur-to-vellore-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-vellore');
})->name('perambalur-to-vellore');

Route::get('/perambalur-to-virudhunagar-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-virudhunagar');
})->name('perambalur-to-virudhunagar');

Route::get('/perambalur-to-salem-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-salem');
})->name('perambalur-to-salem');

Route::get('/perambalur-to-tirunelveli-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-tirunelveli');
})->name('perambalur-to-tirunelveli');

Route::get('/perambalur-to-kochi-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-kochi');
})->name('perambalur-to-kochi');

Route::get('/perambalur-to-karaikal-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-karaikal');
})->name('perambalur-to-karaikal');

Route::get('/perambalur-to-tirupati-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-tirupati');
})->name('perambalur-to-tirupati');

Route::get('/perambalur-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-tiruvannamalai');
})->name('perambalur-to-tiruvannamalai');

Route::get('/perambalur-to-kerala-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-kerala');
})->name('perambalur-to-kerala');

Route::get('/perambalur-to-ariyalur-drop-taxi', function () {
    return view('layouts.perambalur.perambalur-to-ariyalur');
})->name('perambalur-to-ariyalur');


Route::get('/pudukkottai-to-villupuram-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-villupuram');
})->name('pudukkottai-to-villupuram');

Route::get('/pudukkottai-to-chennai-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-chennai');
})->name('pudukkottai-to-chennai');

Route::get('/pudukkottai-to-puducherry-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-puducherry');
})->name('pudukkottai-to-puducherry');

Route::get('/pudukkottai-to-bangalore-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-bangalore');
})->name('pudukkottai-to-bangalore');

Route::get('/pudukkottai-to-cuddalore-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-cuddalore');
})->name('pudukkottai-to-cuddalore');

Route::get('/pudukkottai-to-madurai-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-madurai');
})->name('pudukkottai-to-madurai');

Route::get('/pudukkottai-to-erode-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-erode');
})->name('pudukkottai-to-erode');

Route::get('/pudukkottai-to-arakkonam-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-arakkonam');
})->name('pudukkottai-to-arakkonam');

Route::get('/pudukkottai-to-arani-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-arani');
})->name('pudukkottai-to-arani');

Route::get('/pudukkottai-to-chengalpattu-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-chengalpattu');
})->name('pudukkottai-to-chengalpattu');

Route::get('/pudukkottai-to-coimbatore-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-coimbatore');
})->name('pudukkottai-to-coimbatore');

Route::get('/pudukkottai-to-dharmapuri-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-dharmapuri');
})->name('pudukkottai-to-dharmapuri');

Route::get('/pudukkottai-to-dindigul-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-dindigul');
})->name('pudukkottai-to-dindigul');

Route::get('/pudukkottai-to-hosur-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-hosur');
})->name('pudukkottai-to-hosur');

Route::get('/pudukkottai-to-kanchipuram-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-kanchipuram');
})->name('pudukkottai-to-kanchipuram');

Route::get('/pudukkottai-to-karur-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-karur');
})->name('pudukkottai-to-karur');

Route::get('/pudukkottai-to-krishnagiri-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-krishnagiri');
})->name('pudukkottai-to-krishnagiri');

Route::get('/pudukkottai-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-mayiladuthurai');
})->name('pudukkottai-to-mayiladuthurai');

Route::get('/pudukkottai-to-nagapattinam-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-nagapattinam');
})->name('pudukkottai-to-nagapattinam');

Route::get('/pudukkottai-to-nagercoil-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-nagercoil');
})->name('pudukkottai-to-nagercoil');

Route::get('/pudukkottai-to-namakkal-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-namakkal');
})->name('pudukkottai-to-namakkal');

Route::get('/pudukkottai-to-perambalur-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-perambalur');
})->name('pudukkottai-to-perambalur');

Route::get('/pudukkottai-to-pudukkottai-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-pudukkottai');
})->name('pudukkottai-to-pudukkottai');

Route::get('/pudukkottai-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-ramanathapuram');
})->name('pudukkottai-to-ramanathapuram');

Route::get('/pudukkottai-to-ranipet-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-ranipet');
})->name('pudukkottai-to-ranipet');

Route::get('/pudukkottai-to-sivakasi-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-sivakasi');
})->name('pudukkottai-to-sivakasi');

Route::get('/pudukkottai-to-tenkasi-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-tenkasi');
})->name('pudukkottai-to-tenkasi');

Route::get('/pudukkottai-to-thanjavur-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-thanjavur');
})->name('pudukkottai-to-thanjavur');

Route::get('/pudukkottai-to-thiruvarur-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-thiruvarur');
})->name('pudukkottai-to-thiruvarur');

Route::get('/pudukkottai-to-thoothukudi-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-thoothukudi');
})->name('pudukkottai-to-thoothukudi');

Route::get('/pudukkottai-to-tiruppur-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-tiruppur');
})->name('pudukkottai-to-tiruppur');

Route::get('/pudukkottai-to-trichy-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-trichy');
})->name('pudukkottai-to-trichy');

Route::get('/pudukkottai-to-vellore-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-vellore');
})->name('pudukkottai-to-vellore');

Route::get('/pudukkottai-to-virudhunagar-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-virudhunagar');
})->name('pudukkottai-to-virudhunagar');

Route::get('/pudukkottai-to-salem-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-salem');
})->name('pudukkottai-to-salem');

Route::get('/pudukkottai-to-tirunelveli-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-tirunelveli');
})->name('pudukkottai-to-tirunelveli');

Route::get('/pudukkottai-to-kochi-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-kochi');
})->name('pudukkottai-to-kochi');

Route::get('/pudukkottai-to-karaikal-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-karaikal');
})->name('pudukkottai-to-karaikal');

Route::get('/pudukkottai-to-tirupati-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-tirupati');
})->name('pudukkottai-to-tirupati');

Route::get('/pudukkottai-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-tiruvannamalai');
})->name('pudukkottai-to-tiruvannamalai');

Route::get('/pudukkottai-to-kerala-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-kerala');
})->name('pudukkottai-to-kerala');

Route::get('/pudukkottai-to-ariyalur-drop-taxi', function () {
    return view('layouts.pudukkottai.pudukkottai-to-ariyalur');
})->name('pudukkottai-to-ariyalur');


Route::get('/ramanathapuram-to-villupuram-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-villupuram');
})->name('ramanathapuram-to-villupuram');

Route::get('/ramanathapuram-to-chennai-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-chennai');
})->name('ramanathapuram-to-chennai');

Route::get('/ramanathapuram-to-puducherry-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-puducherry');
})->name('ramanathapuram-to-puducherry');

Route::get('/ramanathapuram-to-bangalore-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-bangalore');
})->name('ramanathapuram-to-bangalore');

Route::get('/ramanathapuram-to-cuddalore-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-cuddalore');
})->name('ramanathapuram-to-cuddalore');

Route::get('/ramanathapuram-to-madurai-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-madurai');
})->name('ramanathapuram-to-madurai');

Route::get('/ramanathapuram-to-erode-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-erode');
})->name('ramanathapuram-to-erode');

Route::get('/ramanathapuram-to-arakkonam-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-arakkonam');
})->name('ramanathapuram-to-arakkonam');

Route::get('/ramanathapuram-to-arani-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-arani');
})->name('ramanathapuram-to-arani');

Route::get('/ramanathapuram-to-chengalpattu-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-chengalpattu');
})->name('ramanathapuram-to-chengalpattu');

Route::get('/ramanathapuram-to-coimbatore-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-coimbatore');
})->name('ramanathapuram-to-coimbatore');

Route::get('/ramanathapuram-to-dharmapuri-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-dharmapuri');
})->name('ramanathapuram-to-dharmapuri');

Route::get('/ramanathapuram-to-dindigul-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-dindigul');
})->name('ramanathapuram-to-dindigul');

Route::get('/ramanathapuram-to-hosur-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-hosur');
})->name('ramanathapuram-to-hosur');

Route::get('/ramanathapuram-to-kanchipuram-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-kanchipuram');
})->name('ramanathapuram-to-kanchipuram');

Route::get('/ramanathapuram-to-karur-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-karur');
})->name('ramanathapuram-to-karur');

Route::get('/ramanathapuram-to-krishnagiri-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-krishnagiri');
})->name('ramanathapuram-to-krishnagiri');

Route::get('/ramanathapuram-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-mayiladuthurai');
})->name('ramanathapuram-to-mayiladuthurai');

Route::get('/ramanathapuram-to-nagapattinam-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-nagapattinam');
})->name('ramanathapuram-to-nagapattinam');

Route::get('/ramanathapuram-to-nagercoil-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-nagercoil');
})->name('ramanathapuram-to-nagercoil');

Route::get('/ramanathapuram-to-namakkal-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-namakkal');
})->name('ramanathapuram-to-namakkal');

Route::get('/ramanathapuram-to-perambalur-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-perambalur');
})->name('ramanathapuram-to-perambalur');

Route::get('/ramanathapuram-to-pudukkottai-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-pudukkottai');
})->name('ramanathapuram-to-pudukkottai');

Route::get('/ramanathapuram-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-ramanathapuram');
})->name('ramanathapuram-to-ramanathapuram');

Route::get('/ramanathapuram-to-ranipet-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-ranipet');
})->name('ramanathapuram-to-ranipet');

Route::get('/ramanathapuram-to-sivakasi-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-sivakasi');
})->name('ramanathapuram-to-sivakasi');

Route::get('/ramanathapuram-to-tenkasi-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-tenkasi');
})->name('ramanathapuram-to-tenkasi');

Route::get('/ramanathapuram-to-thanjavur-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-thanjavur');
})->name('ramanathapuram-to-thanjavur');

Route::get('/ramanathapuram-to-thiruvarur-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-thiruvarur');
})->name('ramanathapuram-to-thiruvarur');

Route::get('/ramanathapuram-to-thoothukudi-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-thoothukudi');
})->name('ramanathapuram-to-thoothukudi');

Route::get('/ramanathapuram-to-tiruppur-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-tiruppur');
})->name('ramanathapuram-to-tiruppur');

Route::get('/ramanathapuram-to-trichy-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-trichy');
})->name('ramanathapuram-to-trichy');

Route::get('/ramanathapuram-to-vellore-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-vellore');
})->name('ramanathapuram-to-vellore');

Route::get('/ramanathapuram-to-virudhunagar-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-virudhunagar');
})->name('ramanathapuram-to-virudhunagar');

Route::get('/ramanathapuram-to-salem-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-salem');
})->name('ramanathapuram-to-salem');

Route::get('/ramanathapuram-to-tirunelveli-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-tirunelveli');
})->name('ramanathapuram-to-tirunelveli');

Route::get('/ramanathapuram-to-kochi-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-kochi');
})->name('ramanathapuram-to-kochi');

Route::get('/ramanathapuram-to-karaikal-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-karaikal');
})->name('ramanathapuram-to-karaikal');

Route::get('/ramanathapuram-to-tirupati-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-tirupati');
})->name('ramanathapuram-to-tirupati');

Route::get('/ramanathapuram-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-tiruvannamalai');
})->name('ramanathapuram-to-tiruvannamalai');

Route::get('/ramanathapuram-to-kerala-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-kerala');
})->name('ramanathapuram-to-kerala');

Route::get('/ramanathapuram-to-ariyalur-drop-taxi', function () {
    return view('layouts.ramanathapuram.ramanathapuram-to-ariyalur');
})->name('ramanathapuram-to-ariyalur');


Route::get('/ranipet-to-villupuram-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-villupuram');
})->name('ranipet-to-villupuram');

Route::get('/ranipet-to-chennai-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-chennai');
})->name('ranipet-to-chennai');

Route::get('/ranipet-to-puducherry-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-puducherry');
})->name('ranipet-to-puducherry');

Route::get('/ranipet-to-bangalore-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-bangalore');
})->name('ranipet-to-bangalore');

Route::get('/ranipet-to-cuddalore-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-cuddalore');
})->name('ranipet-to-cuddalore');

Route::get('/ranipet-to-madurai-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-madurai');
})->name('ranipet-to-madurai');

Route::get('/ranipet-to-erode-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-erode');
})->name('ranipet-to-erode');

Route::get('/ranipet-to-arakkonam-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-arakkonam');
})->name('ranipet-to-arakkonam');

Route::get('/ranipet-to-arani-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-arani');
})->name('ranipet-to-arani');

Route::get('/ranipet-to-chengalpattu-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-chengalpattu');
})->name('ranipet-to-chengalpattu');

Route::get('/ranipet-to-coimbatore-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-coimbatore');
})->name('ranipet-to-coimbatore');

Route::get('/ranipet-to-dharmapuri-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-dharmapuri');
})->name('ranipet-to-dharmapuri');

Route::get('/ranipet-to-dindigul-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-dindigul');
})->name('ranipet-to-dindigul');

Route::get('/ranipet-to-hosur-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-hosur');
})->name('ranipet-to-hosur');

Route::get('/ranipet-to-kanchipuram-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-kanchipuram');
})->name('ranipet-to-kanchipuram');

Route::get('/ranipet-to-karur-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-karur');
})->name('ranipet-to-karur');

Route::get('/ranipet-to-krishnagiri-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-krishnagiri');
})->name('ranipet-to-krishnagiri');

Route::get('/ranipet-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-mayiladuthurai');
})->name('ranipet-to-mayiladuthurai');

Route::get('/ranipet-to-nagapattinam-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-nagapattinam');
})->name('ranipet-to-nagapattinam');

Route::get('/ranipet-to-nagercoil-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-nagercoil');
})->name('ranipet-to-nagercoil');

Route::get('/ranipet-to-namakkal-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-namakkal');
})->name('ranipet-to-namakkal');

Route::get('/ranipet-to-perambalur-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-perambalur');
})->name('ranipet-to-perambalur');

Route::get('/ranipet-to-pudukkottai-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-pudukkottai');
})->name('ranipet-to-pudukkottai');

Route::get('/ranipet-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-ramanathapuram');
})->name('ranipet-to-ramanathapuram');

Route::get('/ranipet-to-ranipet-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-ranipet');
})->name('ranipet-to-ranipet');

Route::get('/ranipet-to-sivakasi-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-sivakasi');
})->name('ranipet-to-sivakasi');

Route::get('/ranipet-to-tenkasi-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-tenkasi');
})->name('ranipet-to-tenkasi');

Route::get('/ranipet-to-thanjavur-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-thanjavur');
})->name('ranipet-to-thanjavur');

Route::get('/ranipet-to-thiruvarur-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-thiruvarur');
})->name('ranipet-to-thiruvarur');

Route::get('/ranipet-to-thoothukudi-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-thoothukudi');
})->name('ranipet-to-thoothukudi');

Route::get('/ranipet-to-tiruppur-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-tiruppur');
})->name('ranipet-to-tiruppur');

Route::get('/ranipet-to-trichy-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-trichy');
})->name('ranipet-to-trichy');

Route::get('/ranipet-to-vellore-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-vellore');
})->name('ranipet-to-vellore');

Route::get('/ranipet-to-virudhunagar-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-virudhunagar');
})->name('ranipet-to-virudhunagar');

Route::get('/ranipet-to-salem-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-salem');
})->name('ranipet-to-salem');

Route::get('/ranipet-to-tirunelveli-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-tirunelveli');
})->name('ranipet-to-tirunelveli');

Route::get('/ranipet-to-kochi-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-kochi');
})->name('ranipet-to-kochi');

Route::get('/ranipet-to-karaikal-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-karaikal');
})->name('ranipet-to-karaikal');

Route::get('/ranipet-to-tirupati-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-tirupati');
})->name('ranipet-to-tirupati');

Route::get('/ranipet-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-tiruvannamalai');
})->name('ranipet-to-tiruvannamalai');

Route::get('/ranipet-to-kerala-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-kerala');
})->name('ranipet-to-kerala');

Route::get('/ranipet-to-ariyalur-drop-taxi', function () {
    return view('layouts.ranipet.ranipet-to-ariyalur');
})->name('ranipet-to-ariyalur');



Route::get('/salem-to-villupuram-drop-taxi', function () {
    return view('layouts.salem.salem-to-villupuram');
})->name('salem-to-villupuram');

Route::get('/salem-to-chennai-drop-taxi', function () {
    return view('layouts.salem.salem-to-chennai');
})->name('salem-to-chennai');

Route::get('/salem-to-puducherry-drop-taxi', function () {
    return view('layouts.salem.salem-to-puducherry');
})->name('salem-to-puducherry');

Route::get('/salem-to-bangalore-drop-taxi', function () {
    return view('layouts.salem.salem-to-bangalore');
})->name('salem-to-bangalore');

Route::get('/salem-to-cuddalore-drop-taxi', function () {
    return view('layouts.salem.salem-to-cuddalore');
})->name('salem-to-cuddalore');

Route::get('/salem-to-madurai-drop-taxi', function () {
    return view('layouts.salem.salem-to-madurai');
})->name('salem-to-madurai');

Route::get('/salem-to-erode-drop-taxi', function () {
    return view('layouts.salem.salem-to-erode');
})->name('salem-to-erode');

Route::get('/salem-to-arakkonam-drop-taxi', function () {
    return view('layouts.salem.salem-to-arakkonam');
})->name('salem-to-arakkonam');

Route::get('/salem-to-arani-drop-taxi', function () {
    return view('layouts.salem.salem-to-arani');
})->name('salem-to-arani');

Route::get('/salem-to-chengalpattu-drop-taxi', function () {
    return view('layouts.salem.salem-to-chengalpattu');
})->name('salem-to-chengalpattu');

Route::get('/salem-to-coimbatore-drop-taxi', function () {
    return view('layouts.salem.salem-to-coimbatore');
})->name('salem-to-coimbatore');

Route::get('/salem-to-dharmapuri-drop-taxi', function () {
    return view('layouts.salem.salem-to-dharmapuri');
})->name('salem-to-dharmapuri');

Route::get('/salem-to-dindigul-drop-taxi', function () {
    return view('layouts.salem.salem-to-dindigul');
})->name('salem-to-dindigul');

Route::get('/salem-to-hosur-drop-taxi', function () {
    return view('layouts.salem.salem-to-hosur');
})->name('salem-to-hosur');

Route::get('/salem-to-kanchipuram-drop-taxi', function () {
    return view('layouts.salem.salem-to-kanchipuram');
})->name('salem-to-kanchipuram');

Route::get('/salem-to-karur-drop-taxi', function () {
    return view('layouts.salem.salem-to-karur');
})->name('salem-to-karur');

Route::get('/salem-to-krishnagiri-drop-taxi', function () {
    return view('layouts.salem.salem-to-krishnagiri');
})->name('salem-to-krishnagiri');

Route::get('/salem-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.salem.salem-to-mayiladuthurai');
})->name('salem-to-mayiladuthurai');

Route::get('/salem-to-nagapattinam-drop-taxi', function () {
    return view('layouts.salem.salem-to-nagapattinam');
})->name('salem-to-nagapattinam');

Route::get('/salem-to-nagercoil-drop-taxi', function () {
    return view('layouts.salem.salem-to-nagercoil');
})->name('salem-to-nagercoil');

Route::get('/salem-to-namakkal-drop-taxi', function () {
    return view('layouts.salem.salem-to-namakkal');
})->name('salem-to-namakkal');

Route::get('/salem-to-perambalur-drop-taxi', function () {
    return view('layouts.salem.salem-to-perambalur');
})->name('salem-to-perambalur');

Route::get('/salem-to-pudukkottai-drop-taxi', function () {
    return view('layouts.salem.salem-to-pudukkottai');
})->name('salem-to-pudukkottai');

Route::get('/salem-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.salem.salem-to-ramanathapuram');
})->name('salem-to-ramanathapuram');

Route::get('/salem-to-ranipet-drop-taxi', function () {
    return view('layouts.salem.salem-to-ranipet');
})->name('salem-to-ranipet');

Route::get('/salem-to-sivakasi-drop-taxi', function () {
    return view('layouts.salem.salem-to-sivakasi');
})->name('salem-to-sivakasi');

Route::get('/salem-to-tenkasi-drop-taxi', function () {
    return view('layouts.salem.salem-to-tenkasi');
})->name('salem-to-tenkasi');

Route::get('/salem-to-thanjavur-drop-taxi', function () {
    return view('layouts.salem.salem-to-thanjavur');
})->name('salem-to-thanjavur');

Route::get('/salem-to-thiruvarur-drop-taxi', function () {
    return view('layouts.salem.salem-to-thiruvarur');
})->name('salem-to-thiruvarur');

Route::get('/salem-to-thoothukudi-drop-taxi', function () {
    return view('layouts.salem.salem-to-thoothukudi');
})->name('salem-to-thoothukudi');

Route::get('/salem-to-tiruppur-drop-taxi', function () {
    return view('layouts.salem.salem-to-tiruppur');
})->name('salem-to-tiruppur');

Route::get('/salem-to-trichy-drop-taxi', function () {
    return view('layouts.salem.salem-to-trichy');
})->name('salem-to-trichy');

Route::get('/salem-to-vellore-drop-taxi', function () {
    return view('layouts.salem.salem-to-vellore');
})->name('salem-to-vellore');

Route::get('/salem-to-virudhunagar-drop-taxi', function () {
    return view('layouts.salem.salem-to-virudhunagar');
})->name('salem-to-virudhunagar');

Route::get('/salem-to-salem-drop-taxi', function () {
    return view('layouts.salem.salem-to-salem');
})->name('salem-to-salem');

Route::get('/salem-to-tirunelveli-drop-taxi', function () {
    return view('layouts.salem.salem-to-tirunelveli');
})->name('salem-to-tirunelveli');

Route::get('/salem-to-kochi-drop-taxi', function () {
    return view('layouts.salem.salem-to-kochi');
})->name('salem-to-kochi');

Route::get('/salem-to-karaikal-drop-taxi', function () {
    return view('layouts.salem.salem-to-karaikal');
})->name('salem-to-karaikal');

Route::get('/salem-to-tirupati-drop-taxi', function () {
    return view('layouts.salem.salem-to-tirupati');
})->name('salem-to-tirupati');

Route::get('/salem-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.salem.salem-to-tiruvannamalai');
})->name('salem-to-tiruvannamalai');

Route::get('/salem-to-kerala-drop-taxi', function () {
    return view('layouts.salem.salem-to-kerala');
})->name('salem-to-kerala');

Route::get('/salem-to-ariyalur-drop-taxi', function () {
    return view('layouts.salem.salem-to-ariyalur');
})->name('salem-to-ariyalur');


Route::get('/sivakasi-to-villupuram-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-villupuram');
})->name('sivakasi-to-villupuram');

Route::get('/sivakasi-to-chennai-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-chennai');
})->name('sivakasi-to-chennai');

Route::get('/sivakasi-to-puducherry-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-puducherry');
})->name('sivakasi-to-puducherry');

Route::get('/sivakasi-to-bangalore-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-bangalore');
})->name('sivakasi-to-bangalore');

Route::get('/sivakasi-to-cuddalore-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-cuddalore');
})->name('sivakasi-to-cuddalore');

Route::get('/sivakasi-to-madurai-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-madurai');
})->name('sivakasi-to-madurai');

Route::get('/sivakasi-to-erode-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-erode');
})->name('sivakasi-to-erode');

Route::get('/sivakasi-to-arakkonam-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-arakkonam');
})->name('sivakasi-to-arakkonam');

Route::get('/sivakasi-to-arani-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-arani');
})->name('sivakasi-to-arani');

Route::get('/sivakasi-to-chengalpattu-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-chengalpattu');
})->name('sivakasi-to-chengalpattu');

Route::get('/sivakasi-to-coimbatore-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-coimbatore');
})->name('sivakasi-to-coimbatore');

Route::get('/sivakasi-to-dharmapuri-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-dharmapuri');
})->name('sivakasi-to-dharmapuri');

Route::get('/sivakasi-to-dindigul-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-dindigul');
})->name('sivakasi-to-dindigul');

Route::get('/sivakasi-to-hosur-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-hosur');
})->name('sivakasi-to-hosur');

Route::get('/sivakasi-to-kanchipuram-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-kanchipuram');
})->name('sivakasi-to-kanchipuram');

Route::get('/sivakasi-to-karur-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-karur');
})->name('sivakasi-to-karur');

Route::get('/sivakasi-to-krishnagiri-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-krishnagiri');
})->name('sivakasi-to-krishnagiri');

Route::get('/sivakasi-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-mayiladuthurai');
})->name('sivakasi-to-mayiladuthurai');

Route::get('/sivakasi-to-nagapattinam-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-nagapattinam');
})->name('sivakasi-to-nagapattinam');

Route::get('/sivakasi-to-nagercoil-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-nagercoil');
})->name('sivakasi-to-nagercoil');

Route::get('/sivakasi-to-namakkal-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-namakkal');
})->name('sivakasi-to-namakkal');

Route::get('/sivakasi-to-perambalur-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-perambalur');
})->name('sivakasi-to-perambalur');

Route::get('/sivakasi-to-pudukkottai-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-pudukkottai');
})->name('sivakasi-to-pudukkottai');

Route::get('/sivakasi-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-ramanathapuram');
})->name('sivakasi-to-ramanathapuram');

Route::get('/sivakasi-to-ranipet-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-ranipet');
})->name('sivakasi-to-ranipet');

Route::get('/sivakasi-to-sivakasi-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-sivakasi');
})->name('sivakasi-to-sivakasi');

Route::get('/sivakasi-to-tenkasi-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-tenkasi');
})->name('sivakasi-to-tenkasi');

Route::get('/sivakasi-to-thanjavur-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-thanjavur');
})->name('sivakasi-to-thanjavur');

Route::get('/sivakasi-to-thiruvarur-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-thiruvarur');
})->name('sivakasi-to-thiruvarur');

Route::get('/sivakasi-to-thoothukudi-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-thoothukudi');
})->name('sivakasi-to-thoothukudi');

Route::get('/sivakasi-to-tiruppur-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-tiruppur');
})->name('sivakasi-to-tiruppur');

Route::get('/sivakasi-to-trichy-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-trichy');
})->name('sivakasi-to-trichy');

Route::get('/sivakasi-to-vellore-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-vellore');
})->name('sivakasi-to-vellore');

Route::get('/sivakasi-to-virudhunagar-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-virudhunagar');
})->name('sivakasi-to-virudhunagar');

Route::get('/sivakasi-to-salem-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-salem');
})->name('sivakasi-to-salem');

Route::get('/sivakasi-to-tirunelveli-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-tirunelveli');
})->name('sivakasi-to-tirunelveli');

Route::get('/sivakasi-to-kochi-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-kochi');
})->name('sivakasi-to-kochi');

Route::get('/sivakasi-to-karaikal-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-karaikal');
})->name('sivakasi-to-karaikal');

Route::get('/sivakasi-to-tirupati-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-tirupati');
})->name('sivakasi-to-tirupati');

Route::get('/sivakasi-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-tiruvannamalai');
})->name('sivakasi-to-tiruvannamalai');

Route::get('/sivakasi-to-kerala-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-kerala');
})->name('sivakasi-to-kerala');

Route::get('/sivakasi-to-ariyalur-drop-taxi', function () {
    return view('layouts.sivakasi.sivakasi-to-ariyalur');
})->name('sivakasi-to-ariyalur');



Route::get('/tenkasi-to-villupuram-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-villupuram');
})->name('tenkasi-to-villupuram');

Route::get('/tenkasi-to-chennai-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-chennai');
})->name('tenkasi-to-chennai');

Route::get('/tenkasi-to-puducherry-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-puducherry');
})->name('tenkasi-to-puducherry');

Route::get('/tenkasi-to-bangalore-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-bangalore');
})->name('tenkasi-to-bangalore');

Route::get('/tenkasi-to-cuddalore-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-cuddalore');
})->name('tenkasi-to-cuddalore');

Route::get('/tenkasi-to-madurai-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-madurai');
})->name('tenkasi-to-madurai');

Route::get('/tenkasi-to-erode-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-erode');
})->name('tenkasi-to-erode');

Route::get('/tenkasi-to-arakkonam-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-arakkonam');
})->name('tenkasi-to-arakkonam');

Route::get('/tenkasi-to-arani-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-arani');
})->name('tenkasi-to-arani');

Route::get('/tenkasi-to-chengalpattu-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-chengalpattu');
})->name('tenkasi-to-chengalpattu');

Route::get('/tenkasi-to-coimbatore-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-coimbatore');
})->name('tenkasi-to-coimbatore');

Route::get('/tenkasi-to-dharmapuri-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-dharmapuri');
})->name('tenkasi-to-dharmapuri');

Route::get('/tenkasi-to-dindigul-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-dindigul');
})->name('tenkasi-to-dindigul');

Route::get('/tenkasi-to-hosur-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-hosur');
})->name('tenkasi-to-hosur');

Route::get('/tenkasi-to-kanchipuram-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-kanchipuram');
})->name('tenkasi-to-kanchipuram');

Route::get('/tenkasi-to-karur-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-karur');
})->name('tenkasi-to-karur');

Route::get('/tenkasi-to-krishnagiri-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-krishnagiri');
})->name('tenkasi-to-krishnagiri');

Route::get('/tenkasi-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-mayiladuthurai');
})->name('tenkasi-to-mayiladuthurai');

Route::get('/tenkasi-to-nagapattinam-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-nagapattinam');
})->name('tenkasi-to-nagapattinam');

Route::get('/tenkasi-to-nagercoil-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-nagercoil');
})->name('tenkasi-to-nagercoil');

Route::get('/tenkasi-to-namakkal-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-namakkal');
})->name('tenkasi-to-namakkal');

Route::get('/tenkasi-to-perambalur-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-perambalur');
})->name('tenkasi-to-perambalur');

Route::get('/tenkasi-to-pudukkottai-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-pudukkottai');
})->name('tenkasi-to-pudukkottai');

Route::get('/tenkasi-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-ramanathapuram');
})->name('tenkasi-to-ramanathapuram');

Route::get('/tenkasi-to-ranipet-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-ranipet');
})->name('tenkasi-to-ranipet');

Route::get('/tenkasi-to-sivakasi-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-sivakasi');
})->name('tenkasi-to-sivakasi');

Route::get('/tenkasi-to-tenkasi-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-tenkasi');
})->name('tenkasi-to-tenkasi');

Route::get('/tenkasi-to-thanjavur-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-thanjavur');
})->name('tenkasi-to-thanjavur');

Route::get('/tenkasi-to-thiruvarur-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-thiruvarur');
})->name('tenkasi-to-thiruvarur');

Route::get('/tenkasi-to-thoothukudi-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-thoothukudi');
})->name('tenkasi-to-thoothukudi');

Route::get('/tenkasi-to-tiruppur-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-tiruppur');
})->name('tenkasi-to-tiruppur');

Route::get('/tenkasi-to-trichy-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-trichy');
})->name('tenkasi-to-trichy');

Route::get('/tenkasi-to-vellore-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-vellore');
})->name('tenkasi-to-vellore');

Route::get('/tenkasi-to-virudhunagar-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-virudhunagar');
})->name('tenkasi-to-virudhunagar');

Route::get('/tenkasi-to-salem-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-salem');
})->name('tenkasi-to-salem');

Route::get('/tenkasi-to-tirunelveli-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-tirunelveli');
})->name('tenkasi-to-tirunelveli');

Route::get('/tenkasi-to-kochi-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-kochi');
})->name('tenkasi-to-kochi');

Route::get('/tenkasi-to-karaikal-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-karaikal');
})->name('tenkasi-to-karaikal');

Route::get('/tenkasi-to-tirupati-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-tirupati');
})->name('tenkasi-to-tirupati');

Route::get('/tenkasi-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-tiruvannamalai');
})->name('tenkasi-to-tiruvannamalai');

Route::get('/tenkasi-to-kerala-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-kerala');
})->name('tenkasi-to-kerala');

Route::get('/tenkasi-to-ariyalur-drop-taxi', function () {
    return view('layouts.tenkasi.tenkasi-to-ariyalur');
})->name('tenkasi-to-ariyalur');


Route::get('/thanjavur-to-villupuram-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-villupuram');
})->name('thanjavur-to-villupuram');

Route::get('/thanjavur-to-chennai-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-chennai');
})->name('thanjavur-to-chennai');

Route::get('/thanjavur-to-puducherry-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-puducherry');
})->name('thanjavur-to-puducherry');

Route::get('/thanjavur-to-bangalore-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-bangalore');
})->name('thanjavur-to-bangalore');

Route::get('/thanjavur-to-cuddalore-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-cuddalore');
})->name('thanjavur-to-cuddalore');

Route::get('/thanjavur-to-madurai-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-madurai');
})->name('thanjavur-to-madurai');

Route::get('/thanjavur-to-erode-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-erode');
})->name('thanjavur-to-erode');

Route::get('/thanjavur-to-arakkonam-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-arakkonam');
})->name('thanjavur-to-arakkonam');

Route::get('/thanjavur-to-arani-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-arani');
})->name('thanjavur-to-arani');

Route::get('/thanjavur-to-chengalpattu-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-chengalpattu');
})->name('thanjavur-to-chengalpattu');

Route::get('/thanjavur-to-coimbatore-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-coimbatore');
})->name('thanjavur-to-coimbatore');

Route::get('/thanjavur-to-dharmapuri-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-dharmapuri');
})->name('thanjavur-to-dharmapuri');

Route::get('/thanjavur-to-dindigul-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-dindigul');
})->name('thanjavur-to-dindigul');

Route::get('/thanjavur-to-hosur-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-hosur');
})->name('thanjavur-to-hosur');

Route::get('/thanjavur-to-kanchipuram-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-kanchipuram');
})->name('thanjavur-to-kanchipuram');

Route::get('/thanjavur-to-karur-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-karur');
})->name('thanjavur-to-karur');

Route::get('/thanjavur-to-krishnagiri-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-krishnagiri');
})->name('thanjavur-to-krishnagiri');

Route::get('/thanjavur-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-mayiladuthurai');
})->name('thanjavur-to-mayiladuthurai');

Route::get('/thanjavur-to-nagapattinam-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-nagapattinam');
})->name('thanjavur-to-nagapattinam');

Route::get('/thanjavur-to-nagercoil-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-nagercoil');
})->name('thanjavur-to-nagercoil');

Route::get('/thanjavur-to-namakkal-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-namakkal');
})->name('thanjavur-to-namakkal');

Route::get('/thanjavur-to-perambalur-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-perambalur');
})->name('thanjavur-to-perambalur');

Route::get('/thanjavur-to-pudukkottai-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-pudukkottai');
})->name('thanjavur-to-pudukkottai');

Route::get('/thanjavur-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-ramanathapuram');
})->name('thanjavur-to-ramanathapuram');

Route::get('/thanjavur-to-ranipet-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-ranipet');
})->name('thanjavur-to-ranipet');

Route::get('/thanjavur-to-sivakasi-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-sivakasi');
})->name('thanjavur-to-sivakasi');

Route::get('/thanjavur-to-tenkasi-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-tenkasi');
})->name('thanjavur-to-tenkasi');

Route::get('/thanjavur-to-thanjavur-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-thanjavur');
})->name('thanjavur-to-thanjavur');

Route::get('/thanjavur-to-thiruvarur-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-thiruvarur');
})->name('thanjavur-to-thiruvarur');

Route::get('/thanjavur-to-thoothukudi-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-thoothukudi');
})->name('thanjavur-to-thoothukudi');

Route::get('/thanjavur-to-tiruppur-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-tiruppur');
})->name('thanjavur-to-tiruppur');

Route::get('/thanjavur-to-trichy-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-trichy');
})->name('thanjavur-to-trichy');

Route::get('/thanjavur-to-vellore-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-vellore');
})->name('thanjavur-to-vellore');

Route::get('/thanjavur-to-virudhunagar-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-virudhunagar');
})->name('thanjavur-to-virudhunagar');

Route::get('/thanjavur-to-salem-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-salem');
})->name('thanjavur-to-salem');

Route::get('/thanjavur-to-tirunelveli-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-tirunelveli');
})->name('thanjavur-to-tirunelveli');

Route::get('/thanjavur-to-kochi-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-kochi');
})->name('thanjavur-to-kochi');

Route::get('/thanjavur-to-karaikal-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-karaikal');
})->name('thanjavur-to-karaikal');

Route::get('/thanjavur-to-tirupati-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-tirupati');
})->name('thanjavur-to-tirupati');

Route::get('/thanjavur-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-tiruvannamalai');
})->name('thanjavur-to-tiruvannamalai');

Route::get('/thanjavur-to-kerala-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-kerala');
})->name('thanjavur-to-kerala');

Route::get('/thanjavur-to-ariyalur-drop-taxi', function () {
    return view('layouts.thanjavur.thanjavur-to-ariyalur');
})->name('thanjavur-to-ariyalur');


Route::get('/thiruvarur-to-villupuram-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-villupuram');
})->name('thiruvarur-to-villupuram');

Route::get('/thiruvarur-to-chennai-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-chennai');
})->name('thiruvarur-to-chennai');

Route::get('/thiruvarur-to-puducherry-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-puducherry');
})->name('thiruvarur-to-puducherry');

Route::get('/thiruvarur-to-bangalore-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-bangalore');
})->name('thiruvarur-to-bangalore');

Route::get('/thiruvarur-to-cuddalore-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-cuddalore');
})->name('thiruvarur-to-cuddalore');

Route::get('/thiruvarur-to-madurai-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-madurai');
})->name('thiruvarur-to-madurai');

Route::get('/thiruvarur-to-erode-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-erode');
})->name('thiruvarur-to-erode');

Route::get('/thiruvarur-to-arakkonam-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-arakkonam');
})->name('thiruvarur-to-arakkonam');

Route::get('/thiruvarur-to-arani-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-arani');
})->name('thiruvarur-to-arani');

Route::get('/thiruvarur-to-chengalpattu-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-chengalpattu');
})->name('thiruvarur-to-chengalpattu');

Route::get('/thiruvarur-to-coimbatore-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-coimbatore');
})->name('thiruvarur-to-coimbatore');

Route::get('/thiruvarur-to-dharmapuri-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-dharmapuri');
})->name('thiruvarur-to-dharmapuri');

Route::get('/thiruvarur-to-dindigul-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-dindigul');
})->name('thiruvarur-to-dindigul');

Route::get('/thiruvarur-to-hosur-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-hosur');
})->name('thiruvarur-to-hosur');

Route::get('/thiruvarur-to-kanchipuram-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-kanchipuram');
})->name('thiruvarur-to-kanchipuram');

Route::get('/thiruvarur-to-karur-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-karur');
})->name('thiruvarur-to-karur');

Route::get('/thiruvarur-to-krishnagiri-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-krishnagiri');
})->name('thiruvarur-to-krishnagiri');

Route::get('/thiruvarur-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-mayiladuthurai');
})->name('thiruvarur-to-mayiladuthurai');

Route::get('/thiruvarur-to-nagapattinam-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-nagapattinam');
})->name('thiruvarur-to-nagapattinam');

Route::get('/thiruvarur-to-nagercoil-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-nagercoil');
})->name('thiruvarur-to-nagercoil');

Route::get('/thiruvarur-to-namakkal-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-namakkal');
})->name('thiruvarur-to-namakkal');

Route::get('/thiruvarur-to-perambalur-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-perambalur');
})->name('thiruvarur-to-perambalur');

Route::get('/thiruvarur-to-pudukkottai-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-pudukkottai');
})->name('thiruvarur-to-pudukkottai');

Route::get('/thiruvarur-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-ramanathapuram');
})->name('thiruvarur-to-ramanathapuram');

Route::get('/thiruvarur-to-ranipet-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-ranipet');
})->name('thiruvarur-to-ranipet');

Route::get('/thiruvarur-to-sivakasi-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-sivakasi');
})->name('thiruvarur-to-sivakasi');

Route::get('/thiruvarur-to-tenkasi-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-tenkasi');
})->name('thiruvarur-to-tenkasi');

Route::get('/thiruvarur-to-thanjavur-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-thanjavur');
})->name('thiruvarur-to-thanjavur');

Route::get('/thiruvarur-to-thiruvarur-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-thiruvarur');
})->name('thiruvarur-to-thiruvarur');

Route::get('/thiruvarur-to-thoothukudi-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-thoothukudi');
})->name('thiruvarur-to-thoothukudi');

Route::get('/thiruvarur-to-tiruppur-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-tiruppur');
})->name('thiruvarur-to-tiruppur');

Route::get('/thiruvarur-to-trichy-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-trichy');
})->name('thiruvarur-to-trichy');

Route::get('/thiruvarur-to-vellore-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-vellore');
})->name('thiruvarur-to-vellore');

Route::get('/thiruvarur-to-virudhunagar-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-virudhunagar');
})->name('thiruvarur-to-virudhunagar');

Route::get('/thiruvarur-to-salem-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-salem');
})->name('thiruvarur-to-salem');

Route::get('/thiruvarur-to-tirunelveli-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-tirunelveli');
})->name('thiruvarur-to-tirunelveli');

Route::get('/thiruvarur-to-kochi-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-kochi');
})->name('thiruvarur-to-kochi');

Route::get('/thiruvarur-to-karaikal-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-karaikal');
})->name('thiruvarur-to-karaikal');

Route::get('/thiruvarur-to-tirupati-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-tirupati');
})->name('thiruvarur-to-tirupati');

Route::get('/thiruvarur-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-tiruvannamalai');
})->name('thiruvarur-to-tiruvannamalai');

Route::get('/thiruvarur-to-kerala-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-kerala');
})->name('thiruvarur-to-kerala');

Route::get('/thiruvarur-to-ariyalur-drop-taxi', function () {
    return view('layouts.thiruvarur.thiruvarur-to-ariyalur');
})->name('thiruvarur-to-ariyalur');



Route::get('/thoothukudi-to-villupuram-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-villupuram');
})->name('thoothukudi-to-villupuram');

Route::get('/thoothukudi-to-chennai-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-chennai');
})->name('thoothukudi-to-chennai');

Route::get('/thoothukudi-to-puducherry-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-puducherry');
})->name('thoothukudi-to-puducherry');

Route::get('/thoothukudi-to-bangalore-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-bangalore');
})->name('thoothukudi-to-bangalore');

Route::get('/thoothukudi-to-cuddalore-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-cuddalore');
})->name('thoothukudi-to-cuddalore');

Route::get('/thoothukudi-to-madurai-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-madurai');
})->name('thoothukudi-to-madurai');

Route::get('/thoothukudi-to-erode-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-erode');
})->name('thoothukudi-to-erode');

Route::get('/thoothukudi-to-arakkonam-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-arakkonam');
})->name('thoothukudi-to-arakkonam');

Route::get('/thoothukudi-to-arani-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-arani');
})->name('thoothukudi-to-arani');

Route::get('/thoothukudi-to-chengalpattu-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-chengalpattu');
})->name('thoothukudi-to-chengalpattu');

Route::get('/thoothukudi-to-coimbatore-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-coimbatore');
})->name('thoothukudi-to-coimbatore');

Route::get('/thoothukudi-to-dharmapuri-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-dharmapuri');
})->name('thoothukudi-to-dharmapuri');

Route::get('/thoothukudi-to-dindigul-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-dindigul');
})->name('thoothukudi-to-dindigul');

Route::get('/thoothukudi-to-hosur-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-hosur');
})->name('thoothukudi-to-hosur');

Route::get('/thoothukudi-to-kanchipuram-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-kanchipuram');
})->name('thoothukudi-to-kanchipuram');

Route::get('/thoothukudi-to-karur-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-karur');
})->name('thoothukudi-to-karur');

Route::get('/thoothukudi-to-krishnagiri-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-krishnagiri');
})->name('thoothukudi-to-krishnagiri');

Route::get('/thoothukudi-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-mayiladuthurai');
})->name('thoothukudi-to-mayiladuthurai');

Route::get('/thoothukudi-to-nagapattinam-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-nagapattinam');
})->name('thoothukudi-to-nagapattinam');

Route::get('/thoothukudi-to-nagercoil-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-nagercoil');
})->name('thoothukudi-to-nagercoil');

Route::get('/thoothukudi-to-namakkal-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-namakkal');
})->name('thoothukudi-to-namakkal');

Route::get('/thoothukudi-to-perambalur-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-perambalur');
})->name('thoothukudi-to-perambalur');

Route::get('/thoothukudi-to-pudukkottai-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-pudukkottai');
})->name('thoothukudi-to-pudukkottai');

Route::get('/thoothukudi-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-ramanathapuram');
})->name('thoothukudi-to-ramanathapuram');

Route::get('/thoothukudi-to-ranipet-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-ranipet');
})->name('thoothukudi-to-ranipet');

Route::get('/thoothukudi-to-sivakasi-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-sivakasi');
})->name('thoothukudi-to-sivakasi');

Route::get('/thoothukudi-to-tenkasi-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-tenkasi');
})->name('thoothukudi-to-tenkasi');

Route::get('/thoothukudi-to-thanjavur-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-thanjavur');
})->name('thoothukudi-to-thanjavur');

Route::get('/thoothukudi-to-thiruvarur-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-thiruvarur');
})->name('thoothukudi-to-thiruvarur');

Route::get('/thoothukudi-to-thoothukudi-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-thoothukudi');
})->name('thoothukudi-to-thoothukudi');

Route::get('/thoothukudi-to-tiruppur-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-tiruppur');
})->name('thoothukudi-to-tiruppur');

Route::get('/thoothukudi-to-trichy-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-trichy');
})->name('thoothukudi-to-trichy');

Route::get('/thoothukudi-to-vellore-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-vellore');
})->name('thoothukudi-to-vellore');

Route::get('/thoothukudi-to-virudhunagar-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-virudhunagar');
})->name('thoothukudi-to-virudhunagar');

Route::get('/thoothukudi-to-salem-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-salem');
})->name('thoothukudi-to-salem');

Route::get('/thoothukudi-to-tirunelveli-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-tirunelveli');
})->name('thoothukudi-to-tirunelveli');

Route::get('/thoothukudi-to-kochi-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-kochi');
})->name('thoothukudi-to-kochi');

Route::get('/thoothukudi-to-karaikal-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-karaikal');
})->name('thoothukudi-to-karaikal');

Route::get('/thoothukudi-to-tirupati-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-tirupati');
})->name('thoothukudi-to-tirupati');

Route::get('/thoothukudi-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-tiruvannamalai');
})->name('thoothukudi-to-tiruvannamalai');

Route::get('/thoothukudi-to-kerala-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-kerala');
})->name('thoothukudi-to-kerala');

Route::get('/thoothukudi-to-ariyalur-drop-taxi', function () {
    return view('layouts.thoothukudi.thoothukudi-to-ariyalur');
})->name('thoothukudi-to-ariyalur');


Route::get('/tirunelveli-to-villupuram-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-villupuram');
})->name('tirunelveli-to-villupuram');

Route::get('/tirunelveli-to-chennai-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-chennai');
})->name('tirunelveli-to-chennai');

Route::get('/tirunelveli-to-puducherry-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-puducherry');
})->name('tirunelveli-to-puducherry');

Route::get('/tirunelveli-to-bangalore-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-bangalore');
})->name('tirunelveli-to-bangalore');

Route::get('/tirunelveli-to-cuddalore-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-cuddalore');
})->name('tirunelveli-to-cuddalore');

Route::get('/tirunelveli-to-madurai-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-madurai');
})->name('tirunelveli-to-madurai');

Route::get('/tirunelveli-to-erode-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-erode');
})->name('tirunelveli-to-erode');

Route::get('/tirunelveli-to-arakkonam-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-arakkonam');
})->name('tirunelveli-to-arakkonam');

Route::get('/tirunelveli-to-arani-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-arani');
})->name('tirunelveli-to-arani');

Route::get('/tirunelveli-to-chengalpattu-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-chengalpattu');
})->name('tirunelveli-to-chengalpattu');

Route::get('/tirunelveli-to-coimbatore-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-coimbatore');
})->name('tirunelveli-to-coimbatore');

Route::get('/tirunelveli-to-dharmapuri-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-dharmapuri');
})->name('tirunelveli-to-dharmapuri');

Route::get('/tirunelveli-to-dindigul-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-dindigul');
})->name('tirunelveli-to-dindigul');

Route::get('/tirunelveli-to-hosur-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-hosur');
})->name('tirunelveli-to-hosur');

Route::get('/tirunelveli-to-kanchipuram-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-kanchipuram');
})->name('tirunelveli-to-kanchipuram');

Route::get('/tirunelveli-to-karur-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-karur');
})->name('tirunelveli-to-karur');

Route::get('/tirunelveli-to-krishnagiri-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-krishnagiri');
})->name('tirunelveli-to-krishnagiri');

Route::get('/tirunelveli-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-mayiladuthurai');
})->name('tirunelveli-to-mayiladuthurai');

Route::get('/tirunelveli-to-nagapattinam-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-nagapattinam');
})->name('tirunelveli-to-nagapattinam');

Route::get('/tirunelveli-to-nagercoil-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-nagercoil');
})->name('tirunelveli-to-nagercoil');

Route::get('/tirunelveli-to-namakkal-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-namakkal');
})->name('tirunelveli-to-namakkal');

Route::get('/tirunelveli-to-perambalur-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-perambalur');
})->name('tirunelveli-to-perambalur');

Route::get('/tirunelveli-to-pudukkottai-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-pudukkottai');
})->name('tirunelveli-to-pudukkottai');

Route::get('/tirunelveli-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-ramanathapuram');
})->name('tirunelveli-to-ramanathapuram');

Route::get('/tirunelveli-to-ranipet-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-ranipet');
})->name('tirunelveli-to-ranipet');

Route::get('/tirunelveli-to-sivakasi-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-sivakasi');
})->name('tirunelveli-to-sivakasi');

Route::get('/tirunelveli-to-tenkasi-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-tenkasi');
})->name('tirunelveli-to-tenkasi');

Route::get('/tirunelveli-to-thanjavur-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-thanjavur');
})->name('tirunelveli-to-thanjavur');

Route::get('/tirunelveli-to-thiruvarur-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-thiruvarur');
})->name('tirunelveli-to-thiruvarur');

Route::get('/tirunelveli-to-thoothukudi-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-thoothukudi');
})->name('tirunelveli-to-thoothukudi');

Route::get('/tirunelveli-to-tiruppur-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-tiruppur');
})->name('tirunelveli-to-tiruppur');

Route::get('/tirunelveli-to-trichy-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-trichy');
})->name('tirunelveli-to-trichy');

Route::get('/tirunelveli-to-vellore-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-vellore');
})->name('tirunelveli-to-vellore');

Route::get('/tirunelveli-to-virudhunagar-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-virudhunagar');
})->name('tirunelveli-to-virudhunagar');

Route::get('/tirunelveli-to-salem-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-salem');
})->name('tirunelveli-to-salem');

Route::get('/tirunelveli-to-tirunelveli-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-tirunelveli');
})->name('tirunelveli-to-tirunelveli');

Route::get('/tirunelveli-to-kochi-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-kochi');
})->name('tirunelveli-to-kochi');

Route::get('/tirunelveli-to-karaikal-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-karaikal');
})->name('tirunelveli-to-karaikal');

Route::get('/tirunelveli-to-tirupati-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-tirupati');
})->name('tirunelveli-to-tirupati');

Route::get('/tirunelveli-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-tiruvannamalai');
})->name('tirunelveli-to-tiruvannamalai');

Route::get('/tirunelveli-to-kerala-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-kerala');
})->name('tirunelveli-to-kerala');

Route::get('/tirunelveli-to-ariyalur-drop-taxi', function () {
    return view('layouts.tirunelveli.tirunelveli-to-ariyalur');
})->name('tirunelveli-to-ariyalur');



Route::get('/tiruppur-to-villupuram-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-villupuram');
})->name('tiruppur-to-villupuram');

Route::get('/tiruppur-to-chennai-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-chennai');
})->name('tiruppur-to-chennai');

Route::get('/tiruppur-to-puducherry-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-puducherry');
})->name('tiruppur-to-puducherry');

Route::get('/tiruppur-to-bangalore-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-bangalore');
})->name('tiruppur-to-bangalore');

Route::get('/tiruppur-to-cuddalore-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-cuddalore');
})->name('tiruppur-to-cuddalore');

Route::get('/tiruppur-to-madurai-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-madurai');
})->name('tiruppur-to-madurai');

Route::get('/tiruppur-to-erode-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-erode');
})->name('tiruppur-to-erode');

Route::get('/tiruppur-to-arakkonam-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-arakkonam');
})->name('tiruppur-to-arakkonam');

Route::get('/tiruppur-to-arani-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-arani');
})->name('tiruppur-to-arani');

Route::get('/tiruppur-to-chengalpattu-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-chengalpattu');
})->name('tiruppur-to-chengalpattu');

Route::get('/tiruppur-to-coimbatore-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-coimbatore');
})->name('tiruppur-to-coimbatore');

Route::get('/tiruppur-to-dharmapuri-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-dharmapuri');
})->name('tiruppur-to-dharmapuri');

Route::get('/tiruppur-to-dindigul-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-dindigul');
})->name('tiruppur-to-dindigul');

Route::get('/tiruppur-to-hosur-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-hosur');
})->name('tiruppur-to-hosur');

Route::get('/tiruppur-to-kanchipuram-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-kanchipuram');
})->name('tiruppur-to-kanchipuram');

Route::get('/tiruppur-to-karur-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-karur');
})->name('tiruppur-to-karur');

Route::get('/tiruppur-to-krishnagiri-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-krishnagiri');
})->name('tiruppur-to-krishnagiri');

Route::get('/tiruppur-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-mayiladuthurai');
})->name('tiruppur-to-mayiladuthurai');

Route::get('/tiruppur-to-nagapattinam-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-nagapattinam');
})->name('tiruppur-to-nagapattinam');

Route::get('/tiruppur-to-nagercoil-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-nagercoil');
})->name('tiruppur-to-nagercoil');

Route::get('/tiruppur-to-namakkal-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-namakkal');
})->name('tiruppur-to-namakkal');

Route::get('/tiruppur-to-perambalur-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-perambalur');
})->name('tiruppur-to-perambalur');

Route::get('/tiruppur-to-pudukkottai-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-pudukkottai');
})->name('tiruppur-to-pudukkottai');

Route::get('/tiruppur-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-ramanathapuram');
})->name('tiruppur-to-ramanathapuram');

Route::get('/tiruppur-to-ranipet-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-ranipet');
})->name('tiruppur-to-ranipet');

Route::get('/tiruppur-to-sivakasi-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-sivakasi');
})->name('tiruppur-to-sivakasi');

Route::get('/tiruppur-to-tenkasi-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-tenkasi');
})->name('tiruppur-to-tenkasi');

Route::get('/tiruppur-to-thanjavur-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-thanjavur');
})->name('tiruppur-to-thanjavur');

Route::get('/tiruppur-to-thiruvarur-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-thiruvarur');
})->name('tiruppur-to-thiruvarur');

Route::get('/tiruppur-to-thoothukudi-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-thoothukudi');
})->name('tiruppur-to-thoothukudi');

Route::get('/tiruppur-to-tiruppur-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-tiruppur');
})->name('tiruppur-to-tiruppur');

Route::get('/tiruppur-to-trichy-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-trichy');
})->name('tiruppur-to-trichy');

Route::get('/tiruppur-to-vellore-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-vellore');
})->name('tiruppur-to-vellore');

Route::get('/tiruppur-to-virudhunagar-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-virudhunagar');
})->name('tiruppur-to-virudhunagar');

Route::get('/tiruppur-to-salem-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-salem');
})->name('tiruppur-to-salem');

Route::get('/tiruppur-to-tirunelveli-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-tirunelveli');
})->name('tiruppur-to-tirunelveli');

Route::get('/tiruppur-to-kochi-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-kochi');
})->name('tiruppur-to-kochi');

Route::get('/tiruppur-to-karaikal-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-karaikal');
})->name('tiruppur-to-karaikal');

Route::get('/tiruppur-to-tirupati-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-tirupati');
})->name('tiruppur-to-tirupati');

Route::get('/tiruppur-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-tiruvannamalai');
})->name('tiruppur-to-tiruvannamalai');

Route::get('/tiruppur-to-kerala-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-kerala');
})->name('tiruppur-to-kerala');

Route::get('/tiruppur-to-ariyalur-drop-taxi', function () {
    return view('layouts.tiruppur.tiruppur-to-ariyalur');
})->name('tiruppur-to-ariyalur');


Route::get('/trichy-to-puducherry-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-puducherry');
})->name('trichy-to-puducherry');

Route::get('/trichy-to-chennai-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-chennai');
})->name('trichy-to-chennai');

Route::get('/trichy-to-villupuram-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-villupuram');
})->name('trichy-to-villupuram');

Route::get('/trichy-to-bangalore-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-bangalore');
})->name('trichy-to-bangalore');

Route::get('/trichy-to-cuddalore-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-cuddalore');
})->name('trichy-to-cuddalore');

Route::get('/trichy-to-madurai-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-madurai');
})->name('trichy-to-madurai');

Route::get('/trichy-to-erode-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-erode');
})->name('trichy-to-erode');

Route::get('/trichy-to-arakkonam-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-arakkonam');
})->name('trichy-to-arakkonam');

Route::get('/trichy-to-arani-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-arani');
})->name('trichy-to-arani');

Route::get('/trichy-to-chengalpattu-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-chengalpattu');
})->name('trichy-to-chengalpattu');

Route::get('/trichy-to-coimbatore-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-coimbatore');
})->name('trichy-to-coimbatore');

Route::get('/trichy-to-dharmapuri-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-dharmapuri');
})->name('trichy-to-dharmapuri');

Route::get('/trichy-to-dindigul-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-dindigul');
})->name('trichy-to-dindigul');

Route::get('/trichy-to-hosur-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-hosur');
})->name('trichy-to-hosur');

Route::get('/trichy-to-kanchipuram-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-kanchipuram');
})->name('trichy-to-kanchipuram');

Route::get('/trichy-to-karur-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-karur');
})->name('trichy-to-karur');

Route::get('/trichy-to-krishnagiri-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-krishnagiri');
})->name('trichy-to-krishnagiri');

Route::get('/trichy-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-mayiladuthurai');
})->name('trichy-to-mayiladuthurai');

Route::get('/trichy-to-nagapattinam-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-nagapattinam');
})->name('trichy-to-nagapattinam');

Route::get('/trichy-to-nagercoil-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-nagercoil');
})->name('trichy-to-nagercoil');

Route::get('/trichy-to-namakkal-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-namakkal');
})->name('trichy-to-namakkal');

Route::get('/trichy-to-perambalur-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-perambalur');
})->name('trichy-to-perambalur');

Route::get('/trichy-to-pudukkottai-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-pudukkottai');
})->name('trichy-to-pudukkottai');

Route::get('/trichy-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-ramanathapuram');
})->name('trichy-to-ramanathapuram');

Route::get('/trichy-to-ranipet-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-ranipet');
})->name('trichy-to-ranipet');

Route::get('/trichy-to-sivakasi-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-sivakasi');
})->name('trichy-to-sivakasi');

Route::get('/trichy-to-tenkasi-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-tenkasi');
})->name('trichy-to-tenkasi');

Route::get('/trichy-to-thanjavur-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-thanjavur');
})->name('trichy-to-thanjavur');

Route::get('/trichy-to-thiruvarur-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-thiruvarur');
})->name('trichy-to-thiruvarur');

Route::get('/trichy-to-thoothukudi-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-thoothukudi');
})->name('trichy-to-thoothukudi');

Route::get('/trichy-to-tiruppur-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-tiruppur');
})->name('trichy-to-tiruppur');

Route::get('/trichy-to-trichy-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-trichy');
})->name('trichy-to-trichy');

Route::get('/trichy-to-vellore-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-vellore');
})->name('trichy-to-vellore');

Route::get('/trichy-to-virudhunagar-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-virudhunagar');
})->name('trichy-to-virudhunagar');

Route::get('/trichy-to-salem-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-salem');
})->name('trichy-to-salem');

Route::get('/trichy-to-tirunelveli-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-tirunelveli');
})->name('trichy-to-tirunelveli');

Route::get('/trichy-to-kochi-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-kochi');
})->name('trichy-to-kochi');

Route::get('/trichy-to-karaikal-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-karaikal');
})->name('trichy-to-karaikal');

Route::get('/trichy-to-tirupati-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-tirupati');
})->name('trichy-to-tirupati');

Route::get('/trichy-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-tiruvannamalai');
})->name('trichy-to-tiruvannamalai');

Route::get('/trichy-to-kerala-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-kerala');
})->name('trichy-to-kerala');

Route::get('/trichy-to-ariyalur-drop-taxi', function () {
    return view('layouts.trichy.trichy-to-ariyalur');
})->name('trichy-to-ariyalur');



Route::get('/vellore-to-villupuram-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-villupuram');
})->name('vellore-to-villupuram');

Route::get('/vellore-to-chennai-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-chennai');
})->name('vellore-to-chennai');

Route::get('/vellore-to-puducherry-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-puducherry');
})->name('vellore-to-puducherry');

Route::get('/vellore-to-bangalore-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-bangalore');
})->name('vellore-to-bangalore');

Route::get('/vellore-to-cuddalore-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-cuddalore');
})->name('vellore-to-cuddalore');

Route::get('/vellore-to-madurai-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-madurai');
})->name('vellore-to-madurai');

Route::get('/vellore-to-erode-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-erode');
})->name('vellore-to-erode');

Route::get('/vellore-to-arakkonam-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-arakkonam');
})->name('vellore-to-arakkonam');

Route::get('/vellore-to-arani-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-arani');
})->name('vellore-to-arani');

Route::get('/vellore-to-chengalpattu-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-chengalpattu');
})->name('vellore-to-chengalpattu');

Route::get('/vellore-to-coimbatore-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-coimbatore');
})->name('vellore-to-coimbatore');

Route::get('/vellore-to-dharmapuri-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-dharmapuri');
})->name('vellore-to-dharmapuri');

Route::get('/vellore-to-dindigul-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-dindigul');
})->name('vellore-to-dindigul');

Route::get('/vellore-to-hosur-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-hosur');
})->name('vellore-to-hosur');

Route::get('/vellore-to-kanchipuram-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-kanchipuram');
})->name('vellore-to-kanchipuram');

Route::get('/vellore-to-karur-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-karur');
})->name('vellore-to-karur');

Route::get('/vellore-to-krishnagiri-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-krishnagiri');
})->name('vellore-to-krishnagiri');

Route::get('/vellore-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-mayiladuthurai');
})->name('vellore-to-mayiladuthurai');

Route::get('/vellore-to-nagapattinam-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-nagapattinam');
})->name('vellore-to-nagapattinam');

Route::get('/vellore-to-nagercoil-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-nagercoil');
})->name('vellore-to-nagercoil');

Route::get('/vellore-to-namakkal-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-namakkal');
})->name('vellore-to-namakkal');

Route::get('/vellore-to-perambalur-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-perambalur');
})->name('vellore-to-perambalur');

Route::get('/vellore-to-pudukkottai-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-pudukkottai');
})->name('vellore-to-pudukkottai');

Route::get('/vellore-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-ramanathapuram');
})->name('vellore-to-ramanathapuram');

Route::get('/vellore-to-ranipet-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-ranipet');
})->name('vellore-to-ranipet');

Route::get('/vellore-to-sivakasi-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-sivakasi');
})->name('vellore-to-sivakasi');

Route::get('/vellore-to-tenkasi-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-tenkasi');
})->name('vellore-to-tenkasi');

Route::get('/vellore-to-thanjavur-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-thanjavur');
})->name('vellore-to-thanjavur');

Route::get('/vellore-to-thiruvarur-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-thiruvarur');
})->name('vellore-to-thiruvarur');

Route::get('/vellore-to-thoothukudi-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-thoothukudi');
})->name('vellore-to-thoothukudi');

Route::get('/vellore-to-tiruppur-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-tiruppur');
})->name('vellore-to-tiruppur');

Route::get('/vellore-to-trichy-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-trichy');
})->name('vellore-to-trichy');

Route::get('/vellore-to-vellore-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-vellore');
})->name('vellore-to-vellore');

Route::get('/vellore-to-virudhunagar-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-virudhunagar');
})->name('vellore-to-virudhunagar');

Route::get('/vellore-to-salem-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-salem');
})->name('vellore-to-salem');

Route::get('/vellore-to-tirunelveli-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-tirunelveli');
})->name('vellore-to-tirunelveli');

Route::get('/vellore-to-kochi-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-kochi');
})->name('vellore-to-kochi');

Route::get('/vellore-to-karaikal-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-karaikal');
})->name('vellore-to-karaikal');

Route::get('/vellore-to-tirupati-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-tirupati');
})->name('vellore-to-tirupati');

Route::get('/vellore-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-tiruvannamalai');
})->name('vellore-to-tiruvannamalai');

Route::get('/vellore-to-kerala-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-kerala');
})->name('vellore-to-kerala');

Route::get('/vellore-to-ariyalur-drop-taxi', function () {
    return view('layouts.vellore.vellore-to-ariyalur');
})->name('vellore-to-ariyalur');


Route::get('/villupuram-to-villupuram-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-villupuram');
})->name('villupuram-to-villupuram');

Route::get('/villupuram-to-chennai-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-chennai');
})->name('villupuram-to-chennai');

Route::get('/villupuram-to-puducherry-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-puducherry');
})->name('villupuram-to-puducherry');

Route::get('/villupuram-to-bangalore-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-bangalore');
})->name('villupuram-to-bangalore');

Route::get('/villupuram-to-cuddalore-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-cuddalore');
})->name('villupuram-to-cuddalore');

Route::get('/villupuram-to-madurai-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-madurai');
})->name('villupuram-to-madurai');

Route::get('/villupuram-to-erode-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-erode');
})->name('villupuram-to-erode');

Route::get('/villupuram-to-arakkonam-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-arakkonam');
})->name('villupuram-to-arakkonam');

Route::get('/villupuram-to-arani-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-arani');
})->name('villupuram-to-arani');

Route::get('/villupuram-to-chengalpattu-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-chengalpattu');
})->name('villupuram-to-chengalpattu');

Route::get('/villupuram-to-coimbatore-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-coimbatore');
})->name('villupuram-to-coimbatore');

Route::get('/villupuram-to-dharmapuri-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-dharmapuri');
})->name('villupuram-to-dharmapuri');

Route::get('/villupuram-to-dindigul-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-dindigul');
})->name('villupuram-to-dindigul');

Route::get('/villupuram-to-hosur-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-hosur');
})->name('villupuram-to-hosur');

Route::get('/villupuram-to-kanchipuram-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-kanchipuram');
})->name('villupuram-to-kanchipuram');

Route::get('/villupuram-to-karur-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-karur');
})->name('villupuram-to-karur');

Route::get('/villupuram-to-krishnagiri-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-krishnagiri');
})->name('villupuram-to-krishnagiri');

Route::get('/villupuram-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-mayiladuthurai');
})->name('villupuram-to-mayiladuthurai');

Route::get('/villupuram-to-nagapattinam-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-nagapattinam');
})->name('villupuram-to-nagapattinam');

Route::get('/villupuram-to-nagercoil-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-nagercoil');
})->name('villupuram-to-nagercoil');

Route::get('/villupuram-to-namakkal-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-namakkal');
})->name('villupuram-to-namakkal');

Route::get('/villupuram-to-perambalur-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-perambalur');
})->name('villupuram-to-perambalur');

Route::get('/villupuram-to-pudukkottai-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-pudukkottai');
})->name('villupuram-to-pudukkottai');

Route::get('/villupuram-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-ramanathapuram');
})->name('villupuram-to-ramanathapuram');

Route::get('/villupuram-to-ranipet-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-ranipet');
})->name('villupuram-to-ranipet');

Route::get('/villupuram-to-sivakasi-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-sivakasi');
})->name('villupuram-to-sivakasi');

Route::get('/villupuram-to-tenkasi-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-tenkasi');
})->name('villupuram-to-tenkasi');

Route::get('/villupuram-to-thanjavur-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-thanjavur');
})->name('villupuram-to-thanjavur');

Route::get('/villupuram-to-thiruvarur-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-thiruvarur');
})->name('villupuram-to-thiruvarur');

Route::get('/villupuram-to-thoothukudi-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-thoothukudi');
})->name('villupuram-to-thoothukudi');

Route::get('/villupuram-to-tiruppur-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-tiruppur');
})->name('villupuram-to-tiruppur');

Route::get('/villupuram-to-trichy-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-trichy');
})->name('villupuram-to-trichy');

Route::get('/villupuram-to-vellore-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-vellore');
})->name('villupuram-to-vellore');

Route::get('/villupuram-to-virudhunagar-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-virudhunagar');
})->name('villupuram-to-virudhunagar');

Route::get('/villupuram-to-salem-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-salem');
})->name('villupuram-to-salem');

Route::get('/villupuram-to-tirunelveli-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-tirunelveli');
})->name('villupuram-to-tirunelveli');

Route::get('/villupuram-to-kochi-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-kochi');
})->name('villupuram-to-kochi');

Route::get('/villupuram-to-karaikal-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-karaikal');
})->name('villupuram-to-karaikal');

Route::get('/villupuram-to-tirupati-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-tirupati');
})->name('villupuram-to-tirupati');

Route::get('/villupuram-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-tiruvannamalai');
})->name('villupuram-to-tiruvannamalai');

Route::get('/villupuram-to-kerala-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-kerala');
})->name('villupuram-to-kerala');

Route::get('/villupuram-to-ariyalur-drop-taxi', function () {
    return view('layouts.villupuram.villupuram-to-ariyalur');
})->name('villupuram-to-ariyalur');


Route::get('/virudhunagar-to-villupuram-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-villupuram');
})->name('virudhunagar-to-villupuram');

Route::get('/virudhunagar-to-chennai-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-chennai');
})->name('virudhunagar-to-chennai');

Route::get('/virudhunagar-to-puducherry-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-puducherry');
})->name('virudhunagar-to-puducherry');

Route::get('/virudhunagar-to-bangalore-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-bangalore');
})->name('virudhunagar-to-bangalore');

Route::get('/virudhunagar-to-cuddalore-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-cuddalore');
})->name('virudhunagar-to-cuddalore');

Route::get('/virudhunagar-to-madurai-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-madurai');
})->name('virudhunagar-to-madurai');

Route::get('/virudhunagar-to-erode-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-erode');
})->name('virudhunagar-to-erode');

Route::get('/virudhunagar-to-arakkonam-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-arakkonam');
})->name('virudhunagar-to-arakkonam');

Route::get('/virudhunagar-to-arani-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-arani');
})->name('virudhunagar-to-arani');

Route::get('/virudhunagar-to-chengalpattu-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-chengalpattu');
})->name('virudhunagar-to-chengalpattu');

Route::get('/virudhunagar-to-coimbatore-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-coimbatore');
})->name('virudhunagar-to-coimbatore');

Route::get('/virudhunagar-to-dharmapuri-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-dharmapuri');
})->name('virudhunagar-to-dharmapuri');

Route::get('/virudhunagar-to-dindigul-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-dindigul');
})->name('virudhunagar-to-dindigul');

Route::get('/virudhunagar-to-hosur-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-hosur');
})->name('virudhunagar-to-hosur');

Route::get('/virudhunagar-to-kanchipuram-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-kanchipuram');
})->name('virudhunagar-to-kanchipuram');

Route::get('/virudhunagar-to-karur-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-karur');
})->name('virudhunagar-to-karur');

Route::get('/virudhunagar-to-krishnagiri-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-krishnagiri');
})->name('virudhunagar-to-krishnagiri');

Route::get('/virudhunagar-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-mayiladuthurai');
})->name('virudhunagar-to-mayiladuthurai');

Route::get('/virudhunagar-to-nagapattinam-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-nagapattinam');
})->name('virudhunagar-to-nagapattinam');

Route::get('/virudhunagar-to-nagercoil-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-nagercoil');
})->name('virudhunagar-to-nagercoil');

Route::get('/virudhunagar-to-namakkal-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-namakkal');
})->name('virudhunagar-to-namakkal');

Route::get('/virudhunagar-to-perambalur-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-perambalur');
})->name('virudhunagar-to-perambalur');

Route::get('/virudhunagar-to-pudukkottai-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-pudukkottai');
})->name('virudhunagar-to-pudukkottai');

Route::get('/virudhunagar-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-ramanathapuram');
})->name('virudhunagar-to-ramanathapuram');

Route::get('/virudhunagar-to-ranipet-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-ranipet');
})->name('virudhunagar-to-ranipet');

Route::get('/virudhunagar-to-sivakasi-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-sivakasi');
})->name('virudhunagar-to-sivakasi');

Route::get('/virudhunagar-to-tenkasi-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-tenkasi');
})->name('virudhunagar-to-tenkasi');

Route::get('/virudhunagar-to-thanjavur-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-thanjavur');
})->name('virudhunagar-to-thanjavur');

Route::get('/virudhunagar-to-thiruvarur-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-thiruvarur');
})->name('virudhunagar-to-thiruvarur');

Route::get('/virudhunagar-to-thoothukudi-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-thoothukudi');
})->name('virudhunagar-to-thoothukudi');

Route::get('/virudhunagar-to-tiruppur-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-tiruppur');
})->name('virudhunagar-to-tiruppur');

Route::get('/virudhunagar-to-trichy-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-trichy');
})->name('virudhunagar-to-trichy');

Route::get('/virudhunagar-to-vellore-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-vellore');
})->name('virudhunagar-to-vellore');

Route::get('/virudhunagar-to-virudhunagar-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-virudhunagar');
})->name('virudhunagar-to-virudhunagar');

Route::get('/virudhunagar-to-salem-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-salem');
})->name('virudhunagar-to-salem');

Route::get('/virudhunagar-to-tirunelveli-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-tirunelveli');
})->name('virudhunagar-to-tirunelveli');

Route::get('/virudhunagar-to-kochi-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-kochi');
})->name('virudhunagar-to-kochi');

Route::get('/virudhunagar-to-karaikal-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-karaikal');
})->name('virudhunagar-to-karaikal');

Route::get('/virudhunagar-to-tirupati-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-tirupati');
})->name('virudhunagar-to-tirupati');

Route::get('/virudhunagar-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-tiruvannamalai');
})->name('virudhunagar-to-tiruvannamalai');

Route::get('/virudhunagar-to-kerala-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-kerala');
})->name('virudhunagar-to-kerala');

Route::get('/virudhunagar-to-ariyalur-drop-taxi', function () {
    return view('layouts.virudhunagar.virudhunagar-to-ariyalur');
})->name('virudhunagar-to-ariyalur');



Route::get('/puducherry-to-villupuram-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-villupuram');
})->name('puducherry-to-villupuram');

Route::get('/puducherry-to-chennai-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-chennai');
})->name('puducherry-to-chennai');

Route::get('/puducherry-to-bangalore-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-bangalore');
})->name('puducherry-to-bangalore');

Route::get('/puducherry-to-cuddalore-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-cuddalore');
})->name('puducherry-to-cuddalore');

Route::get('/puducherry-to-madurai-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-madurai');
})->name('puducherry-to-madurai');

Route::get('/puducherry-to-erode-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-erode');
})->name('puducherry-to-erode');

Route::get('/puducherry-to-arakkonam-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-arakkonam');
})->name('puducherry-to-arakkonam');

Route::get('/puducherry-to-arani-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-arani');
})->name('puducherry-to-arani');

Route::get('/puducherry-to-chengalpattu-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-chengalpattu');
})->name('puducherry-to-chengalpattu');

Route::get('/puducherry-to-coimbatore-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-coimbatore');
})->name('puducherry-to-coimbatore');

Route::get('/puducherry-to-dharmapuri-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-dharmapuri');
})->name('puducherry-to-dharmapuri');

Route::get('/puducherry-to-dindigul-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-dindigul');
})->name('puducherry-to-dindigul');

Route::get('/puducherry-to-hosur-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-hosur');
})->name('puducherry-to-hosur');

Route::get('/puducherry-to-kanchipuram-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-kanchipuram');
})->name('puducherry-to-kanchipuram');

Route::get('/puducherry-to-karur-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-karur');
})->name('puducherry-to-karur');

Route::get('/puducherry-to-krishnagiri-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-krishnagiri');
})->name('puducherry-to-krishnagiri');

Route::get('/puducherry-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-mayiladuthurai');
})->name('puducherry-to-mayiladuthurai');

Route::get('/puducherry-to-nagapattinam-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-nagapattinam');
})->name('puducherry-to-nagapattinam');

Route::get('/puducherry-to-nagercoil-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-nagercoil');
})->name('puducherry-to-nagercoil');

Route::get('/puducherry-to-namakkal-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-namakkal');
})->name('puducherry-to-namakkal');

Route::get('/puducherry-to-perambalur-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-perambalur');
})->name('puducherry-to-perambalur');

Route::get('/puducherry-to-pudukkottai-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-pudukkottai');
})->name('puducherry-to-pudukkottai');

Route::get('/puducherry-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-ramanathapuram');
})->name('puducherry-to-ramanathapuram');

Route::get('/puducherry-to-ranipet-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-ranipet');
})->name('puducherry-to-ranipet');

Route::get('/puducherry-to-sivakasi-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-sivakasi');
})->name('puducherry-to-sivakasi');

Route::get('/puducherry-to-tenkasi-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-tenkasi');
})->name('puducherry-to-tenkasi');

Route::get('/puducherry-to-thanjavur-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-thanjavur');
})->name('puducherry-to-thanjavur');

Route::get('/puducherry-to-thiruvarur-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-thiruvarur');
})->name('puducherry-to-thiruvarur');

Route::get('/puducherry-to-thoothukudi-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-thoothukudi');
})->name('puducherry-to-thoothukudi');

Route::get('/puducherry-to-tiruppur-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-tiruppur');
})->name('puducherry-to-tiruppur');

Route::get('/puducherry-to-trichy-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-trichy');
})->name('puducherry-to-trichy');

Route::get('/puducherry-to-vellore-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-vellore');
})->name('puducherry-to-vellore');

Route::get('/puducherry-to-puducherry-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-puducherry');
})->name('puducherry-to-puducherry');

Route::get('/puducherry-to-salem-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-salem');
})->name('puducherry-to-salem');

Route::get('/puducherry-to-tirunelveli-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-tirunelveli');
})->name('puducherry-to-tirunelveli');

Route::get('/puducherry-to-virudhunagar-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-virudhunagar');
})->name('puducherry-to-virudhunagar');

Route::get('/puducherry-to-kochi-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-kochi');
})->name('puducherry-to-kochi');

Route::get('/puducherry-to-karaikal-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-karaikal');
})->name('puducherry-to-karaikal');

Route::get('/puducherry-to-tirupati-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-tirupati');
})->name('puducherry-to-tirupati');

Route::get('/puducherry-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-tiruvannamalai');
})->name('puducherry-to-tiruvannamalai');

Route::get('/puducherry-to-kerala-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-kerala');
})->name('puducherry-to-kerala');

Route::get('/puducherry-to-ariyalur-drop-taxi', function () {
    return view('layouts.puducherry.puducherry-to-ariyalur');
})->name('puducherry-to-ariyalur');



Route::get('/arani-to-villupuram-drop-taxi', function () {
    return view('layouts.arani.arani-to-villupuram');
})->name('arani-to-villupuram');

Route::get('/arani-to-chennai-drop-taxi', function () {
    return view('layouts.arani.arani-to-chennai');
})->name('arani-to-chennai');

Route::get('/arani-to-puducherry-drop-taxi', function () {
    return view('layouts.arani.arani-to-puducherry');
})->name('arani-to-puducherry');

Route::get('/arani-to-bangalore-drop-taxi', function () {
    return view('layouts.arani.arani-to-bangalore');
})->name('arani-to-bangalore');

Route::get('/arani-to-cuddalore-drop-taxi', function () {
    return view('layouts.arani.arani-to-cuddalore');
})->name('arani-to-cuddalore');

Route::get('/arani-to-madurai-drop-taxi', function () {
    return view('layouts.arani.arani-to-madurai');
})->name('arani-to-madurai');

Route::get('/arani-to-erode-drop-taxi', function () {
    return view('layouts.arani.arani-to-erode');
})->name('arani-to-erode');

Route::get('/arani-to-arakkonam-drop-taxi', function () {
    return view('layouts.arani.arani-to-arakkonam');
})->name('arani-to-arakkonam');

Route::get('/arani-to-arani-drop-taxi', function () {
    return view('layouts.arani.arani-to-arani');
})->name('arani-to-arani');

Route::get('/arani-to-chengalpattu-drop-taxi', function () {
    return view('layouts.arani.arani-to-chengalpattu');
})->name('arani-to-chengalpattu');

Route::get('/arani-to-coimbatore-drop-taxi', function () {
    return view('layouts.arani.arani-to-coimbatore');
})->name('arani-to-coimbatore');

Route::get('/arani-to-dharmapuri-drop-taxi', function () {
    return view('layouts.arani.arani-to-dharmapuri');
})->name('arani-to-dharmapuri');

Route::get('/arani-to-dindigul-drop-taxi', function () {
    return view('layouts.arani.arani-to-dindigul');
})->name('arani-to-dindigul');

Route::get('/arani-to-hosur-drop-taxi', function () {
    return view('layouts.arani.arani-to-hosur');
})->name('arani-to-hosur');

Route::get('/arani-to-kanchipuram-drop-taxi', function () {
    return view('layouts.arani.arani-to-kanchipuram');
})->name('arani-to-kanchipuram');

Route::get('/arani-to-karur-drop-taxi', function () {
    return view('layouts.arani.arani-to-karur');
})->name('arani-to-karur');

Route::get('/arani-to-krishnagiri-drop-taxi', function () {
    return view('layouts.arani.arani-to-krishnagiri');
})->name('arani-to-krishnagiri');

Route::get('/arani-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.arani.arani-to-mayiladuthurai');
})->name('arani-to-mayiladuthurai');

Route::get('/arani-to-nagapattinam-drop-taxi', function () {
    return view('layouts.arani.arani-to-nagapattinam');
})->name('arani-to-nagapattinam');

Route::get('/arani-to-nagercoil-drop-taxi', function () {
    return view('layouts.arani.arani-to-nagercoil');
})->name('arani-to-nagercoil');

Route::get('/arani-to-namakkal-drop-taxi', function () {
    return view('layouts.arani.arani-to-namakkal');
})->name('arani-to-namakkal');

Route::get('/arani-to-perambalur-drop-taxi', function () {
    return view('layouts.arani.arani-to-perambalur');
})->name('arani-to-perambalur');

Route::get('/arani-to-pudukkottai-drop-taxi', function () {
    return view('layouts.arani.arani-to-pudukkottai');
})->name('arani-to-pudukkottai');

Route::get('/arani-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.arani.arani-to-ramanathapuram');
})->name('arani-to-ramanathapuram');

Route::get('/arani-to-ranipet-drop-taxi', function () {
    return view('layouts.arani.arani-to-ranipet');
})->name('arani-to-ranipet');

Route::get('/arani-to-sivakasi-drop-taxi', function () {
    return view('layouts.arani.arani-to-sivakasi');
})->name('arani-to-sivakasi');

Route::get('/arani-to-tenkasi-drop-taxi', function () {
    return view('layouts.arani.arani-to-tenkasi');
})->name('arani-to-tenkasi');

Route::get('/arani-to-thanjavur-drop-taxi', function () {
    return view('layouts.arani.arani-to-thanjavur');
})->name('arani-to-thanjavur');

Route::get('/arani-to-thiruvarur-drop-taxi', function () {
    return view('layouts.arani.arani-to-thiruvarur');
})->name('arani-to-thiruvarur');

Route::get('/arani-to-thoothukudi-drop-taxi', function () {
    return view('layouts.arani.arani-to-thoothukudi');
})->name('arani-to-thoothukudi');

Route::get('/arani-to-tiruppur-drop-taxi', function () {
    return view('layouts.arani.arani-to-tiruppur');
})->name('arani-to-tiruppur');

Route::get('/arani-to-trichy-drop-taxi', function () {
    return view('layouts.arani.arani-to-trichy');
})->name('arani-to-trichy');

Route::get('/arani-to-vellore-drop-taxi', function () {
    return view('layouts.arani.arani-to-vellore');
})->name('arani-to-vellore');

Route::get('/arani-to-arani-drop-taxi', function () {
    return view('layouts.arani.arani-to-arani');
})->name('arani-to-arani');

Route::get('/arani-to-salem-drop-taxi', function () {
    return view('layouts.arani.arani-to-salem');
})->name('arani-to-salem');

Route::get('/arani-to-tirunelveli-drop-taxi', function () {
    return view('layouts.arani.arani-to-tirunelveli');
})->name('arani-to-tirunelveli');

Route::get('/arani-to-kochi-drop-taxi', function () {
    return view('layouts.arani.arani-to-kochi');
})->name('arani-to-kochi');

Route::get('/arani-to-karaikal-drop-taxi', function () {
    return view('layouts.arani.arani-to-karaikal');
})->name('arani-to-karaikal');

Route::get('/arani-to-tirupati-drop-taxi', function () {
    return view('layouts.arani.arani-to-tirupati');
})->name('arani-to-tirupati');

Route::get('/arani-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.arani.arani-to-tiruvannamalai');
})->name('arani-to-tiruvannamalai');

Route::get('/arani-to-kerala-drop-taxi', function () {
    return view('layouts.arani.arani-to-kerala');
})->name('arani-to-kerala');

Route::get('/arani-to-ariyalur-drop-taxi', function () {
    return view('layouts.arani.arani-to-ariyalur');
})->name('arani-to-ariyalur');



Route::get('/bangalore-to-ariyalur-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-ariyalur');
})->name('bangalore-to-ariyalur');

Route::get('/bangalore-to-arani-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-arani');
})->name('bangalore-to-arani');

Route::get('/bangalore-to-arakkonam-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-arakkonam');
})->name('bangalore-to-arakkonam');

Route::get('/bangalore-to-bangalore-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-bangalore');
})->name('bangalore-to-bangalore');

Route::get('/bangalore-to-chengalpattu-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-chengalpattu');
})->name('bangalore-to-chengalpattu');

Route::get('/bangalore-to-chennai-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-chennai');
})->name('bangalore-to-chennai');

Route::get('/bangalore-to-coimbatore-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-coimbatore');
})->name('bangalore-to-coimbatore');

Route::get('/bangalore-to-cuddalore-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-cuddalore');
})->name('bangalore-to-cuddalore');

Route::get('/bangalore-to-dharmapuri-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-dharmapuri');
})->name('bangalore-to-dharmapuri');

Route::get('/bangalore-to-dindigul-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-dindigul');
})->name('bangalore-to-dindigul');

Route::get('/bangalore-to-erode-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-erode');
})->name('bangalore-to-erode');

Route::get('/bangalore-to-hosur-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-hosur');
})->name('bangalore-to-hosur');

Route::get('/bangalore-to-kanchipuram-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-kanchipuram');
})->name('bangalore-to-kanchipuram');

Route::get('/bangalore-to-karur-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-karur');
})->name('bangalore-to-karur');

Route::get('/bangalore-to-krishnagiri-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-krishnagiri');
})->name('bangalore-to-krishnagiri');

Route::get('/bangalore-to-madurai-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-madurai');
})->name('bangalore-to-madurai');

Route::get('/bangalore-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-mayiladuthurai');
})->name('bangalore-to-mayiladuthurai');

Route::get('/bangalore-to-nagapattinam-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-nagapattinam');
})->name('bangalore-to-nagapattinam');

Route::get('/bangalore-to-nagercoil-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-nagercoil');
})->name('bangalore-to-nagercoil');

Route::get('/bangalore-to-namakkal-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-namakkal');
})->name('bangalore-to-namakkal');

Route::get('/bangalore-to-perambalur-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-perambalur');
})->name('bangalore-to-perambalur');

Route::get('/bangalore-to-puducherry-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-puducherry');
})->name('bangalore-to-puducherry');

Route::get('/bangalore-to-pudukkottai-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-pudukkottai');
})->name('bangalore-to-pudukkottai');

Route::get('/bangalore-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-ramanathapuram');
})->name('bangalore-to-ramanathapuram');

Route::get('/bangalore-to-ranipet-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-ranipet');
})->name('bangalore-to-ranipet');

Route::get('/bangalore-to-salem-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-salem');
})->name('bangalore-to-salem');

Route::get('/bangalore-to-sivakasi-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-sivakasi');
})->name('bangalore-to-sivakasi');

Route::get('/bangalore-to-tenkasi-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-tenkasi');
})->name('bangalore-to-tenkasi');

Route::get('/bangalore-to-thanjavur-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-thanjavur');
})->name('bangalore-to-thanjavur');

Route::get('/bangalore-to-thiruvarur-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-thiruvarur');
})->name('bangalore-to-thiruvarur');

Route::get('/bangalore-to-thoothukudi-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-thoothukudi');
})->name('bangalore-to-thoothukudi');

Route::get('/bangalore-to-tirunelveli-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-tirunelveli');
})->name('bangalore-to-tirunelveli');

Route::get('/bangalore-to-tiruppur-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-tiruppur');
})->name('bangalore-to-tiruppur');

Route::get('/bangalore-to-trichy-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-trichy');
})->name('bangalore-to-trichy');

Route::get('/bangalore-to-vellore-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-vellore');
})->name('bangalore-to-vellore');

Route::get('/bangalore-to-villupuram-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-villupuram');
})->name('bangalore-to-villupuram');

Route::get('/bangalore-to-virudhunagar-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-virudhunagar');
})->name('bangalore-to-virudhunagar');

Route::get('/bangalore-to-karaikal-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-karaikal');
})->name('bangalore-to-karaikal');

Route::get('/bangalore-to-kochi-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-kochi');
})->name('bangalore-to-kochi');

Route::get('/bangalore-to-tirupati-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-tirupati');
})->name('bangalore-to-tirupati');

Route::get('/bangalore-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-tiruvannamalai');
})->name('bangalore-to-tiruvannamalai');

Route::get('/bangalore-to-kerala-drop-taxi', function () {
    return view('layouts.bangalore.bangalore-to-kerala');
})->name('bangalore-to-kerala');



Route::get('/karaikal-to-bangalore-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-bangalore');
})->name('karaikal-to-bangalore');

Route::get('/karaikal-to-ariyalur-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-ariyalur');
})->name('karaikal-to-ariyalur');

Route::get('/karaikal-to-arani-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-arani');
})->name('karaikal-to-arani');

Route::get('/karaikal-to-arakkonam-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-arakkonam');
})->name('karaikal-to-arakkonam');

Route::get('/karaikal-to-karaikal-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-karaikal');
})->name('karaikal-to-karaikal');

Route::get('/karaikal-to-chengalpattu-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-chengalpattu');
})->name('karaikal-to-chengalpattu');

Route::get('/karaikal-to-chennai-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-chennai');
})->name('karaikal-to-chennai');

Route::get('/karaikal-to-coimbatore-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-coimbatore');
})->name('karaikal-to-coimbatore');

Route::get('/karaikal-to-cuddalore-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-cuddalore');
})->name('karaikal-to-cuddalore');

Route::get('/karaikal-to-dharmapuri-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-dharmapuri');
})->name('karaikal-to-dharmapuri');

Route::get('/karaikal-to-dindigul-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-dindigul');
})->name('karaikal-to-dindigul');

Route::get('/karaikal-to-erode-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-erode');
})->name('karaikal-to-erode');

Route::get('/karaikal-to-hosur-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-hosur');
})->name('karaikal-to-hosur');

Route::get('/karaikal-to-kanchipuram-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-kanchipuram');
})->name('karaikal-to-kanchipuram');

Route::get('/karaikal-to-karur-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-karur');
})->name('karaikal-to-karur');

Route::get('/karaikal-to-krishnagiri-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-krishnagiri');
})->name('karaikal-to-krishnagiri');

Route::get('/karaikal-to-madurai-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-madurai');
})->name('karaikal-to-madurai');

Route::get('/karaikal-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-mayiladuthurai');
})->name('karaikal-to-mayiladuthurai');

Route::get('/karaikal-to-nagapattinam-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-nagapattinam');
})->name('karaikal-to-nagapattinam');

Route::get('/karaikal-to-nagercoil-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-nagercoil');
})->name('karaikal-to-nagercoil');

Route::get('/karaikal-to-namakkal-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-namakkal');
})->name('karaikal-to-namakkal');

Route::get('/karaikal-to-perambalur-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-perambalur');
})->name('karaikal-to-perambalur');

Route::get('/karaikal-to-puducherry-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-puducherry');
})->name('karaikal-to-puducherry');

Route::get('/karaikal-to-pudukkottai-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-pudukkottai');
})->name('karaikal-to-pudukkottai');

Route::get('/karaikal-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-ramanathapuram');
})->name('karaikal-to-ramanathapuram');

Route::get('/karaikal-to-ranipet-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-ranipet');
})->name('karaikal-to-ranipet');

Route::get('/karaikal-to-salem-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-salem');
})->name('karaikal-to-salem');

Route::get('/karaikal-to-sivakasi-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-sivakasi');
})->name('karaikal-to-sivakasi');

Route::get('/karaikal-to-tenkasi-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-tenkasi');
})->name('karaikal-to-tenkasi');

Route::get('/karaikal-to-thanjavur-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-thanjavur');
})->name('karaikal-to-thanjavur');

Route::get('/karaikal-to-thiruvarur-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-thiruvarur');
})->name('karaikal-to-thiruvarur');

Route::get('/karaikal-to-thoothukudi-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-thoothukudi');
})->name('karaikal-to-thoothukudi');

Route::get('/karaikal-to-tirunelveli-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-tirunelveli');
})->name('karaikal-to-tirunelveli');

Route::get('/karaikal-to-tiruppur-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-tiruppur');
})->name('karaikal-to-tiruppur');

Route::get('/karaikal-to-trichy-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-trichy');
})->name('karaikal-to-trichy');

Route::get('/karaikal-to-vellore-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-vellore');
})->name('karaikal-to-vellore');

Route::get('/karaikal-to-villupuram-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-villupuram');
})->name('karaikal-to-villupuram');

Route::get('/karaikal-to-virudhunagar-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-virudhunagar');
})->name('karaikal-to-virudhunagar');

Route::get('/karaikal-to-karaikal-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-karaikal');
})->name('karaikal-to-karaikal');

Route::get('/karaikal-to-kochi-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-kochi');
})->name('karaikal-to-kochi');

Route::get('/karaikal-to-tirupati-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-tirupati');
})->name('karaikal-to-tirupati');

Route::get('/karaikal-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-tiruvannamalai');
})->name('karaikal-to-tiruvannamalai');

Route::get('/karaikal-to-kerala-drop-taxi', function () {
    return view('layouts.karaikal.karaikal-to-kerala');
})->name('karaikal-to-kerala');



Route::get('/kerala-to-ariyalur-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-ariyalur');
})->name('kerala-to-ariyalur');

Route::get('/kerala-to-bangalore-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-bangalore');
})->name('kerala-to-bangalore');

Route::get('/kerala-to-arani-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-arani');
})->name('kerala-to-arani');

Route::get('/kerala-to-arakkonam-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-arakkonam');
})->name('kerala-to-arakkonam');

Route::get('/kerala-to-kerala-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-kerala');
})->name('kerala-to-kerala');

Route::get('/kerala-to-chengalpattu-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-chengalpattu');
})->name('kerala-to-chengalpattu');

Route::get('/kerala-to-chennai-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-chennai');
})->name('kerala-to-chennai');

Route::get('/kerala-to-coimbatore-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-coimbatore');
})->name('kerala-to-coimbatore');

Route::get('/kerala-to-cuddalore-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-cuddalore');
})->name('kerala-to-cuddalore');

Route::get('/kerala-to-dharmapuri-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-dharmapuri');
})->name('kerala-to-dharmapuri');

Route::get('/kerala-to-dindigul-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-dindigul');
})->name('kerala-to-dindigul');

Route::get('/kerala-to-erode-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-erode');
})->name('kerala-to-erode');

Route::get('/kerala-to-hosur-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-hosur');
})->name('kerala-to-hosur');

Route::get('/kerala-to-kanchipuram-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-kanchipuram');
})->name('kerala-to-kanchipuram');

Route::get('/kerala-to-karur-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-karur');
})->name('kerala-to-karur');

Route::get('/kerala-to-krishnagiri-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-krishnagiri');
})->name('kerala-to-krishnagiri');

Route::get('/kerala-to-madurai-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-madurai');
})->name('kerala-to-madurai');

Route::get('/kerala-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-mayiladuthurai');
})->name('kerala-to-mayiladuthurai');

Route::get('/kerala-to-nagapattinam-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-nagapattinam');
})->name('kerala-to-nagapattinam');

Route::get('/kerala-to-nagercoil-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-nagercoil');
})->name('kerala-to-nagercoil');

Route::get('/kerala-to-namakkal-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-namakkal');
})->name('kerala-to-namakkal');

Route::get('/kerala-to-perambalur-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-perambalur');
})->name('kerala-to-perambalur');

Route::get('/kerala-to-puducherry-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-puducherry');
})->name('kerala-to-puducherry');

Route::get('/kerala-to-pudukkottai-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-pudukkottai');
})->name('kerala-to-pudukkottai');

Route::get('/kerala-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-ramanathapuram');
})->name('kerala-to-ramanathapuram');

Route::get('/kerala-to-ranipet-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-ranipet');
})->name('kerala-to-ranipet');

Route::get('/kerala-to-salem-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-salem');
})->name('kerala-to-salem');

Route::get('/kerala-to-sivakasi-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-sivakasi');
})->name('kerala-to-sivakasi');

Route::get('/kerala-to-tenkasi-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-tenkasi');
})->name('kerala-to-tenkasi');

Route::get('/kerala-to-thanjavur-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-thanjavur');
})->name('kerala-to-thanjavur');

Route::get('/kerala-to-thiruvarur-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-thiruvarur');
})->name('kerala-to-thiruvarur');

Route::get('/kerala-to-thoothukudi-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-thoothukudi');
})->name('kerala-to-thoothukudi');

Route::get('/kerala-to-tirunelveli-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-tirunelveli');
})->name('kerala-to-tirunelveli');

Route::get('/kerala-to-tiruppur-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-tiruppur');
})->name('kerala-to-tiruppur');

Route::get('/kerala-to-trichy-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-trichy');
})->name('kerala-to-trichy');

Route::get('/kerala-to-vellore-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-vellore');
})->name('kerala-to-vellore');

Route::get('/kerala-to-villupuram-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-villupuram');
})->name('kerala-to-villupuram');

Route::get('/kerala-to-virudhunagar-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-virudhunagar');
})->name('kerala-to-virudhunagar');

Route::get('/kerala-to-karaikal-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-karaikal');
})->name('kerala-to-karaikal');

Route::get('/kerala-to-kochi-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-kochi');
})->name('kerala-to-kochi');

Route::get('/kerala-to-tirupati-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-tirupati');
})->name('kerala-to-tirupati');

Route::get('/kerala-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-tiruvannamalai');
})->name('kerala-to-tiruvannamalai');

Route::get('/kerala-to-kerala-drop-taxi', function () {
    return view('layouts.kerala.kerala-to-kerala');
})->name('kerala-to-kerala');



Route::get('/kochi-to-ariyalur-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-ariyalur');
})->name('kochi-to-ariyalur');

Route::get('/kochi-to-bangalore-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-bangalore');
})->name('kochi-to-bangalore');

Route::get('/kochi-to-arani-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-arani');
})->name('kochi-to-arani');

Route::get('/kochi-to-arakkonam-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-arakkonam');
})->name('kochi-to-arakkonam');

Route::get('/kochi-to-kochi-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-kochi');
})->name('kochi-to-kochi');

Route::get('/kochi-to-chengalpattu-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-chengalpattu');
})->name('kochi-to-chengalpattu');

Route::get('/kochi-to-chennai-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-chennai');
})->name('kochi-to-chennai');

Route::get('/kochi-to-coimbatore-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-coimbatore');
})->name('kochi-to-coimbatore');

Route::get('/kochi-to-cuddalore-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-cuddalore');
})->name('kochi-to-cuddalore');

Route::get('/kochi-to-dharmapuri-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-dharmapuri');
})->name('kochi-to-dharmapuri');

Route::get('/kochi-to-dindigul-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-dindigul');
})->name('kochi-to-dindigul');

Route::get('/kochi-to-erode-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-erode');
})->name('kochi-to-erode');

Route::get('/kochi-to-hosur-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-hosur');
})->name('kochi-to-hosur');

Route::get('/kochi-to-kanchipuram-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-kanchipuram');
})->name('kochi-to-kanchipuram');

Route::get('/kochi-to-karur-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-karur');
})->name('kochi-to-karur');

Route::get('/kochi-to-krishnagiri-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-krishnagiri');
})->name('kochi-to-krishnagiri');

Route::get('/kochi-to-madurai-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-madurai');
})->name('kochi-to-madurai');

Route::get('/kochi-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-mayiladuthurai');
})->name('kochi-to-mayiladuthurai');

Route::get('/kochi-to-nagapattinam-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-nagapattinam');
})->name('kochi-to-nagapattinam');

Route::get('/kochi-to-nagercoil-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-nagercoil');
})->name('kochi-to-nagercoil');

Route::get('/kochi-to-namakkal-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-namakkal');
})->name('kochi-to-namakkal');

Route::get('/kochi-to-perambalur-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-perambalur');
})->name('kochi-to-perambalur');

Route::get('/kochi-to-puducherry-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-puducherry');
})->name('kochi-to-puducherry');

Route::get('/kochi-to-pudukkottai-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-pudukkottai');
})->name('kochi-to-pudukkottai');

Route::get('/kochi-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-ramanathapuram');
})->name('kochi-to-ramanathapuram');

Route::get('/kochi-to-ranipet-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-ranipet');
})->name('kochi-to-ranipet');

Route::get('/kochi-to-salem-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-salem');
})->name('kochi-to-salem');

Route::get('/kochi-to-sivakasi-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-sivakasi');
})->name('kochi-to-sivakasi');

Route::get('/kochi-to-tenkasi-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-tenkasi');
})->name('kochi-to-tenkasi');

Route::get('/kochi-to-thanjavur-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-thanjavur');
})->name('kochi-to-thanjavur');

Route::get('/kochi-to-thiruvarur-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-thiruvarur');
})->name('kochi-to-thiruvarur');

Route::get('/kochi-to-thoothukudi-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-thoothukudi');
})->name('kochi-to-thoothukudi');

Route::get('/kochi-to-tirunelveli-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-tirunelveli');
})->name('kochi-to-tirunelveli');

Route::get('/kochi-to-tiruppur-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-tiruppur');
})->name('kochi-to-tiruppur');

Route::get('/kochi-to-trichy-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-trichy');
})->name('kochi-to-trichy');

Route::get('/kochi-to-vellore-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-vellore');
})->name('kochi-to-vellore');

Route::get('/kochi-to-villupuram-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-villupuram');
})->name('kochi-to-villupuram');

Route::get('/kochi-to-virudhunagar-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-virudhunagar');
})->name('kochi-to-virudhunagar');

Route::get('/kochi-to-karaikal-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-karaikal');
})->name('kochi-to-karaikal');

Route::get('/kochi-to-kochi-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-kochi');
})->name('kochi-to-kochi');

Route::get('/kochi-to-tirupati-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-tirupati');
})->name('kochi-to-tirupati');

Route::get('/kochi-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-tiruvannamalai');
})->name('kochi-to-tiruvannamalai');

Route::get('/kochi-to-kerala-drop-taxi', function () {
    return view('layouts.kochi.kochi-to-kerala');
})->name('kochi-to-kerala');



Route::get('/tiruvannamalai-to-ariyalur-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-ariyalur');
})->name('tiruvannamalai-to-ariyalur');

Route::get('/tiruvannamalai-to-bangalore-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-bangalore');
})->name('tiruvannamalai-to-bangalore');

Route::get('/tiruvannamalai-to-arani-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-arani');
})->name('tiruvannamalai-to-arani');

Route::get('/tiruvannamalai-to-arakkonam-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-arakkonam');
})->name('tiruvannamalai-to-arakkonam');

Route::get('/tiruvannamalai-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-tiruvannamalai');
})->name('tiruvannamalai-to-tiruvannamalai');

Route::get('/tiruvannamalai-to-chengalpattu-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-chengalpattu');
})->name('tiruvannamalai-to-chengalpattu');

Route::get('/tiruvannamalai-to-chennai-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-chennai');
})->name('tiruvannamalai-to-chennai');

Route::get('/tiruvannamalai-to-coimbatore-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-coimbatore');
})->name('tiruvannamalai-to-coimbatore');

Route::get('/tiruvannamalai-to-cuddalore-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-cuddalore');
})->name('tiruvannamalai-to-cuddalore');

Route::get('/tiruvannamalai-to-dharmapuri-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-dharmapuri');
})->name('tiruvannamalai-to-dharmapuri');

Route::get('/tiruvannamalai-to-dindigul-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-dindigul');
})->name('tiruvannamalai-to-dindigul');

Route::get('/tiruvannamalai-to-erode-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-erode');
})->name('tiruvannamalai-to-erode');

Route::get('/tiruvannamalai-to-hosur-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-hosur');
})->name('tiruvannamalai-to-hosur');

Route::get('/tiruvannamalai-to-kanchipuram-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-kanchipuram');
})->name('tiruvannamalai-to-kanchipuram');

Route::get('/tiruvannamalai-to-karur-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-karur');
})->name('tiruvannamalai-to-karur');

Route::get('/tiruvannamalai-to-krishnagiri-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-krishnagiri');
})->name('tiruvannamalai-to-krishnagiri');

Route::get('/tiruvannamalai-to-madurai-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-madurai');
})->name('tiruvannamalai-to-madurai');

Route::get('/tiruvannamalai-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-mayiladuthurai');
})->name('tiruvannamalai-to-mayiladuthurai');

Route::get('/tiruvannamalai-to-nagapattinam-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-nagapattinam');
})->name('tiruvannamalai-to-nagapattinam');

Route::get('/tiruvannamalai-to-nagercoil-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-nagercoil');
})->name('tiruvannamalai-to-nagercoil');

Route::get('/tiruvannamalai-to-namakkal-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-namakkal');
})->name('tiruvannamalai-to-namakkal');

Route::get('/tiruvannamalai-to-perambalur-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-perambalur');
})->name('tiruvannamalai-to-perambalur');

Route::get('/tiruvannamalai-to-puducherry-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-puducherry');
})->name('tiruvannamalai-to-puducherry');

Route::get('/tiruvannamalai-to-pudukkottai-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-pudukkottai');
})->name('tiruvannamalai-to-pudukkottai');

Route::get('/tiruvannamalai-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-ramanathapuram');
})->name('tiruvannamalai-to-ramanathapuram');

Route::get('/tiruvannamalai-to-ranipet-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-ranipet');
})->name('tiruvannamalai-to-ranipet');

Route::get('/tiruvannamalai-to-salem-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-salem');
})->name('tiruvannamalai-to-salem');

Route::get('/tiruvannamalai-to-sivakasi-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-sivakasi');
})->name('tiruvannamalai-to-sivakasi');

Route::get('/tiruvannamalai-to-tenkasi-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-tenkasi');
})->name('tiruvannamalai-to-tenkasi');

Route::get('/tiruvannamalai-to-thanjavur-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-thanjavur');
})->name('tiruvannamalai-to-thanjavur');

Route::get('/tiruvannamalai-to-thiruvarur-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-thiruvarur');
})->name('tiruvannamalai-to-thiruvarur');

Route::get('/tiruvannamalai-to-thoothukudi-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-thoothukudi');
})->name('tiruvannamalai-to-thoothukudi');

Route::get('/tiruvannamalai-to-tirunelveli-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-tirunelveli');
})->name('tiruvannamalai-to-tirunelveli');

Route::get('/tiruvannamalai-to-tiruppur-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-tiruppur');
})->name('tiruvannamalai-to-tiruppur');

Route::get('/tiruvannamalai-to-trichy-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-trichy');
})->name('tiruvannamalai-to-trichy');

Route::get('/tiruvannamalai-to-vellore-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-vellore');
})->name('tiruvannamalai-to-vellore');

Route::get('/tiruvannamalai-to-villupuram-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-villupuram');
})->name('tiruvannamalai-to-villupuram');

Route::get('/tiruvannamalai-to-virudhunagar-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-virudhunagar');
})->name('tiruvannamalai-to-virudhunagar');

Route::get('/tiruvannamalai-to-karaikal-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-karaikal');
})->name('tiruvannamalai-to-karaikal');

Route::get('/tiruvannamalai-to-kochi-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-kochi');
})->name('tiruvannamalai-to-kochi');

Route::get('/tiruvannamalai-to-tirupati-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-tirupati');
})->name('tiruvannamalai-to-tirupati');

Route::get('/tiruvannamalai-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-tiruvannamalai');
})->name('tiruvannamalai-to-tiruvannamalai');

Route::get('/tiruvannamalai-to-kerala-drop-taxi', function () {
    return view('layouts.tiruvannamalai.tiruvannamalai-to-kerala');
})->name('tiruvannamalai-to-kerala');



Route::get('/tirupati-to-ariyalur-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-ariyalur');
})->name('tirupati-to-ariyalur');

Route::get('/tirupati-to-bangalore-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-bangalore');
})->name('tirupati-to-bangalore');

Route::get('/tirupati-to-arani-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-arani');
})->name('tirupati-to-arani');

Route::get('/tirupati-to-arakkonam-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-arakkonam');
})->name('tirupati-to-arakkonam');

Route::get('/tirupati-to-tirupati-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-tirupati');
})->name('tirupati-to-tirupati');

Route::get('/tirupati-to-chengalpattu-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-chengalpattu');
})->name('tirupati-to-chengalpattu');

Route::get('/tirupati-to-chennai-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-chennai');
})->name('tirupati-to-chennai');

Route::get('/tirupati-to-coimbatore-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-coimbatore');
})->name('tirupati-to-coimbatore');

Route::get('/tirupati-to-cuddalore-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-cuddalore');
})->name('tirupati-to-cuddalore');

Route::get('/tirupati-to-dharmapuri-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-dharmapuri');
})->name('tirupati-to-dharmapuri');

Route::get('/tirupati-to-dindigul-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-dindigul');
})->name('tirupati-to-dindigul');

Route::get('/tirupati-to-erode-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-erode');
})->name('tirupati-to-erode');

Route::get('/tirupati-to-hosur-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-hosur');
})->name('tirupati-to-hosur');

Route::get('/tirupati-to-kanchipuram-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-kanchipuram');
})->name('tirupati-to-kanchipuram');

Route::get('/tirupati-to-karur-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-karur');
})->name('tirupati-to-karur');

Route::get('/tirupati-to-krishnagiri-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-krishnagiri');
})->name('tirupati-to-krishnagiri');

Route::get('/tirupati-to-madurai-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-madurai');
})->name('tirupati-to-madurai');

Route::get('/tirupati-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-mayiladuthurai');
})->name('tirupati-to-mayiladuthurai');

Route::get('/tirupati-to-nagapattinam-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-nagapattinam');
})->name('tirupati-to-nagapattinam');

Route::get('/tirupati-to-nagercoil-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-nagercoil');
})->name('tirupati-to-nagercoil');

Route::get('/tirupati-to-namakkal-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-namakkal');
})->name('tirupati-to-namakkal');

Route::get('/tirupati-to-perambalur-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-perambalur');
})->name('tirupati-to-perambalur');

Route::get('/tirupati-to-puducherry-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-puducherry');
})->name('tirupati-to-puducherry');

Route::get('/tirupati-to-pudukkottai-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-pudukkottai');
})->name('tirupati-to-pudukkottai');

Route::get('/tirupati-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-ramanathapuram');
})->name('tirupati-to-ramanathapuram');

Route::get('/tirupati-to-ranipet-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-ranipet');
})->name('tirupati-to-ranipet');

Route::get('/tirupati-to-salem-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-salem');
})->name('tirupati-to-salem');

Route::get('/tirupati-to-sivakasi-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-sivakasi');
})->name('tirupati-to-sivakasi');

Route::get('/tirupati-to-tenkasi-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-tenkasi');
})->name('tirupati-to-tenkasi');

Route::get('/tirupati-to-thanjavur-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-thanjavur');
})->name('tirupati-to-thanjavur');

Route::get('/tirupati-to-thiruvarur-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-thiruvarur');
})->name('tirupati-to-thiruvarur');

Route::get('/tirupati-to-thoothukudi-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-thoothukudi');
})->name('tirupati-to-thoothukudi');

Route::get('/tirupati-to-tirunelveli-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-tirunelveli');
})->name('tirupati-to-tirunelveli');

Route::get('/tirupati-to-tiruppur-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-tiruppur');
})->name('tirupati-to-tiruppur');

Route::get('/tirupati-to-trichy-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-trichy');
})->name('tirupati-to-trichy');

Route::get('/tirupati-to-vellore-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-vellore');
})->name('tirupati-to-vellore');

Route::get('/tirupati-to-villupuram-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-villupuram');
})->name('tirupati-to-villupuram');

Route::get('/tirupati-to-virudhunagar-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-virudhunagar');
})->name('tirupati-to-virudhunagar');

Route::get('/tirupati-to-karaikal-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-karaikal');
})->name('tirupati-to-karaikal');

Route::get('/tirupati-to-kochi-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-kochi');
})->name('tirupati-to-kochi');

Route::get('/tirupati-to-tirupati-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-tirupati');
})->name('tirupati-to-tirupati');

Route::get('/tirupati-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-tiruvannamalai');
})->name('tirupati-to-tiruvannamalai');

Route::get('/tirupati-to-kerala-drop-taxi', function () {
    return view('layouts.tirupati.tirupati-to-kerala');
})->name('tirupati-to-kerala');


Route::get('/ariyalur-to-ariyalur-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-ariyalur');
})->name('ariyalur-to-ariyalur');

Route::get('/ariyalur-to-bangalore-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-bangalore');
})->name('ariyalur-to-bangalore');

Route::get('/ariyalur-to-arani-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-arani');
})->name('ariyalur-to-arani');

Route::get('/ariyalur-to-arakkonam-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-arakkonam');
})->name('ariyalur-to-arakkonam');

Route::get('/ariyalur-to-ariyalur-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-ariyalur');
})->name('ariyalur-to-ariyalur');

Route::get('/ariyalur-to-chengalpattu-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-chengalpattu');
})->name('ariyalur-to-chengalpattu');

Route::get('/ariyalur-to-chennai-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-chennai');
})->name('ariyalur-to-chennai');

Route::get('/ariyalur-to-coimbatore-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-coimbatore');
})->name('ariyalur-to-coimbatore');

Route::get('/ariyalur-to-cuddalore-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-cuddalore');
})->name('ariyalur-to-cuddalore');

Route::get('/ariyalur-to-dharmapuri-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-dharmapuri');
})->name('ariyalur-to-dharmapuri');

Route::get('/ariyalur-to-dindigul-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-dindigul');
})->name('ariyalur-to-dindigul');

Route::get('/ariyalur-to-erode-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-erode');
})->name('ariyalur-to-erode');

Route::get('/ariyalur-to-hosur-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-hosur');
})->name('ariyalur-to-hosur');

Route::get('/ariyalur-to-kanchipuram-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-kanchipuram');
})->name('ariyalur-to-kanchipuram');

Route::get('/ariyalur-to-karur-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-karur');
})->name('ariyalur-to-karur');

Route::get('/ariyalur-to-krishnagiri-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-krishnagiri');
})->name('ariyalur-to-krishnagiri');

Route::get('/ariyalur-to-madurai-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-madurai');
})->name('ariyalur-to-madurai');

Route::get('/ariyalur-to-mayiladuthurai-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-mayiladuthurai');
})->name('ariyalur-to-mayiladuthurai');

Route::get('/ariyalur-to-nagapattinam-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-nagapattinam');
})->name('ariyalur-to-nagapattinam');

Route::get('/ariyalur-to-nagercoil-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-nagercoil');
})->name('ariyalur-to-nagercoil');

Route::get('/ariyalur-to-namakkal-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-namakkal');
})->name('ariyalur-to-namakkal');

Route::get('/ariyalur-to-perambalur-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-perambalur');
})->name('ariyalur-to-perambalur');

Route::get('/ariyalur-to-puducherry-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-puducherry');
})->name('ariyalur-to-puducherry');

Route::get('/ariyalur-to-pudukkottai-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-pudukkottai');
})->name('ariyalur-to-pudukkottai');

Route::get('/ariyalur-to-ramanathapuram-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-ramanathapuram');
})->name('ariyalur-to-ramanathapuram');

Route::get('/ariyalur-to-ranipet-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-ranipet');
})->name('ariyalur-to-ranipet');

Route::get('/ariyalur-to-salem-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-salem');
})->name('ariyalur-to-salem');

Route::get('/ariyalur-to-sivakasi-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-sivakasi');
})->name('ariyalur-to-sivakasi');

Route::get('/ariyalur-to-tenkasi-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-tenkasi');
})->name('ariyalur-to-tenkasi');

Route::get('/ariyalur-to-thanjavur-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-thanjavur');
})->name('ariyalur-to-thanjavur');

Route::get('/ariyalur-to-thiruvarur-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-thiruvarur');
})->name('ariyalur-to-thiruvarur');

Route::get('/ariyalur-to-thoothukudi-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-thoothukudi');
})->name('ariyalur-to-thoothukudi');

Route::get('/ariyalur-to-tirunelveli-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-tirunelveli');
})->name('ariyalur-to-tirunelveli');

Route::get('/ariyalur-to-tiruppur-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-tiruppur');
})->name('ariyalur-to-tiruppur');

Route::get('/ariyalur-to-trichy-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-trichy');
})->name('ariyalur-to-trichy');

Route::get('/ariyalur-to-vellore-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-vellore');
})->name('ariyalur-to-vellore');

Route::get('/ariyalur-to-villupuram-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-villupuram');
})->name('ariyalur-to-villupuram');

Route::get('/ariyalur-to-virudhunagar-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-virudhunagar');
})->name('ariyalur-to-virudhunagar');

Route::get('/ariyalur-to-karaikal-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-karaikal');
})->name('ariyalur-to-karaikal');

Route::get('/ariyalur-to-kochi-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-kochi');
})->name('ariyalur-to-kochi');

Route::get('/ariyalur-to-tirupati-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-tirupati');
})->name('ariyalur-to-tirupati');

Route::get('/ariyalur-to-tiruvannamalai-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-tiruvannamalai');
})->name('ariyalur-to-tiruvannamalai');

Route::get('/ariyalur-to-kerala-drop-taxi', function () {
    return view('layouts.ariyalur.ariyalur-to-kerala');
})->name('ariyalur-to-kerala');

Route::get('/privacypolicy', function () {
    return view('layouts.privacypolicy');
})->name('privacypolicy');
