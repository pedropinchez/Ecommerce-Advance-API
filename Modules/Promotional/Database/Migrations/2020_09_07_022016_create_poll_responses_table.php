<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePollResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poll_responses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('poll_id');
            $table->unsignedBigInteger('user_id')->comment('anynomus user can give vote');
            $table->ipAddress('ip_address')->nullable()->comment('anynomus user can give vote');
            $table->unsignedBigInteger('poll_option_id');

            $table->foreign('poll_id')->references('id')->on('polls');
            $table->foreign('poll_option_id')->references('id')->on('poll_options');
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
        Schema::dropIfExists('poll_responses');
    }
}
