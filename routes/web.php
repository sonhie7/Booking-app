<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InternauteController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\ReservationController;

Route::get('/', function () {
    return view('layouts.app');
});

Route::resource('internautes', InternauteController::class);
Route::resource('hotels', HotelController::class);
Route::resource('reservations', ReservationController::class);
