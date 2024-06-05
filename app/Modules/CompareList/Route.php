<?php

use App\Modules\CompareList\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::post('add-to-compare-list', [Controller::class, 'store']);
    Route::get('get-all-compare-list', [Controller::class, 'index']);
    Route::delete('remove-compare-item/{id}', [Controller::class,'destroy']);
});
