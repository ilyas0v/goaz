<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeSurucusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('surucus', function (Blueprint $table) {
            $table->dropColumn('ad_soyad');
            $table->string('ad');
            $table->string('soyad');
        });
    }//id , ad ,soyad, sheher, haqqinda, shekil_url

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('surucus', function (Blueprint $table) {
            //
        });
    }
}
