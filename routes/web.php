<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Auth;


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

Route::get('/listing', function () {
    return view('listing');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/house-survey', function () {
    return view('house-survey');
});


Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/');
    }

    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ])->onlyInput('email');
})->name('login');


Route::post('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth')->name('profile');


Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');

Route::post('/register', [RegisterController::class, 'register']);


Route::post('/advertise', 
    [PropertyController::class, 'store'
])->name('property.store');


Route::get('/listing', [PropertyController::class, 'index']);

Route::get('/detail/{id}', [PropertyController::class, 'show']);


Route::get('/detail/{id}', function ($id) {
    $property = \App\Models\Property::with('photos')->findOrFail($id);
    return view('detail', compact('property'));
})->name('detail');


Route::get('/house-survey/{id}', function ($id) {
    $property = \App\Models\Property::findOrFail($id);
    return view('house-survey', compact('property'));
})->name('survey');

Route::get('/house-survey/{id}', [SurveyController::class, 'create'])->name('survey.create');

Route::post('/house-survey', [SurveyController::class, 'store'])->name('survey.store');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');