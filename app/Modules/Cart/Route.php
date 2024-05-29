<?php

use App\Modules\Cart\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('add-to-cart', [Controller::class,'store']);
});
