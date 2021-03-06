<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClssexamsubjectdivsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clssexamsubjectdivs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('clssexam_id');
            $table->integer('classsubject_id');
            $table->integer('subjectdiv_id');
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
        Schema::dropIfExists('clssexamsubjectdivs');
    }
}
