<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeaturedItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('featured_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id')->unique();
            $table->unsignedBigInteger('business_id');
            $table->timestamps();

            $table->foreign('item_id')->references('id')->on('items');
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
        Schema::dropIfExists('featured_items');
    }
}
