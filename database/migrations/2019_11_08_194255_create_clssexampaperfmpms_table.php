<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClssexampaperfmpmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clssexampaperfmpms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('clssexamsubjectdiv_id');
            $table->integer('fm');
            $table->integer('pm');
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
        Schema::dropIfExists('clssexampaperfmpms');
    }
}
