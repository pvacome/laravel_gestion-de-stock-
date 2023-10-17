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
        // nous avons la fonction permettant d'enregistre les facture et les differente contraite d'integriter
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            // $table->integer('Number');
            $table->integer('Number');
            $table->date('date');


            $table->foreignId('customer')->constrained()->onDelete('cascade');

            //  $table->foreignId('product')->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
