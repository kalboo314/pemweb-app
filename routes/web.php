<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/advertise', function () {
    return view('advertise');
});

Route::post('/advertise', 
    [PropertyController::class, 'store'
])->name('property.store');