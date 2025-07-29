<?php

use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Auth;
use App\Models\Property;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Routing\Middleware\SubstituteBindings;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
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

        if (Auth::user()->is_admin) {
            return redirect()->route('admin.dashboard');
        }

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

Route::get('/', function () {
    $properties = Property::with('photos')->latest()->take(6)->get(); // ambil 6 properti terbaru
    return view('home', compact('properties'));
});

Route::get('/profile', function () {
    $user = Auth::user();
    $properties = $user->properties()->with('photos')->get();
    return view('profile', compact('user', 'properties'));
})->middleware('auth')->name('profile');


Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');

Route::post('/register', [RegisterController::class, 'register']);

Route::post('/advertise', [PropertyController::class, 'store'])
    ->middleware('auth')
    ->name('property.store');



Route::get('/listing', function () {
    $properties = \App\Models\Property::with('photos')
        ->when(request('lokasi'), fn($q) => $q->whereRaw('LOWER(lokasi) = ?', [strtolower(request('lokasi'))]))
        ->when(request('tipe_bangunan'), fn($q) => $q->where('tipe_bangunan', request('tipe_bangunan')))
        ->when(request('harga'), function ($q) {
            $range = request('harga');
            if ($range === '<500') {
                $q->where('harga', '<', 500000000);
            } elseif ($range === '500-1000') {
                $q->whereBetween('harga', [500000000, 1000000000]);
            } elseif ($range === '>1000') {
                $q->where('harga', '>', 1000000000);
            }
        })
        ->latest()
        ->paginate(9);

    return view('listing', compact('properties'));
});


Route::get('/detail/{id}', [PropertyController::class, 'show']);


Route::get('/detail/{id}', function ($id) {
    $property = \App\Models\Property::with('photos')->findOrFail($id);
    return view('detail', compact('property'));
})->name('detail');

Route::get('/seller/{id}', [ProfileController::class, 'show'])->name('seller.profile');


Route::get('/house-survey/{id}', function ($id) {
    $property = \App\Models\Property::findOrFail($id);
    return view('house-survey', compact('property'));
})->name('survey');

Route::get('/house-survey/{id}', [SurveyController::class, 'create'])->name('survey.create');

Route::post('/house-survey', [SurveyController::class, 'store'])->name('survey.store');

Route::get('/contact', [ContactController::class, 'show'])->name('contact');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::get('/admin/dashboard', function () {
    $users = \App\Models\User::all();
    $properties = \App\Models\Property::with('user')->get();
    $surveys = \App\Models\Survey::with('property')->get();

    return view('admin.dashboard', compact('users', 'properties', 'surveys'));
})->middleware('auth')->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Users
    Route::get('/admin/user/create', [AdminController::class, 'createUser'])->name('admin.user.create');
    Route::post('/admin/user/store', [AdminController::class, 'storeUser'])->name('admin.user.store');
    Route::delete('/admin/user/{id}', [AdminController::class, 'deleteUser'])->name('admin.user.delete');
    Route::post('/admin/user/{id}/role', [AdminController::class, 'updateUserRole'])->name('admin.user.updateRole');

    // Properties
    Route::get('/admin/property/create', [AdminController::class, 'createProperty'])->name('admin.property.create'); // <-- INI
    Route::post('/admin/property/store', [AdminController::class, 'storeProperty'])->name('admin.property.store');
    Route::delete('/admin/property/{id}', [AdminController::class, 'deleteProperty'])->name('admin.property.delete');

    // Surveys
    Route::delete('/admin/survey/{id}', [AdminController::class, 'deleteSurvey'])->name('admin.survey.delete');
});

Route::post('/admin/survey/{survey}/status/{status}', [AdminController::class, 'updateStatus'])->name('admin.survey.updateStatus');