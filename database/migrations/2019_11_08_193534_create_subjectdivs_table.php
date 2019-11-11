<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectdivsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjectdivs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('type');            
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
        Schema::dropIfExists('subjectdivs');
    }
}
