<?php

namespace App\Modules\CompareList\Actions;

use App\Modules\CompareList\Validations\Validation;


class Store
{
    static $model = \App\Modules\CompareList\Models\Model::class;

    public static function execute(Validation $request)
    {
        try {
            if (session_status() == PHP_SESSION_NONE) {

                session_start();
            }

            if (isset($_SESSION['expiration']) && $_SESSION['expiration'] < time()) {

                session_unset();

                session_destroy();
            }

            $sessionId = $_SESSION['sessionId'] ?? session_id();

            $expiration = time() + 3600;

            $_SESSION['expiration'] = $expiration;

            $_SESSION['sessionId'] = $sessionId;

            $data = [

                'session_id' => $sessionId,
                'product_id' => $request->productId,

            ];

            $isExistInCart = self::$model::query()

                ->where('session_id', $sessionId)

                ->where('product_id', $request->productId)

                ->exists();

            if ($isExistInCart) {
                return messageResponse('Already in compare list', 200,'warning');

            }

            if (self::$model::query()->create($data)) {

                return messageResponse('Added to compare list', 201);
            }
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
