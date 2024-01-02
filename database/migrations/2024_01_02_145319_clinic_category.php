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
        Schema::create('clinic_category', function (Blueprint $table) {
            $table->id();
            $table->text('name');         //clinic name
            $table->string('logo');       //url logo
            $table->text('cost');         //cost
            $table->text('phone_number'); //phone number
            $table->text('location');     //loction
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
        Schema::dropIfExists('clinic_category');    }
};
