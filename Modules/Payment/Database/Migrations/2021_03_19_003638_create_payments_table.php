<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('user_id');

            // other columns
            $table->decimal('amount', 8, 2)->default(0);
            $table->unsignedBigInteger('payment_method_id');
            $table->enum('method', ['bkash', 'rocket', 'nagad', 'cash', 'card', 'cheque', 'bank_transfer', 'other']);

            $table->string('card_transaction_number')->nullable();
            $table->string('card_number')->nullable();
            $table->enum('card_type', ['visa', 'master'])->nullable();
            $table->string('card_holder_name')->nullable();
            $table->string('card_month')->nullable();
            $table->string('card_year')->nullable();
            $table->string('card_security', 5)->nullable();
            $table->string('cheque_number')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->dateTime('paid_on')->nullable();
            $table->string('note')->nullable();

            $table->foreign('transaction_id')->references('id')->on('transactions');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');

            $table->softDeletes();
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
        Schema::dropIfExists('payments');
    }
}
