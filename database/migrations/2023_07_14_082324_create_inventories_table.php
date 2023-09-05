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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('Designation');
            // date de peremption
            $table->date('ExpirationDate');
            $table->integer('QuantityInStock');
            // stock disponible
            $table->integer('StockAvailable');
            $table->integer('UnitPrice');
            // valeur stock reel
            $table->integer('ActualStockValue');
            // valeur Ecart
            $table->integer('DeviationValue');

            $table->string('Observation');
            $table->foreignId('product')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
