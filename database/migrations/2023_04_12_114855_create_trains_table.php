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
        Schema::create('trains', function (Blueprint $table) {
            $table->id(); //id
            $table->string("company"); //azienda
            $table->string("start_station"); //stazione di partenza
            $table->string("last_station"); //stazione di arrivo
            $table->dateTime("start_time"); //orario di partenza
            $table->dateTime("arrive_time"); //orario di arrivo
            $table->string("train_code"); //codice del treno
            $table->boolean("in_time"); //in orario
            $table->boolean("cancelled"); //cancellato
            $table->timestamps(); //data di creazione e modifica
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
