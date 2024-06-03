<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    static $productModel = \App\Modules\ProductManagement\Product\Actions\All::class;
    public function index()
    {
        $all_feature_products = self::$productModel::execute(request());
        return Inertia::render('Home/Index', [
            'all_feature_products' => $all_feature_products
        ]);
    }
}
