<?php

use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'welcome'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes

Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function() {
    Route::get('/dashboard', function() {
        return view('admin.dashboard');
    })->name('dashboard');

    // Menu/Project Management
    Route::resource('menus', MenuController::class);
    Route::resource('projects', ProjectController::class);


    // Index
    Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');

    // Create
    Route::get('projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('projects', [ProjectController::class, 'store'])->name('projects.store');

    // Edit
    Route::get('projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('projects/{project}', [ProjectController::class, 'update'])->name('projects.update');

    // Delete
    Route::delete('projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
    // Add more admin resources as needed
});







require __DIR__.'/auth.php';
