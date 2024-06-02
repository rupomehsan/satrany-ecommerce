<?php

namespace App\Modules\Cart;

use App\Modules\Cart\Actions\All;
use App\Modules\Cart\Actions\Delete;
use App\Modules\Cart\Actions\Show;
use App\Modules\Cart\Actions\Store;
use App\Modules\Cart\Actions\Update;
use App\Modules\Cart\Validations\Validation;
use App\Modules\Cart\Actions\BulkActions;
use App\Http\Controllers\Controller as ControllersController;


class Controller extends ControllersController
{

    public function index()
    {
        $data = All::execute();
        return $data;
    }

    public function store(Validation $request)
    {
        $data = Store::execute($request);
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

    public function delete($id)
    {
        $data = Delete::execute($id);
        return $data;
    }
    public function bulkAction()
    {
        $data = BulkActions::execute();
        return $data;
    }

}
