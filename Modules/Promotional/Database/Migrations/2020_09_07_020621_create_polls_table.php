<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePollsTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * For product voting system
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polls', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();
            $table->string('slug');
            $table->string('image')->nullable();

            $table->boolean('enable_item_comparison')->default(true)->comment('If item comparison is enable, then user need to input for item1 and item2');
            $table->enum('type', ['radio', 'checkbox', 'select', 'text'])->default('radio')->comment('Process of voting system');

            $table->boolean('status')->default(1)->comment('1=>active, 0=>inactive');
            $table->softDeletes('deleted_at', 0);

            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('deleted_by')->nullable();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
            $table->foreign('deleted_by')->references('id')->on('users');
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
        Schema::dropIfExists('polls');
    }
}
