<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Models\TravelPackage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])
    ->name('home');
Route::get('/detail', [DetailController::class, 'index'])
    ->name('detail');
Route::get('/checkout', [CheckoutController::class, 'index'])
    ->name('checkout');
Route::get('/checkout/success', [CheckoutController::class, 'success'])
    ->name('success');

// Route::get('admin', [DashboardController::class, 'index'])->name('admin');
Route::prefix('admin')
    // ->namespace('Admin')
    ->middleware('auth', 'admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])
            ->name('dashboard');
        Route::resource('travel-package', TravelPackageController::class);
        Route::resource('gallery', GalleryController::class);
    });

Auth::routes(['verify' => true]);
