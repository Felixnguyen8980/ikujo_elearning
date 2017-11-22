<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_lists', function (Blueprint $table) {
            $table->integer('courses_id')->unsigned();
            $table->integer('students_id')->unsigned();
            $table->primary(['courses_id','students_id']);
            $table->foreign('courses_id')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('students_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students_lists');
    }
}
