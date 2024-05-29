<?php
namespace App\Modules\CompareList\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\CompareList\Database\Seeder"
     */
    static $model = \App\Modules\CompareList\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
        self::$model::create([
            'user_id' => facker()->name,
            'product_id' => facker()->name,
            'session_id' => facker()->name,
            ]);
        }
    }
}