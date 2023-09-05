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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Labels');
            $table->string('Type');
            $table->string('Designation');
            $table->integer('Quantity');
            $table->integer('Number');
            $table->integer('UnitPrice');
            $table->integer('TotalPrice');
            $table->date('ExpirationDate');
            $table->date('DateOfManufacture');
            $table->foreignId('provider')->constrained()->onDelete('cascade');
            $table->foreignId('category')->constrained()->onDelete('cascade');

            $table->foreignId('argence')->constrained()->onDelete('cascade');

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
