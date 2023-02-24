<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('owner_id');
            $table->foreign('owner_id')->references('id')->on('canteens')->onDelete('cascade');
            $table->string('food_name');
            $table->string('food_description');
            $table->string('food_image');
            $table->double('food_price');
            $table->integer('food_stock');
            $table->string('food_category'); 
            $table->double('food_rating');           
            $table->timestamps();
        });

        Schema::create('order_groups', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->double('total_price');
            $table->uuid('customer_id');
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->enum('status', ['Paid', 'Not yet Paid']);
            $table->timestamps();
        });

        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('food_id');
            $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
            $table->integer('quantity');
            $table->double('price');
            $table->uuid('customer_id');
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->uuid('order_group_id');
            $table->foreign('order_group_id')->references('id')->on('order_groups')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
};
