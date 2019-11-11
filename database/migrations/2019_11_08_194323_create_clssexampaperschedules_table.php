<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClssexampaperschedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clssexampaperschedules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('clssexamsubjectdiv_id');
            $table->date('date');
            $table->time('time');
            $table->string('status');
            $table->string('remarks');
            $table->integer('session_id');
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
        Schema::dropIfExists('clssexampaperschedules');
    }
}
