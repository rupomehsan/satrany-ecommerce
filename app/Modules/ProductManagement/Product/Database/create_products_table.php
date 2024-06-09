<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='\App\Modules\ProductManagement\Product\Database\create_products_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('short_description')->nullable();
            $table->string('description')->nullable();
            $table->string('menufecturer_id')->nullable();
            $table->string('brand_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('sku')->nullable();
            $table->string('unit')->nullable();
            $table->string('quantity')->nullable();
            $table->string('alert_quantity')->nullable();
            $table->string('saller_points')->nullable();
            $table->tinyInteger('is_returnable')->nullable();
            $table->datetime('expiration_days')->nullable();
            $table->string('price')->nullable();
            $table->string('purchase_account')->nullable();
            $table->enum('discount_type',['percentage','amount'])->nullable();
            $table->string('discount_amount')->nullable();
            $table->string('tax_id')->nullable();
            $table->string('vat_on_sale')->nullable();
            $table->string('vat_on_purchase')->nullable();

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
        Schema::dropIfExists('products');
    }
};
