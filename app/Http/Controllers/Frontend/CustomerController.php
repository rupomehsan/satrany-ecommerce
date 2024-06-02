<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CustomerController extends Controller
{
    public function CustomerProfile()
    {
        return Inertia::render('CustomerProfile/Index');
    }
}
