<?php
namespace App\Modules\ProductManagement\ProductVarient\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\ProductManagement\ProductVarient\Database\Seeder"
     */
    static $model = \App\Modules\ProductManagement\ProductVarient\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
        self::$model::create([
            'product_varient_group_id' => facker()->name,
            'title' => facker()->name,
            'is_required' => facker()->name,
            ]);
        }
    }
}