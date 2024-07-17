<?php

use App\Modules\TrendingVideo\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::apiResource('trending-videos', Controller::class);
    Route::post('trending-videos/bulk-action', [Controller::class, 'bulkAction']);
});