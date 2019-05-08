<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',20);
            $table->string('type',20);
            $table->mediumText('description');
            $table->mediumText('desc_b');
            $table->mediumText('desc_c');
            $table->mediumText('detalle');
            $table->bigInteger('price');
            $table->bigInteger('quantity');
            $table->bigInteger('stock');
            $table->string('path');
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
        Schema::dropIfExists('product');
    }
}
