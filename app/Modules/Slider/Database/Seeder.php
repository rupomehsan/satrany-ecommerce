<?php
namespace App\Modules\Slider\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\Slider\Database\Seeder"
     */
    static $model = \App\Modules\Slider\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
        self::$model::create([
            'title' => facker()->name,
            'short_description' => facker()->name,
            'description' => facker()->name,
            'link' => facker()->name,
            ]);
        }
    }
}