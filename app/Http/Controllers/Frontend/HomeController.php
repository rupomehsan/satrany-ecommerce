<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    static $CategoryModel = \App\Modules\ProductManagement\ProductCategory\Models\Model::class;
    public function index()
    {
        $category = self::$CategoryModel::limit(5)->get();
        return Inertia::render('Home/Index', [
            'categories' => $category
        ]);
    }
}
