<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasinlarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masinlars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bashliq');
            $table->string('haqqinda');
            $table->string('shekil_url');
            $table->string('balaca_shekil_url');
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
        Schema::dropIfExists('masinlars');
    }
}
