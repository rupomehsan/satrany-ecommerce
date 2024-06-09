<?php

namespace App\Modules\ProductManagement\ProductCategory\Actions;

use App\Modules\ProductManagement\ProductCategory\Validations\Validation;


class Store
{
    static $model = \App\Modules\ProductManagement\ProductCategory\Models\Model::class;

    public static function execute(Validation $request)
    {
        try {
            $requestData = $request->validated();
            if($request->hasFile('image')) {
                $image = $request->file('image');
                $url = uploader($image, 'uploads/product-category');
                $requestData['image'] = $url;
            }
            if (self::$model::query()->create($requestData)) {
                return messageResponse('Item added successfully', 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
