<?php
namespace App\Modules\TrendingVideo\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\TrendingVideo\Database\Seeder"
     */
    static $model = \App\Modules\TrendingVideo\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
        self::$model::create([
            'url' => facker()->name,
            'video' => facker()->name,
            'type' => facker()->name,
            ]);
        }
    }
}