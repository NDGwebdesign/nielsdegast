<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//main site routes
Route::get('/', function () {
    return view('main.home');
})->name('home');

// Route::get('/idee', function () {
//     return view('main.idee');
//     })->name('idee');

Route::get('/about', function () {
    return view('main.about');
})->name('aboutme');

Route::resource('contact', ContactController::class);

//admin routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/admin/contacts', [ContactController::class, 'adminindex'])->name('admin.contacts.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
