<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='\App\Modules\TrendingVideo\Database\create_trending_videos_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('trending_videos', function (Blueprint $table) {
            $table->id();
            $table->string('url')->nullable();
            $table->string('video')->nullable();
            $table->string('type')->nullable();

            $table->bigInteger('creator')->unsigned()->nullable();
            $table->string('slug', 50)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trending_videos');
    }
};