<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->string('CustomerID', 5)->primary();
            $table->string('name', 100);
            $table->string('phone', 15);
            $table->string('email', 50);
            $table->string('address', 100);
            $table->string('postal_code', 10);
            $table->string('NIF');
            $table->timestamps();
        });
        
    }

    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
