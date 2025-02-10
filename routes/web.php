<?php

<<<<<<< HEAD
use App\Http\Controllers\AllEventController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicHolidayController;
use App\Http\Controllers\TypeOfDayController;
=======
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
>>>>>>> fb02015c874fcd093a5c2367557e5f2e8cb3d26f
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login'])->name('login.post');


<<<<<<< HEAD
// Route::middleware(['auth'])->get('/calendar', [ProfileController::class, 'calendarView'])->name('calendar.view');
Route::middleware(['auth'])->get('/calendar', [PublicHolidayController::class, 'index'])->name('index');
=======
>>>>>>> fb02015c874fcd093a5c2367557e5f2e8cb3d26f

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

<<<<<<< HEAD
    Route::resource('public-holidays', PublicHolidayController::class);
    Route::resource('all-events', AllEventController::class);
    Route::resource('type-of-days', TypeOfDayController::class);
=======
    Route::get('/calendar', [ProfileController::class, 'calendarView'])->name('calendar.view');

>>>>>>> fb02015c874fcd093a5c2367557e5f2e8cb3d26f

});

require __DIR__ . '/auth.php';
