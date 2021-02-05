<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invoice_id');
            $table->unsignedBigInteger('transaction_id')->comment('Order ID');
            $table->unsignedBigInteger('business_id');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('transaction_sell_line_id');
            $table->unsignedFloat('qty')->default(1);
            $table->unsignedFloat('amount')->default(0);
            $table->unsignedFloat('discount_amount')->default(0);
            $table->unsignedFloat('grand_total')->default(0);

            $table->foreign('business_id')->references('id')->on('business');
            $table->foreign('transaction_id')->references('id')->on('transactions');
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
        Schema::dropIfExists('invoice_items');
    }
}
