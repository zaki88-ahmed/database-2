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
        Schema::create('InvoiceDetails', function (Blueprint $table) {
            $table->id();
            $table->integer('lineNo');
            $table->integer('UnitNo');
            $table->decimal('price');
            $table->string('productName');
                $table->decimal('quantity');
            $table->decimal('total');
            $table->dateTime('expiryDate');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
