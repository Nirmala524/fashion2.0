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
              $table->string('thumbnail');
              $table->string('images');
              $table->string('title');
              $table->string('price');
              $table->string('size');
              $table->string('color');
              $table->unsignedBigInteger('category');
              $table->string('tag');
              $table->boolean('status');
              $table->foreign('category')->references('id')->on('categories')->cascadeOnUpdate()->cascadeOnDelete();
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
