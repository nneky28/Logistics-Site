<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalculateModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calculate_models', function (Blueprint $table) {
            $table->id();
            $table->string('weight');
            $table->string('distance');
            $table->string('bike');
            $table->string('tricycle');
            $table->string('mini_van');
            $table->string('buses');
            $table->string('cars');
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
        Schema::dropIfExists('calculate_models');
    }
}
