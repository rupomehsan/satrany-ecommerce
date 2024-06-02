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
        for ($i = 1; $i < 5; $i++) {
            self::$model::create([
                'title' => facker()->title(),
                'short_description' => facker()->text(),
                'description' => facker()->text(),
                'image' => facker()->imageUrl(1100, 350),
                'link' => facker()->url(),
            ]);
        }
    }
}
