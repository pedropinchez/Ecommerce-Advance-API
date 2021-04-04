<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('bn_name')->nullable();
            $table->unsignedBigInteger('city_id');
            $table->unsignedInteger('priority')->default(0);
            $table->boolean('status')->default(1)->comment('1=active, 0=inactive');

            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->string('url')->nullable();

            $table->foreign('city_id')->references('id')->on('cities');
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
        Schema::dropIfExists('areas');
    }
}
