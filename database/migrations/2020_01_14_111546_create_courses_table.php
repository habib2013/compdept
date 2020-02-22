<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->unsignedBigInteger('user_id');
            $table->text('description');
            $table->string('duration');
            $table->text('quiz');
            $table->text('lectures');
            $table->text('percentage');
            $table->text('coursecode');
            $table->text('coursename');
            $table->text('user_id');
            $table->text('status');
            $table->text('unit');
            $table->text('cv');
            $table->text('courseslug');
            $table->timestamps();

            // $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
