<?php

namespace App\Modules\VatManagement\VatGroup\Actions;

class Import
{
    static $model = \App\Modules\VatManagement\VatGroup\Models\Model::class;

    public static function execute()
    {
        try {
            foreach (request()->data as $row) {
                 self::$model::create([
                    "title" => $row['title'],

                    "percentage" => $row['percentage'],

                ]);
            }
            return messageResponse('Item Successfully updated', [], 200, 'success');
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(),[], 500, 'server_error');
        }
    }
}
