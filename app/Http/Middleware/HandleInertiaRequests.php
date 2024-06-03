<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     *
     * @return array<string, mixed>
     */
    static $CategoryModel = \App\Modules\ProductManagement\ProductCategory\Models\Model::class;
    static $allCarts = \App\Modules\Cart\Actions\All::class;

    public function share(Request $request): array
    {
        $category = self::$CategoryModel::limit(5)->get();
        $carts = self::$allCarts::execute();

        return array_merge(parent::share($request), [
            'categories' => $category,
            "cartItems" => $carts
        ]);
    }
}
