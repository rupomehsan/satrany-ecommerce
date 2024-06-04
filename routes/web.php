<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [\App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home.index');

Route::get('/about-us', [\App\Http\Controllers\Frontend\PageInfoController::class, 'aboutUs'])->name('page.aboutUs');
Route::get('/return-and-refund', [\App\Http\Controllers\Frontend\PageInfoController::class, 'returnAndRefund'])->name('page.returnAndRefund');
Route::get('/terms-and-conditions', [\App\Http\Controllers\Frontend\PageInfoController::class, 'termsAndConditions'])->name('page.termsAndConditions');
Route::get('/contact-us', [\App\Http\Controllers\Frontend\PageInfoController::class, 'contactUs'])->name('page.contactUs');

Route::get('/products', [\App\Http\Controllers\Frontend\ProductController::class, 'index'])->name('product.index');
Route::get('/product-details/{slug}', [\App\Http\Controllers\Frontend\ProductController::class, 'productDetails'])->name('product.details');

Route::get('/cart', [\App\Http\Controllers\Frontend\CartController::class, 'index'])->name('cart.index');
Route::get('/checkout', [\App\Http\Controllers\Frontend\CheckoutController::class, 'index'])->name('checkout.index');
Route::get('/wishlist', [\App\Http\Controllers\Frontend\WishlistController::class, 'index'])->name('checkout.index');
Route::get('/compare-list', [\App\Http\Controllers\Frontend\CompareListController::class, 'index'])->name('checkout.index');

Route::get('/profile', [\App\Http\Controllers\Frontend\CustomerController::class, 'CustomerProfile'])->name('CustomerProfile');
Route::get('/login', [\App\Http\Controllers\Frontend\LoginController::class, 'index'])->name('login.index');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');
// Auth::routes();
