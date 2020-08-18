<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReferralRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referral_rules', function (Blueprint $table) {
            $table->id();
            $table->boolean('enable_registration_referral')->default(false);
            $table->float('registration_referral_amount')->comment('Registration Referral Amount')->default(0);

            $table->boolean('enable_purchase_referral')->default(false);
            $table->float('purchase_referral_amount')->comment('purchase Referral Amount')->default(0);
            $table->enum('purchase_referral_amount_type', ['fixed', 'purchase', 'item'])->comment('purchase Referral Amount purchase_referral_amount_type')->default(0);
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
        Schema::dropIfExists('referral_rules');
    }
}
