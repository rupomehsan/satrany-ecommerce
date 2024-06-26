<?php

namespace App\Modules\SalesManagement\SalesEcommerceOrder\Actions;

class BulkActions
{
    static $model = \App\Modules\SalesManagement\SalesEcommerceOrder\Models\Model::class;

    public static function execute()
    {
        try {
            if (request()->input('action') == 'active') {
                if (request()->input('data') && count(request()->input('data'))) {
                    $data = request()->input('data');
                    self::$model::whereIn('id', $data)->update(['status' => 'active']);
                }
                return messageResponse("Items are activeted Successfully ");
            }
            if (request()->input('action') == 'inactive') {
                if (request()->input('data') && count(request()->input('data'))) {
                    $data = request()->input('data');
                    self::$model::whereIn('id', $data)->update(['status' => 'inactive']);
                    return messageResponse("Items are inactiveted Successfully ");
                }
            }

            if (request()->input('action') == 'delete') {
                if (request()->input('data') && count(request()->input('data'))) {
                    $data = request()->input('data');
                    self::$model::whereIn('id', $data)->delete();
                    return messageResponse("Items are deleted Successfully ");
                }
            }

            return messageResponse("Items are Successfully " . request()->input('action'),[], 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}
