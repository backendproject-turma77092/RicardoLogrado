<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('suppliers');
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name', 50);
            $table->string('phone', 24);
            $table->string('email', 50);
            $table->string('address', 100);
            $table->string('postal_code', 10);
            $table->string('type', 45);
            $table->string('NIF', 9);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
