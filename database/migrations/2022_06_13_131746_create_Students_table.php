<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            //
            $table->string('name');
            $table->integer('idade');
            $table->string('turma');
            $table->string('matricula');
            $table->unsignedBigInteger('classroom_id');
            $table->timestamps();
            // $table->foreign('classroom_id')->references('id')->on('classroom')->onDelete('cascade');

        });

        Schema::table('students', function (Blueprint $table) {
            $table->foreign('classroom_id')->references('id')->on('classrooms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
