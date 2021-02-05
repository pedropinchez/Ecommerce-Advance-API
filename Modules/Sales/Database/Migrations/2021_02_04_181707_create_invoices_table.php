<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invoice_no');
            $table->unsignedBigInteger('transaction_id')->comment('Order ID');
            $table->unsignedBigInteger('business_id');
            $table->unsignedFloat('total_amount')->default(0);
            $table->unsignedFloat('total_discount')->default(0);
            $table->unsignedFloat('grand_total')->default(0);
            $table->unsignedFloat('paid_total')->default(0);
            $table->enum('status', ['due', 'paid', 'delivered', 'cancelled'])->default('due');
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->date('date');

            $table->foreign('business_id')->references('id')->on('business');
            $table->foreign('transaction_id')->references('id')->on('transactions');
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
        Schema::dropIfExists('invoices');
    }
}
