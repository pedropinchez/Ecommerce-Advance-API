<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();

            $table->unsignedBigInteger('business_id')->unsigned();
            $table->foreign('business_id')->references('id')->on('business');
            $table->string('short_code')->nullable();
            $table->string('image')->nullable();
            $table->string('banner')->nullable();
            $table->unsignedBigInteger('parent_id')->nullable()->comment('If Parent is null, it is the parent');
            $table->unsignedBigInteger('created_by')->unsigned();
            $table->boolean('is_visible_homepage')->default(false);
            $table->unsignedInteger('priority')->default(10);
            $table->foreign('created_by')->references('id')->on('users');
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
        Schema::dropIfExists('categories');
    }
}
