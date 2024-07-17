<?php
namespace App\Modules\WebsiteSettings\Database;

use Illuminate\Database\Seeder as SeederClass;

class Seeder extends SeederClass
{
    /**
     * Run the database seeds.
     php artisan db:seed --class="\App\Modules\WebsiteSettings\Database\Seeder"
     */
    static $model = \App\Modules\WebsiteSettings\Models\Model::class;
    public function run(): void
    {

        self::$model::truncate();
        for ($i = 1; $i < 100; $i++) {
        self::$model::create([
            ]);
        }
    }
}