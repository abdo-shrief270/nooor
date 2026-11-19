<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DonationMethodController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\SiteImageController;
use App\Http\Controllers\PublicSiteImageController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/media/site-images/{siteImage}', PublicSiteImageController::class)->name('site-images.show');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/privacy', fn (SiteController $controller) => $controller->page('privacy-policy'))->name('privacy');
Route::get('/terms', fn (SiteController $controller) => $controller->page('terms-and-conditions'))->name('terms');

Route::middleware('guest')->prefix('admin')->name('admin.')->group(function (): void {
    Route::get('/login', [AuthController::class, 'create'])->name('login');
    Route::post('/login', [AuthController::class, 'store'])->middleware('throttle:6,1')->name('login.store');
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function (): void {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::post('/logout', [AuthController::class, 'destroy'])->name('logout');
    Route::get('/settings', [SettingsController::class, 'edit'])->name('settings.edit');
    Route::put('/settings', [SettingsController::class, 'update'])->name('settings.update');
    Route::get('/images', [SiteImageController::class, 'index'])->name('images.index');
    Route::post('/images', [SiteImageController::class, 'store'])->name('images.store');
    Route::put('/images/{siteImage}', [SiteImageController::class, 'update'])->name('images.update');
    Route::delete('/images/{siteImage}', [SiteImageController::class, 'destroy'])->name('images.destroy');
    Route::get('/donations', [DonationMethodController::class, 'index'])->name('donations.index');
    Route::post('/donations', [DonationMethodController::class, 'store'])->name('donations.store');
    Route::put('/donations/{donationMethod}', [DonationMethodController::class, 'update'])->name('donations.update');
    Route::delete('/donations/{donationMethod}', [DonationMethodController::class, 'destroy'])->name('donations.destroy');
});
