<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('product_supplier');
        Schema::create('product_supplier', function (Blueprint $table) {
            $table->foreignId('ProductID')->constrained('products');
            $table->foreignId('SupplierID')->constrained('suppliers');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_supplier');
    }
};
