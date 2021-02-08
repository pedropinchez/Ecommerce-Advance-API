<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_statuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invoice_id');
            $table->dateTime('order_create_date');
            $table->dateTime('confirmed_by_vendor_date')->nullable();
            $table->dateTime('shipped_by_vendor_date')->nullable();
            $table->dateTime('delivery_by_vendor_date')->nullable();
            $table->dateTime('received_by_customer_date')->nullable();
            $table->dateTime('feedback_by_customer_date')->nullable();
            $table->foreign('invoice_id')->references('id')->on('invoices');
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
        Schema::dropIfExists('invoice_statuses');
    }
}
