<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('product_supplier', function (Blueprint $table) {
            $table->smallInteger('product_ProductID');
            $table->smallInteger('supplier_SupplierID');
            
        });
        
    }


    public function down(): void
    {
        Schema::dropIfExists('product_supplier');
    }
};
