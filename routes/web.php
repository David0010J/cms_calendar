<?php

use App\Http\Controllers\AllEventController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicHolidayController;
use App\Http\Controllers\TypeOfDayController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login.admin');
Route::post('/', [LoginController::class, 'login'])->name('login.post');

Route::middleware(['auth'])->get('/calendar', [ProfileController::class, 'calendarView'])->name('calendar.view');
// Route::middleware(['auth'])->get('/calendar', [PublicHolidayController::class, 'index'])->name('index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

    Route::resource('public-holidays', PublicHolidayController::class);
    Route::resource('all-events', AllEventController::class);
    Route::resource('type-of-days', TypeOfDayController::class);

});

require __DIR__ . '/auth.php';
