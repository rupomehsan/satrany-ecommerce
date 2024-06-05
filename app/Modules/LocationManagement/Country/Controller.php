<?php

namespace App\Modules\LocationManagement\Country;

use App\Modules\LocationManagement\Country\Actions\All;
use App\Modules\LocationManagement\Country\Actions\Destroy;
use App\Modules\LocationManagement\Country\Actions\Show;
use App\Modules\LocationManagement\Country\Actions\Store;
use App\Modules\LocationManagement\Country\Actions\Update;
use App\Modules\LocationManagement\Country\Actions\SoftDelete;
use App\Modules\LocationManagement\Country\Actions\Restore;
use App\Modules\LocationManagement\Country\Actions\Import;
use App\Modules\LocationManagement\Country\Validations\BulkActionsValidation;
use App\Modules\LocationManagement\Country\Validations\GetAllValidation;
use App\Modules\LocationManagement\Country\Validations\Validation;
use App\Modules\LocationManagement\Country\Actions\BulkActions;
use App\Http\Controllers\Controller as ControllersController;


class Controller extends ControllersController
{

    public function index(GetAllValidation $request)
    {
        $data = All::execute($request);
        return $data;
    }

    public function store(Validation $request)
    {
        $data = Store::execute($request);
        return $data;
    }

    public function show($slug)
    {
        $data = Show::execute($slug);
        return $data;
    }

    public function update(Validation $request, $slug)
    {
        $data = Update::execute($request, $slug);
        return $data;
    }

    public function softDelete()
    {
        $data = SoftDelete::execute();
        return $data;
    }
    public function destroy($slug)
    {
        $data = Destroy::execute($slug);
        return $data;
    }
    public function restore()
    {
        $data = Restore::execute();
        return $data;
    }
    public function import()
    {
        $data = Import::execute();
        return $data;
    }
    public function bulkAction(BulkActionsValidation $request)
    {
        $data = BulkActions::execute($request);
        return $data;
    }

}