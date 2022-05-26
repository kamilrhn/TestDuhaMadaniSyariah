<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VoucherController;

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

Auth::routes(['verify' => true]);

// dashboard Routes
// Route::get('/', [DashboardController::class, 'dashboardEcommerce'])->name('dashboard-ecommerce')->middleware('verified');
Route::get('/', [DashboardController::class, 'dashboardEcommerce'])->name('dashboard-ecommerce');

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('ecommerce', [DashboardController::class, 'dashboardEcommerce'])->name('dashboard-ecommerce');
});

//Application Routes
Route::group(['prefix' => 'product'], function () {
    Route::get('/', [ProductController::class, 'show'])->name('show-product');
});

// Content Page Routes
Route::group(['prefix' => 'transaction'], function () {
    Route::get('grid', [ContentController::class, 'gridContent'])->name('content-grid');
});

// icons
Route::group(['prefix' => 'voucher'], function () {
    Route::get('/', [VoucherController::class, 'show'])->name('show-voucher');
});

// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap'])->name('lang-locale');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
