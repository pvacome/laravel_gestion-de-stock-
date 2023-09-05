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
        Schema::create('imprimers', function (Blueprint $table) {
            $table->id();
            //  $table->string('Designation')->nullable();
            $table->integer('Quantity');
            $table->integer('UnitPrice');
            $table->integer('TotalPrice');
            $table->foreignId('product')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imprimers');
    }
};
