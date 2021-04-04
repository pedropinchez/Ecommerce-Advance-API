<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['shipping_address', 'billing_address', 'other'])->default('other');
            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->unsignedBigInteger('transaction_id')->nullable()->index();

            $table->unsignedBigInteger('country_id')->default(19);
            $table->string('country')->default('Bangladesh');

            $table->unsignedBigInteger('city_id');
            $table->string('city');

            $table->unsignedBigInteger('area_id');
            $table->string('area');

            $table->string('street1');
            $table->string('street2')->nullable();
            $table->boolean('is_default')->default(1)->index();

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('addresses');
    }
}
