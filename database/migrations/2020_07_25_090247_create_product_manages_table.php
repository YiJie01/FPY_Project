<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductManagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_manages', function (Blueprint $table) {
            $table->string('productname');
            $table->id('productid');
            $table->integer('productprice');
            $table->string('image');
            $table->string('publisher');
            $table->string('status');
            $table->string('type');
            $table->date('date');
            $table->text('introduction');
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
        Schema::dropIfExists('product_manages');
    }
}
