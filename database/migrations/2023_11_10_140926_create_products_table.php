<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('products');
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 50);
            $table->string('model', 100);
            $table->string('serial_number', 50);
            $table->string('type', 45);
            $table->decimal('unit_price', 10, 2);
            $table->string('units_in_stock');
            $table->string('units_on_order');
            $table->string('discontinued');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
