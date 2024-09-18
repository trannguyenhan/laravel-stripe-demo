<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('stripe', [\App\Http\Controllers\StripeController::class, 'stripe'])->name('stripe');
Route::get('success', [\App\Http\Controllers\StripeController::class, 'success'])->name('success');
Route::get('cancel', [\App\Http\Controllers\StripeController::class, 'cancel'])->name('cancel');
Route::post('payment', [\App\Http\Controllers\StripeController::class, 'payStripe'])->name('payStripe');
