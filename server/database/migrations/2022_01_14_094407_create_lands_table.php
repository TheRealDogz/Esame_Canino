<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lands', function (Blueprint $table) {
            $table->id();
            $table->text("comune");
            $table->text("foto");
            $table->text("dimensioni");
            $table->text("foglio");
            $table->text("mappale");
            $table->text("parcella");
            $table->text("terreno");
            $table->text("irrigazione");
            $table->text("offerta");
            $table->text("canone");
            $table->boolean("disponibile");
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
        Schema::dropIfExists('lands');
    }
}
