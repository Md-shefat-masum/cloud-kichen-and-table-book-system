<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodManusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_manus', function (Blueprint $table) {
            $table->id();
            $table->string('title',150)->nullable();
            $table->string('thumb_image',100)->nullable();
            $table->string('base_bottom_image',100)->nullable();
            $table->string('base_top_image',100)->nullable();
            $table->longText('ingredients')->nullable();
            $table->integer('status')->default(1);
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
        Schema::dropIfExists('food_manus');
    }
}
