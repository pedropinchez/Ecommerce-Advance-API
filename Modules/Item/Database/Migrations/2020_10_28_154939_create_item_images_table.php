<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('business_id');
            $table->string('image');
            $table->string('image_size')->default(0);
            $table->string('image_title')->nullable();
            $table->string('image_description')->nullable();
            
            $table->foreign('business_id')->references('id')->on('business');
            $table->foreign('item_id')->references('id')->on('items');

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
        Schema::dropIfExists('item_images');
    }
}
