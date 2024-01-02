<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a2a_category', function (Blueprint $table) {
            $table->id();
            $table->text('question');        //question a realizar
            $table->string('question_type'); //0: without image (4 options answers), 1: with image (3 options answers)
            $table->text('image');          //url de la image correspondiente a la question
            $table->text('option_a');        //option answer a
            $table->text('option_b');        //option answer b
            $table->text('option_c');        //option answer c
            $table->text('option_d');        //option answer d
            $table->string('answer');     //correct answer  (a, b, c, d)
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
        Schema::dropIfExists('a2a_category');    }
};
