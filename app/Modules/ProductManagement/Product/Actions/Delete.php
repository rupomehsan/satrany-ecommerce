<?php

namespace App\Modules\ProductManagement\Product\Actions;

class Delete
{
    static $model = \App\Modules\ProductManagement\Product\Models\Model::class;
    static $ImageModel = \App\Modules\ProductManagement\Product\Models\ProductImageModel::class;

    public static function execute($id)
    {
        try {
            if (!$data = self::$model::find($id)) {
                return messageResponse('Data not found...', 404, 'error');
            }
            $data->delete();
            return messageResponse('Item Successfully deleted', 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
    public static function productImageDelete($id)
    {
        try {
            if (!$data = self::$ImageModel::find($id)) {
                return messageResponse('Data not found...', 404, 'error');
            }
            $data->delete();
            return messageResponse('Item Successfully deleted', 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
