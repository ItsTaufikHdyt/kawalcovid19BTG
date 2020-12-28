<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Datacovid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datacovid', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('total');
            $table->integer('penambahan_total');
            $table->integer('sembuh');
            $table->integer('penambahan_sembuh');
            $table->integer('meninggal');
            $table->integer('penambahan_meninggal');
            $table->date('tgl');
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
        //
    }
}
