<?php

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
// HOME PAGE
// Route::get('/', function () {
//     return view('layouts.master');
// });
Route::get('/', function () {
    return view('home.dashboard');
});

Route::get('/homeOnboarding', function () {
    return view('home.onboarding');
})->name('onboarding');

Route::get('/homeSeller', function () {
    return view('home.seller');
});
Route::get('/homeCollections', function () {
    return view('home.collections');
});
Route::get('/homePortfolio', function () {
    return view('home.portfolio');
});
Route::get('/homeReconciliation', function () {
    return view('home.reconcilitation');
});

// SELLER PAGE
Route::get('/sellerDashboard', function () {
    return view('seller.dashboard');
});
Route::get('/sellerCA', function () {
    return view('seller.creditavailability');
});
Route::get('/sellerCollections', function () {
    return view('seller.collections');
});
Route::get('/sellerPortfolio', function () {
    return view('seller.portfolio');
});
Route::get('/sellerReconciliation', function () {
    return view('seller.reconcilitation');
});
