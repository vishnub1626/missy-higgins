<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\AdminAuthenticationController;
use App\Http\Controllers\NewsletterController;

Route::get('newsletter/subscribe', [SubscriptionController::class, 'create']);
Route::post('newsletter/subscribe', [SubscriptionController::class, 'store']);


Route::group(['prefix' => 'admin'], function () {
    Route::get('login', [AdminAuthenticationController::class, 'show'])->name('admin-login');
    Route::post('login', [AdminAuthenticationController::class, 'login']);
    Route::get('logout', [AdminAuthenticationController::class, 'logout']);

    Route::middleware(['auth'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'show']);

        Route::delete('subscriptions/{subscription}', [SubscriptionController::class, 'destroy']);

        Route::get('newsletter/send', [NewsletterController::class, 'show']);
        Route::post('newsletter/send', [NewsletterController::class, 'store']);
    });
});

Route::get('/mailable', function () {
    $newsletter = App\Models\Newsletter::latest()->first();

    return new App\Mail\NewsletterCreated($newsletter);
});