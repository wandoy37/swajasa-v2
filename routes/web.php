<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BenefitController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ServiceController;
use App\Models\Benefit;
use App\Models\Message;
use App\Models\Package;
use App\Models\Service;
use Illuminate\Routing\RouteRegistrar;
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
Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/service', [HomeController::class, 'service'])->name('service');

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Service details
Route::get('/service/{slug}/show', [HomeController::class, 'service_show']);

//succes send message
Route::get('/success', function () {
    return view('home.success');
});

// action send meesage
Route::post('/message/create', [HomeController::class, 'messageStore'])->name('message.create');
// End Landing Pages

// Admin Group
Route::prefix('admin')->middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Pages
    Route::get('/pages', [DashboardController::class, 'pages'])->name('pages');

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

    // Message / pesan
    Route::get('/message', [MessageController::class, 'index'])->name('message');
    // view pesan
    Route::get('/message/{id}/view', [MessageController::class, 'show']);
    // Update status pesan
    Route::patch('/message/{id}', [MessageController::class, 'update']);
    // Delete pesan
    Route::delete('/message/{id}', [MessageController::class, 'destroy']);

    // Configs
    Route::get('/configs', [ConfigController::class, 'index'])->name('configs');
    // App
    Route::get('/configs/apps', [ConfigController::class, 'app'])->name('app');
    // Update App
    Route::patch('/configs/apps/{id}', [ConfigController::class, 'app_update']);

    // About
    Route::get('/configs/abouts', [ConfigController::class, 'abouts'])->name('abouts');
    // Update App
    Route::patch('/configs/abouts/{id}', [ConfigController::class, 'update_abouts']);

    // Contacts
    Route::get('/configs/contacts', [ConfigController::class, 'contacts'])->name('contacts');
    // update contact
    Route::patch('/configs/contacts/{id}', [ConfigController::class, 'update_contacts']);
});
