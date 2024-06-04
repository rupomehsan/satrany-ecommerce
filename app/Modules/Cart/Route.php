<?php

use App\Modules\Cart\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('add-to-cart', [Controller::class,'store']);
    Route::post('cart-update', [Controller::class,'update']);
    Route::get('get-all-carts', [Controller::class,'index']);
    Route::delete('remove-cart-item/{id}', [Controller::class,'delete']);

    Route::post('customer-order', [Controller::class,'customerOrder']);
});
