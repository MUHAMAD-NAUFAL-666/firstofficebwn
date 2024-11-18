<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/office-spaces', [FrontendController::class, 'officeSpaces'])->name('office.spaces');
Route::get('/office-spaces/{id}', [FrontendController::class, 'viewOfficeSpace'])->name('office.space.view');
Route::get('/booking', [FrontendController::class, 'bookingForm'])->name('booking.form');
Route::post('/booking', [FrontendController::class, 'submitBooking'])->name('booking.submit');

    
