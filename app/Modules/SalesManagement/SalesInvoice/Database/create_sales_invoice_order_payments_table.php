<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     php artisan migrate --path='\App\Modules\SalesManagement\SalesOrder\Database\create_sales_invoice_order_payments_table.php'
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sales_invoice_order_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('sales_invoice_order_id')->nullable();
            $table->bigInteger('customer_id')->nullable();
            $table->date('date')->nullable();
            $table->string('trx_id', 20)->nullable();
            $table->float('amount')->nullable();

            $table->bigInteger('creator')->unsigned()->nullable();
            $table->string('slug', 150)->nullable();
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_invoice_order_payments');
    }
};
