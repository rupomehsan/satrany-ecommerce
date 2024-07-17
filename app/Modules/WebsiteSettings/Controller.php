<?php

namespace App\Modules\WebsiteSettings;

use App\Modules\WebsiteSettings\Actions\All;
use App\Modules\WebsiteSettings\Actions\Delete;
use App\Modules\WebsiteSettings\Actions\Show;
use App\Modules\WebsiteSettings\Actions\Store;
use App\Modules\WebsiteSettings\Actions\Update;
use App\Modules\WebsiteSettings\Validations\Validation;
use App\Modules\WebsiteSettings\Actions\BulkActions;
use App\Modules\WebsiteSettings\Actions\Dashboard;
use App\Http\Controllers\Controller as ControllersController;


class Controller extends ControllersController
{

    public function visitor_count()
    {
        $data = All::visitor_count();
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

    public function destroy($id)
    {
        $data = Delete::execute($id);
        return $data;
    }
    public function bulkAction()
    {
        $data = BulkActions::execute();
        return $data;
    }
    public function DashboardInfo()
    {
        $data = Dashboard::execute();
        return $data;
    }

}
