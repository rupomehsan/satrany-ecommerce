<?php

namespace App\Modules\StockManagement\ProductWearHouseBranch\Actions;

class Import
{
    static $model = \App\Modules\StockManagement\ProductWearHouseBranch\Models\Model::class;

    public static function execute()
    {
        try {
            foreach (request()->data as $row) {
                 self::$model::create([
                    "title" => $row['title'],

                ]);
            }
            return messageResponse('Item Successfully updated', [], 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}