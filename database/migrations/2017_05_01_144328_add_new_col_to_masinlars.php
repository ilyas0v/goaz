<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColToMasinlars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('masinlars', function (Blueprint $table) {
            $table->string('surucu');
            $table->string('slug');
            $table->string('sheher');
            $table->integer('qiymet');
            $table->integer('dashiya_bileceyi_yuk');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('masinlars', function (Blueprint $table) {
            
        });
    }
}
