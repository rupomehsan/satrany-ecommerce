<?php

namespace App\Modules\ProductManagement\Product\Actions;

use App\Modules\ProductManagement\Product\Validations\Validation;


class Store
{
    static $model = \App\Modules\ProductManagement\Product\Models\Model::class;
    static $imageModel = \App\Modules\ProductManagement\Product\Models\ProductImageModel::class;

    public static function execute(Validation $request)
    {
        try {
            // dd($request->all());
            $requestData = $request->validated();
            if ($product = self::$model::query()->create($requestData)) {
                if ($request->hasFile('images')) {
                    foreach ($request->images as $key => $image) {
                        $url = uploader($image, 'uploads/product');
                        self::$imageModel::create([
                            'product_id' => $product->id,
                            'url' => $url
                        ]);
                    }
                }
                return messageResponse('Item added successfully', 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
