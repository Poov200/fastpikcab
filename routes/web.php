<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ContactController;





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
    Route::get('/commissions', function () {
        return view('layouts.admin.commissions');
    });
});

// Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');




Route::get('/contact-messages', [ContactController::class, 'getAllContactMessages']);
