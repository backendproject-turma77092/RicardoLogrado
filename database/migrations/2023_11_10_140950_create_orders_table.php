<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            //$table->smallInteger('ProductID'); APAGAR da Migration, Model e controlador
            $table->smallInteger('OrderID')->primary();
            //$table->smallInteger('productID');

            // $table->string('brand', 50); Os dados do Product vão ser
            // $table->string('model', 100); puxados pela tabela relacional
            // $table->string('serial_number', 50);
            // $table->string('type', 45);
            // $table->decimal('unit_price', 50);
            
            //$table->string('quantity'); // mover para a tabela relacional só migration e model
            $table->string('postal_code');
            $table->decimal('total_price', 50);
            $table->dateTime('order_date');
            $table->dateTime('shipped_date')->nullable(); // Assuming shipped_date can be null if not yet shipped
            // $table->string('customer_CustomerID', 5);
            // $table->foreign('customer_CustomerID')->references('CustomerID')->on('customers');
            // $table->foreign('ProductID')->references('ProductID')->on('products');
            $table->timestamps();
        });
        
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
