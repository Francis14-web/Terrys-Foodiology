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
            $table->uuid('food_uuid');
            $table->foreign('food_uuid')->references('id')->on('foods')->onDelete('cascade');
            // $table->enum('job', ['Add', 'Remove']);
            $table->integer('food_stock');
            $table->integer('food_sold');
            $table->integer('food_left');
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
