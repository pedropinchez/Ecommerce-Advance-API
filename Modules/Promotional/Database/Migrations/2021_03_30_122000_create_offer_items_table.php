<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('business_id');
            $table->unsignedFloat('current_price')->default(0);
            $table->unsignedFloat('offer_price')->default(0);
            $table->unsignedFloat('offer_percent_discount')->default(0);
            $table->enum('offer_type', ['normal_offer', 'first_purchase_offer'])->default('normal_offer')->index();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->boolean('is_unlimited')->default(0);
            $table->boolean('is_visible')->default(1)->index();

            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();

            $table->foreign('business_id')->references('id')->on('business');
            $table->foreign('item_id')->references('id')->on('items');

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
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
        Schema::dropIfExists('offer_items');
    }
}
