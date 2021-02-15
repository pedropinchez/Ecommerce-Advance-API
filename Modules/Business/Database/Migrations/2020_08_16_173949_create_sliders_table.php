<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('business_id');
            $table->string('image')->nullable();
            $table->boolean('is_text_enable')->default(1);
            $table->string('text')->nullable();
            $table->string('text_color')->nullable();
            $table->boolean('is_button_enable')->default(1);
            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();
            $table->string('button_color')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
            $table->foreign('business_id')->references('id')->on('business');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sliders');
    }
}
