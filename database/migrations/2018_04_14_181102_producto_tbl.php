<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductoTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('producto', function (Blueprint $product){
        $product->increments('ID_PROD');
        $product->string('NOM_PROD',45);
        $product->binary('PIC_PROD');
        $product->decimal('PRE_PROD',7,2);
        $product->string('MDL_PROD',45);
        $product->string('DES_PROD',255);
        $product->string('CLR_PROD',20);
        $product->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('producto');
    }
}
