<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiftCardTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gift_card_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('gift_card_id');
            $table->unsignedBigInteger('user_id');
            $table->float('price_value_for')->default(0);
            $table->float('change_price_value')->default(0);

            $table->foreign('transaction_id')->references('id')->on('transactions');
            $table->foreign('gift_card_id')->references('id')->on('gift_cards');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('gift_card_transactions');
    }
}
