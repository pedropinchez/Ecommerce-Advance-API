<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('business_id');
            $table->enum(
                'type',
                [
                    'purchase', 'sell', 'opening_stock', 'purchase_return', 'sell_return', 'cashback',
                    'cashback_transfer_wallet', 'voucher', 'voucher_transfer_wallet',
                    'gift_card', 'gift_card_transfer_wallet', 'referrel', 'referrel_transfer_wallet'
                ]
            )->index();
            $table->boolean('status')->default(1)->comment('1=>active, 0=>inactive');
            $table->enum('delivery_status', ['delivered', 'not_delivered']);
            $table->enum('payment_status', ['paid', 'due']);
            $table->string('title')->nullable()->comment('Title needed for all other transactions which needs to store a default title');
            $table->string('invoice_no')->nullable();
            $table->string('ref_no')->nullable();
            $table->dateTime('transaction_date');
            $table->decimal('total_before_tax', 8, 2)->default(0)->comment('Total before the purchase/invoice tax, this includeds the indivisual product tax');
            $table->decimal('tax_amount', 8, 2)->default(0);
            $table->unsignedBigInteger('discount_type_id');
            $table->unsignedBigInteger('tax_id');
            $table->string('discount_amount', 10)->nullable();
            $table->string('shipping_details')->nullable();
            $table->string('order_quantity')->nullable();
            $table->decimal('shipping_charges', 8, 2)->default(0);
            $table->text('additional_notes')->nullable();
            $table->text('staff_note')->nullable();
            $table->decimal('paid_total', 8, 2)->default(0);
            $table->decimal('due_total', 8, 2)->default(0);
            $table->decimal('final_total', 8, 2)->default(0);
            $table->unsignedBigInteger('created_by');
            $table->string('deleted_at')->nullable();
            $table->timestamps();

            $table->foreign('business_id')->references('id')->on('business');
            $table->foreign('discount_type_id')->references('id')->on('discount_types');
            $table->foreign('tax_id')->references('id')->on('tax_rates');
            $table->foreign('created_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
