<?php

use App\Http\Controllers\BenefitController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ServiceController;
use App\Models\Benefit;
use App\Models\Package;
use App\Models\Service;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Landing Pages
Route::get('/', function () {
    return view('index');
});

Route::get('/service', function () {
    return view('services');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
// Landing Pages

// Admin Group
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Service Management Controlls
    Route::get('/service', [ServiceController::class, 'index'])->name('service');
    // Create tambah service
    Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
    // Store service
    Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
    // Edit service by slug
    Route::get('/service/{slug}/edit', [ServiceController::class, 'edit'])->name('service.edit');
    // Update service
    Route::patch('/service/{id}', [ServiceController::class, 'update']);
    // Delete service
    Route::delete('/service/{slug}', [ServiceController::class, 'destroy'])->name('service.delete');

    // Benefit Management Controlls
    Route::get('/benefit', [BenefitController::class, 'index'])->name('benefit');
    // Create benefit
    Route::post('/benefit', [BenefitController::class, 'store'])->name('benefit.store');
    // Update benefit
    Route::patch('/benefit/{id}', [BenefitController::class, 'update']);
    // Delete benefit
    Route::delete('/benefit/{id}', [BenefitController::class, 'destroy']);
    // benefit select
    Route::get('/benefit/select', [PackageController::class, 'select'])->name('benefits.select');

    // Package management control
    Route::get('/package', [PackageController::class, 'index'])->name('package');
    // Create package
    Route::get('/package/create', [PackageController::class, 'create'])->name('package.create');
    // Store benefit
    Route::post('/package', [PackageController::class, 'store'])->name('package.store');
    // Edit package benefit
    Route::get('/package/{slug}/edit', [PackageController::class, 'edit']);
    // Update package benefit
    Route::patch('/package/{id}', [PackageController::class, 'update']);
    // Delete package
    Route::delete('/package/{slug}', [PackageController::class, 'destroy'])->name('package.delete');
});
