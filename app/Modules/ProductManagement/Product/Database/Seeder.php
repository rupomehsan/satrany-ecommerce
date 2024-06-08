<?php
namespace App\Modules\ProductManagement\Product\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\ProductManagement\Product\Database\Seeder"
     */
    static $model = \App\Modules\ProductManagement\Product\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
        self::$model::create([
            'title' => facker()->name,
            'type' => facker()->name,
            'short_description' => facker()->name,
            'description' => facker()->name,
            'menufecturer_id' => facker()->name,
            'brand_id' => facker()->name,
            'sku' => facker()->name,
            'unit' => facker()->name,
            'alert_quantity' => facker()->name,
            'saller_points' => facker()->name,
            'is_returnable' => facker()->name,
            'expiration_days' => facker()->name,
            'purchase_price' => facker()->name,
            'purchase_account' => facker()->name,
            'discount_type' => facker()->name,
            'discount_amount' => facker()->name,
            'tax_id' => facker()->name,
            'tax_type' => facker()->name,
            'vat_on_sale' => facker()->name,
            'vat_on_purchase' => facker()->name,
            ]);
        }
    }
}