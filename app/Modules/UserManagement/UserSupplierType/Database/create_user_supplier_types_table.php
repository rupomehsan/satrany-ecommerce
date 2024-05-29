<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='\App\Modules\UserManagement\UserSupplierType\Database\create_user_supplier_types_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_supplier_types', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();

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
        Schema::dropIfExists('user_supplier_types');
    }
};