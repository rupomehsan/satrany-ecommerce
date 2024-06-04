<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CartController extends Controller
{
    static $model = \App\Modules\Cart\Actions\All::class;
    public function index()
    {
        $cart = self::$model::execute(request());
        return Inertia::render('Cart/Index',[
            "user_carts" => $cart
        ]);
    }
}
