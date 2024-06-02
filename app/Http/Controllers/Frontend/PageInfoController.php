<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PageInfoController extends Controller
{
    public function aboutUs()
    {
        return Inertia::render('AboutUs/Index');
    }
    public function returnAndRefund()
    {
        return Inertia::render('ReturnAndRefund/Index');
    }
    public function termsAndConditions()
    {
        return Inertia::render('TermsAndCondition/Index');
    }
    public function contactUs()
    {
        return Inertia::render('ContactUs/Index');
    }
}
