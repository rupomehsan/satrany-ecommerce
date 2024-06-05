<?php

namespace App\Modules\UserManagement\User\Actions\Retailer;

use App\Modules\UserManagement\User\Validations\GetAllValidation;

class All
{
    static $model = \App\Modules\UserManagement\User\Models\Model::class;

    public static function execute(GetAllValidation $request)
    {
        try {

            $pageLimit = request()->input('limit') ?? 10;
            $orderByColumn = request()->input('sort_by_col');
            $orderByType = request()->input('sort_type');
            $status = request()->input('status');

            $with = ['user_address', 'user_address.user_address_contact_person'];

            $data = self::$model::query();



            if (request()->has('search') && request()->input('search')) {
                $searchKey = request()->input('search');
                $data = $data->where(function ($q) use ($searchKey) {
                    $q->where('name', $searchKey);
                    $q->orWhere('user_name', 'like', '%' . $searchKey . '%');
                });
            }

            if (request()->has('get_all') && (int)request()->input('get_all') === 1) {
                $data = $data
                    ->with($with)
                    ->where('role_id', 3)
                    ->where('status', $status)
                    ->limit($pageLimit)
                    ->orderBy($orderByColumn, $orderByType)
                    ->get();
            } else {
                $data = $data
                    ->with($with)
                    ->where('role_id', 3)
                    ->where('status', $status)
                    ->orderBy($orderByColumn, $orderByType)
                    ->paginate($pageLimit);


            }

            return entityResponse($data);
        } catch (\Exception $e) {
            return messageResponse($e->getMessage(), 500, 'server_error');
        }
    }
}
