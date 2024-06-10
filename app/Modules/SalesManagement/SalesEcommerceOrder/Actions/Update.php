<?php

namespace App\Modules\SalesManagement\SalesEcommerceOrder\Actions;

class Update
{
    static $model = \App\Modules\SalesManagement\SalesEcommerceOrder\Models\Model::class;

    public static function execute($request, $id)
    {
        try {

            if (!$data = self::$model::query()->where('id', $id)->first()) {
                return messageResponse('Data not found...', $data, 404, 'error');
            }
            $data->order_status = $request->order_status;
            $data->update();
            return messageResponse('Item updated successfully',  201, 'success', $data);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error', []);
        }
    }
}
