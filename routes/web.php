<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\AdminAuthenticationController;

Route::get('newsletter/subscribe', [SubscriptionController::class, 'create']);
Route::post('newsletter/subscribe', [SubscriptionController::class, 'store']);


Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [AdminAuthenticationController::class, 'show'])->name('admin-login');
    Route::post('login', [AdminAuthenticationController::class, 'login']);
    Route::get('logout', [AdminAuthenticationController::class, 'logout']);

    Route::middleware(['auth'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'show']);

        Route::delete('subscriptions/{subscription}', [SubscriptionController::class, 'destroy']);
    });
});