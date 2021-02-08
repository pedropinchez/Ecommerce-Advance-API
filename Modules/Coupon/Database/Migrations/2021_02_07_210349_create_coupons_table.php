<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('business_id');
            $table->unsignedBigInteger('coupon_type_id');
            $table->enum('amount_type', ['percentage', 'numeric'])->default('numeric');
            $table->unsignedFloat('coupon_amount');
            $table->unsignedFloat('min_amount')->default(100);
            $table->unsignedFloat('max_amount')->default(1);
            $table->dateTime('coupon_start_date')->nullable();
            $table->dateTime('coupon_expiry_date')->nullable();
            $table->boolean('is_free_shiping')->default(false);
            $table->integer('usage_limit')->default(1)->comment('-1 = Unlimited');
            $table->integer('usage_count')->default(0);
            $table->integer('usage_limit_per_user')->default(1)->comment('-1 = Unlimited');

            $table->boolean('is_individual_use')->default(false);
            $table->text('exclude_sale_items')->nullable();
            $table->text('product_ids')->nullable();
            $table->text('exclude_product_ids')->nullable();
            $table->text('product_categories')->nullable();
            $table->text('exclude_product_categories')->nullable();

            $table->foreign('coupon_type_id')->references('id')->on('coupon_types');
            $table->foreign('business_id')->references('id')->on('business');
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
        Schema::dropIfExists('coupons');
    }
}
