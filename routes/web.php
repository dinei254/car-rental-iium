<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CarController;




Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/booking/{booking}/cancel', [BookingController::class, 'cancel']);
});
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin-test', function () {
        return 'You are admin';
    });
    Route::resource('/admin/cars', CarController::class);
    Route::get('/admin/bookings', [BookingController::class, 'index']);

    Route::post('/admin/bookings/{booking}/approve', [BookingController::class, 'approve']);
    Route::post('/admin/bookings/{booking}/reject', [BookingController::class, 'reject']);

});

Route::middleware(['auth'])->group(function () {

    // Step 1: select dates
    Route::get('/booking/search', [BookingController::class, 'searchForm']);
    Route::post('/booking/search', [BookingController::class, 'search']);

    // Step 2: confirm booking
    Route::get('/booking/confirm/{car}', [BookingController::class, 'confirm']);
    Route::post('/booking/store', [BookingController::class, 'store']);

    // View own bookings
    Route::get('/my-bookings', [BookingController::class, 'myBookings']);
});


require __DIR__.'/auth.php';
