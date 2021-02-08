<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_statuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaction_id');
            $table->dateTime('order_create_date');
            $table->dateTime('confirmed_by_vendor_date')->nullable();
            $table->dateTime('shipped_by_vendor_date')->nullable();
            $table->dateTime('delivery_by_vendor_date')->nullable();
            $table->dateTime('received_by_customer_date')->nullable();
            $table->dateTime('feedback_by_customer_date')->nullable();

            $table->foreign('transaction_id')->references('id')->on('transactions');
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
        Schema::dropIfExists('order_statuses');
    }
}
