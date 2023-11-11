<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HostController;
use App\Models\User;
use App\Models\Listing;
use App\Http\Middleware\ensureotp;
use Illuminate\Http\Request;

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

Route::get('/link/storage', function(){
    Artisan::call('storage:link');
});

Route::prefix('admin')->group(function(){

    Route::get('/', function(){
        return view('admin.dashboard');
    });
    
    Route::get('/add-listing', [ListingController::class, 'index'])->name('addlisting');

    Route::get('/pending-listing', function(){
        $listings = Listing::where('isApproved', false)->get();
        return view('admin.pending-listing')->with('pending', $listings);
    })->name('pendinglisting');


    Route::get('/view-listing/{id}', [ListingController::class, 'show']);

    Route::get('/approve-listing/{id}', [ListingController::class, 'approve']);
    
    Route::get('/decline-listing/{id}', [ListingController::class, 'destroy']);


    //booking section
    Route::get('/add-booking', [BookingController::class, 'index'])->name('addbooking');

    Route::post('/create-booking', [BookingController::class, 'create'])->name('createbooking');

    Route::get('/pending-booking', [BookingController::class, 'show'])->name('pendingbooking');
    Route::get('/approve-booking/{id}', [BookingController::class, 'approve']);
    
    Route::get('/decline-booking/{id}', [bookingController::class, 'destroy']);

    Route::get('/view-booking/{id}', [BookingController::class, 'edit']);
});

Route::post('/create/listing', [ListingController::class, 'create'])->name('create_listing');

Route::get('/payment/success', function(){
    return view('success');
});

Route::get('/payment/failure', function(){
    return view('failed');
});


//host 
Route::prefix('host')->group(function(){
    //login
    Route::get('/login', [LoginController::class, 'login']);
    Route::post('/get-otp', [LoginController::class, 'get_otp'])->name('sendotp');
    Route::post('/verify', [LoginController::class, 'otpverify'])->name('otpverify');
    Route::get('/setup', function(){
        return redirect('/setup/step/1');
    });
    
});

Route::prefix('setup')->group(function(){
    Route::get('/step/1', [HostController::class, 'userform'])->name('');
    Route::get('/step/2', [HostController::class, 'hostypeform'])->name('');
    Route::get('/step/3', [HostController::class, 'listing_nid'])->name('');
    Route::get('/step/4', [HostController::class, 'listingform'])->name('');
    Route::get('/step/5', [HostController::class, 'listing_info'])->name('');
    Route::get('/step/6', [HostController::class, 'amenities'])->name('');
    Route::get('/step/7', [HostController::class, 'restrictions'])->name('');
    Route::get('/step/8', [HostController::class, 'listing_images'])->name('');
    Route::get('/step/9', [HostController::class, 'set_home_address'])->name('');
    Route::get('/step/10', [HostController::class, 'congrats'])->name('');
});
