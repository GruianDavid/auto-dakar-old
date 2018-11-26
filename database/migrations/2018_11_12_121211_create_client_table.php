<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client', function (Blueprint $table) {
            $table->increments('id');

            $table->string('denumire');
            $table->string('cnp/cui');
            $table->string('seria')->nullable();
            $table->string('nr/regcom');
            $table->string('eliberat_de')->nullable();

            $table->string('adresa')->nullable();
            $table->string('cont')->nullable();
            $table->string('banca')->nullable();

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
        Schema::dropIfExists('client');
    }
}
