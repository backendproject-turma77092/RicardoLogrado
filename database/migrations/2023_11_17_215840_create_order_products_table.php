<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('order_products');
        Schema::create('order_products', function (Blueprint $table) {
            $table->foreignId('OrderID')->constrained('orders');
            $table->foreignId('ProductID')->constrained('products');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_products');
    }
};
