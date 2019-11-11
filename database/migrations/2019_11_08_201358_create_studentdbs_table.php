<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentdbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentdbs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('fname');
            $table->string('addr');
            $table->string('post');
            $table->string('pstn');
            $table->string('dist');
            $table->date('dob');
            $table->string('regno');
            $table->string('aadhar');
            $table->string('prevschool');
            $table->integer('admclss_id');
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
        Schema::dropIfExists('studentdbs');
    }
}
