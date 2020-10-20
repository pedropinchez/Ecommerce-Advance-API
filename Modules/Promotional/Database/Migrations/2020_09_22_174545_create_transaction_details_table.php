<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('business_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('gift_card_id');
            $table->string('order_quantity')->nullable();
            $table->decimal('paid_total', 8, 2)->default(0);
            $table->enum('payment_status', ['paid', 'due']);
            $table->dateTime('transaction_date');
            $table->timestamps();

            $table->foreign('business_id')->references('id')->on('business');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('gift_card_id')->references('id')->on('gift_cards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_details');
    }
}
