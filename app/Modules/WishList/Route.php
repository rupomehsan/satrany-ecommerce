<?php

use App\Modules\WishList\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('add-to-wish-list', [Controller::class, 'store']);
    Route::get('get-all-wish-list', [Controller::class, 'index']);
    Route::delete('remove-wishlist-item/{id}', [Controller::class,'destroy']);
});
