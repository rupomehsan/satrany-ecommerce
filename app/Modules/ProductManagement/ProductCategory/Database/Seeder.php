<?php
namespace App\Modules\ProductManagement\ProductCategory\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\ProductManagement\ProductCategory\Database\Seeder"
     */
    static $model = \App\Modules\ProductManagement\ProductCategory\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
        self::$model::create([
            'title' => facker()->name,
            'parent_id' => facker()->name,
            'serial' => facker()->name,
            'image' => facker()->name,
            ]);
        }
    }
}