<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoriaTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('categoria', function (Blueprint $categoria) {
            $categoria->increments('ID_CAT');
            $categoria->string('NOM_CAT',50);
            $categoria->string('EST_CAT',2);
            $categoria->timestamps();
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
        Schema::dropIfExists('categoria');
    }
}
