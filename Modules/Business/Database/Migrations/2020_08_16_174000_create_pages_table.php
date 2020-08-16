<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->unsignedBigInteger('business_id');
            $table->unique(array('business_id', 'slug'));

            $table->text('description');
            $table->text('meta_description')->nullable();
            $table->string('image')->nullable();
            $table->string('banner_image')->nullable();
            $table->unsignedBigInteger('category_id')->nullable()->comment('Null if page has no category');
            $table->boolean('status')->default(1)->comment('1=>active, 0=>inactive');
            $table->softDeletes('deleted_at', 0);

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();
            $table->unsignedBigInteger('total_reaction')->default(0)->comment('total reaction count');
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->foreign('deleted_by')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('business_id')->references('id')->on('business');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
