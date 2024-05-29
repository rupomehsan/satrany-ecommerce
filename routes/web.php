<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;

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

Route::view('/', 'frontend.home.index')->name('home');
Route::view('/about-us', 'frontend.aboutus.index')->name('about-us');
Route::view('/terms-and-conditions', 'frontend.terms_condition.index')->name('terms-and-conditions');
Route::view('/return-and-refund', 'frontend.return_refund.index')->name('return-and-refund');
Route::view('/contact-us', 'frontend.contact.index')->name('contact-us');
Route::view('/product-details/{slug}', 'frontend.product.product-details')->name('product.details');
Route::view('/cart', 'frontend.cart.index')->name('cart');
Route::view('/checkout', 'frontend.checkout.index')->name('checkout');
Route::view('/wishlist', 'frontend.wishlist.index')->name('wishlist');


Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');
Auth::routes();
