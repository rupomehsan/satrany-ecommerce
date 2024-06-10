<?php

namespace App\Modules\Cart\Actions;

use App\Modules\Cart\Validations\Validation;

class Update
{
    static $model = \App\Modules\Cart\Models\Model::class;

    public static function execute()
    {
        try {
            // dd(request()->all());
            $ids = [];
            if (request()->cart && count(request()->cart)) {
                foreach (request()->cart as $key => $item) {
                    $data = self::$model::find($key);
                    if ($data) {

                        $data->quantity = $item;
                        $data->save();
                        $ids[] = $key;
                    }
                }
            }

            $cartData = self::$model::with(['product:id,title,price,slug', 'product.images'])->whereIn('id', $ids)->get();
            return messageResponse('Item updated successfully', 200, 'success', $cartData);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }

}
