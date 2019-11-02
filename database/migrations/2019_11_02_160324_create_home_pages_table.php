<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_pages', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable();
            $table->text('first_span')->nullable();
            $table->text('second_span')->nullable();
            $table->text('pclass')->nullable();
            $table->text('text_bottom')->nullable();
            $table->text('text_side')->nullable();
            $table->text('text_bottom_populated')->nullable();
            $table->text('text_side_populated')->nullable();
            $table->text('our_kick_text')->nullable();
            $table->text('text_our_goal_populated')->nullable();
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
        Schema::dropIfExists('home_pages');
    }
}
