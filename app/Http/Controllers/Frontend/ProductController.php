<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    static $productModel = \App\Modules\ProductManagement\Product\Models\Model::class;
    static $productModelAll = \App\Modules\ProductManagement\Product\Actions\All::class;
    public function index()
    {

        $all_feature_products = self::$productModelAll::execute(request());
        return Inertia::render('Product/Index', [
            'all_feature_products' => $all_feature_products,
        ]);
    }
    public function productDetails($slug)
    {
        $producDetails = self::$productModel::with('category', 'images', 'brand')->where('slug', $slug)->first();
        $relatedProduct = self::$productModel::with('category', 'images', 'brand')->whereHas('category')->limit(10)->get();
        // dd($producDetails, $relatedProduct);
        return Inertia::render('Product/Details', [
            'productDetailsData' => $producDetails,
            'relatedProduct' => $relatedProduct
        ]);
    }
}
