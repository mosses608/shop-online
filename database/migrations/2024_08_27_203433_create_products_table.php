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
            $table->integer('company_id');
            $table->string('product_id');
            $table->string('product_name');
            $table->string('category');
            $table->string('unit_price');
            $table->string('quantity');
            $table->longText('description');
            $table->string('pictures1');
            $table->string('pictures2')->nullable();
            $table->string('pictures3')->nullable();
            $table->string('pictures4')->nullable();
            $table->string('discount')->nullable();
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
