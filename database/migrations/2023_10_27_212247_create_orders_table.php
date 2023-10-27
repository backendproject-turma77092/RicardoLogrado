<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string("brand");
            $table->string("model");
            $table->string("serial_number")->unique();
            $table->string("suplier");
            $table->string("type"); //Electronic or Lighting
            $table->decimal("unit_price");
            $table->integer("quantity");
            $table->decimal("total_price"); //unit_price x quantity
            $table->date("order_date");
            $table->date("shipped_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
