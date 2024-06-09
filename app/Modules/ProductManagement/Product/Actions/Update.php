<?php

namespace App\Modules\ProductManagement\Product\Actions;

use App\Modules\ProductManagement\Product\Validations\Validation;

class Update
{
    static $model = \App\Modules\ProductManagement\Product\Models\Model::class;
    static $imageModel = \App\Modules\ProductManagement\Product\Models\ProductImageModel::class;

    public static function execute(Validation $request, $id)
    {
        try {
            if (!$data = self::$model::query()->where('id', $id)->first()) {
                return messageResponse('Data not found...', 404, 'error');
            }
            $requestData = $request->validated();

            if ($data->update($requestData)) {
                if ($request->hasFile('images')) {
                    foreach ($request->images as $key => $image) {
                        $url = uploader($image, 'uploads/product');
                        self::$imageModel::create([
                            'product_id' => $data->id,
                            'url' => $url
                        ]);
                    }
                }
            }
            return messageResponse('Item updated successfully');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
