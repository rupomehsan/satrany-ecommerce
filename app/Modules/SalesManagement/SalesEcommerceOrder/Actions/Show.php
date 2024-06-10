<?php

namespace App\Modules\SalesManagement\SalesEcommerceOrder\Actions;



class Show
{
    static $model = \App\Modules\SalesManagement\SalesEcommerceOrder\Models\Model::class;

    public static function execute($id)
    {
        try {

            $with = ['order_products','order_products.product','order_products.product.images'];

            if (!$data = self::$model::query()->with($with)->where('id', $id)->first()) {
                return messageResponse('Data not found...',$data, 404, 'error');
            }
            return entityResponse($data);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error',[]);
        }
    }
}
