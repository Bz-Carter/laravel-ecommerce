<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigIncrements('category_id');
            $table->bigIncrements('subcategory_id')->nullable();
            $table->bigIncrements('brand_id')->nullable();

            $table->bigIncrements('product_name');
            $table->bigIncrements('product_code');
            $table->bigIncrements('product_quantity');
            $table->bigIncrements('product_color');
            $table->bigIncrements('product_size');
            $table->bigIncrements('selling_price');
            $table->bigIncrements('id');
            $table->bigIncrements('id');
            $table->bigIncrements('id');
            $table->bigIncrements('id');
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
        Schema::dropIfExists('products');
    }
}
