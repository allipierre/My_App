<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Products extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('Products', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('categorie');
          $table->string('Typ');
          $table->string('Preis');
          $table->string('Kunde');
          $table->string('Lieferant');
          $table->string('Minimalwert');
            $table->string('beschreibung');
          $table->timestamps();

      });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('Products');
        //
    }
}
