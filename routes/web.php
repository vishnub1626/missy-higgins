<?php

use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

Route::get('newsletter/subscribe', [SubscriptionController::class, 'create']);
Route::post('newsletter/subscribe', [SubscriptionController::class, 'store']);