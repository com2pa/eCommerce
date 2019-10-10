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
            $table->increments('id');
            $table->string('name',255);
            $table->string('slug');
            $table->text('description');
            $table->string('extract',300);
            $table->decimal('prince',5,2);
            $table->string('image',200);
            $table->boolean('visible');
            $table->unsignedInteger('categories_id');
            $table->foreign('categories_id')->references('id')->on('categories');
                //   ->onDelete('cascade');
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
