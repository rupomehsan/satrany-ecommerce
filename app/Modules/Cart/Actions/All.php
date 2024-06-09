<?php

namespace App\Modules\Cart\Actions;

class All
{
    static $model = \App\Modules\Cart\Models\Model::class;

    public static function execute()
    {
        try {
            // dd(request()->all());
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            $offset = request()->input('offset') ?? 10;
            $condition = [];
            $with = ['product:id,title,price,slug','product.images'];
            $data = self::$model::query();

            $sessionId = $_SESSION['sessionId'] ?? session_id();
            if ($sessionId) {
                $condition['session_id'] = $sessionId;
            }

            $data = $data->with($with)->where($condition)->get();

            return entityResponse($data);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
