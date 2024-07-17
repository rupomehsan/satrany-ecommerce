<?php

namespace App\Modules\WebsiteSettings\Actions;

class Dashboard
{
    static $vitor_count_model = \App\Modules\WebsiteSettings\Models\VisitorCountModel::class;
    static $product_model = \App\Modules\ProductManagement\Product\Models\Model::class;
    static $category_model = \App\Modules\ProductManagement\ProductCategory\Models\Model::class;
    static $brand_model = \App\Modules\ProductManagement\ProductBrand\Models\Model::class;
    static $orders = \App\Modules\SalesManagement\SalesEcommerceOrder\Models\Model::class;

    public static function execute()
    {
        try {
            // dd(request()->all());
            $visitor = self::$vitor_count_model::get()->count();
            $product = self::$product_model::get()->count();
            $category = self::$category_model::get()->count();
            $brand = self::$brand_model::get()->count();
            $with = ['order_products', 'order_products.product', 'order_products.product.images'];
            $orders = self::$orders::with($with)->limit(5)->latest()->get();

            $data = [
                'visitor' => $visitor,
                'product' => $product,
                'category' => $category,
                'brand' => $brand,
                'orders' => $orders,
            ];


            return entityResponse($data);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
