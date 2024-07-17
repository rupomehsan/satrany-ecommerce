<?php

use App\Modules\WebsiteSettings\Controller;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

    Route::get('visitor-count', [Controller::class, 'visitor_count']);
    Route::get('get-dashboard-info', [Controller::class, 'DashboardInfo']);
});
