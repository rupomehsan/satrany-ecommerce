<?php

namespace App\Modules\SalesManagement\SalesEcommerceOrder;

use App\Modules\SalesManagement\SalesEcommerceOrder\Actions\All;
use App\Modules\SalesManagement\SalesEcommerceOrder\Actions\Destroy;
use App\Modules\SalesManagement\SalesEcommerceOrder\Actions\Show;
use App\Modules\SalesManagement\SalesEcommerceOrder\Actions\Store;
use App\Modules\SalesManagement\SalesEcommerceOrder\Actions\Update;
use App\Modules\SalesManagement\SalesEcommerceOrder\Actions\SoftDelete;
use App\Modules\SalesManagement\SalesEcommerceOrder\Actions\Restore;
use App\Modules\SalesManagement\SalesEcommerceOrder\Actions\Import;
use App\Modules\SalesManagement\SalesEcommerceOrder\Validations\BulkActionsValidation;
use App\Modules\SalesManagement\SalesEcommerceOrder\Validations\GetAllValidation;
use App\Modules\SalesManagement\SalesEcommerceOrder\Validations\Validation;
use App\Modules\SalesManagement\SalesEcommerceOrder\Actions\BulkActions;
use App\Http\Controllers\Controller as ControllersController;


class Controller extends ControllersController
{

    public function index()
    {
        $data = All::execute();
        return $data;
    }

    public function store()
    {
        $data = Store::execute();
        return $data;
    }

    public function show($id)
    {
        $data = Show::execute($id);
        return $data;
    }

    public function update(Validation $request, $id)
    {
        $data = Update::execute($request, $id);
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
