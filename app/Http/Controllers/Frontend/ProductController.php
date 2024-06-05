<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    static $productModel = \App\Modules\ProductManagement\Product\Models\Model::class;

    public function index()
    {
        return Inertia::render('Product/Index');
    }
    public function productDetails($slug)
    {
        $producDetails = self::$productModel::with('product_categories', 'product_images')->where('slug', $slug)->first();
        $relatedProduct = self::$productModel::whereHas('product_categories')->limit(10)->get();
        return Inertia::render('Product/Details', [
            'productDetailsData' => $producDetails,
            'relatedProduct' => $relatedProduct
        ]);
    }
}
