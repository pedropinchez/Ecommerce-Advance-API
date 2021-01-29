<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('business_id')
                ->nullable()
                ->comment('It will be null if user is totally new');

            $table->string('first_name');
            $table->string('surname')->nullable();
            $table->string('last_name')->nullable();
            $table->string('username')->unique();
            $table->string('email')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('password');
            $table->char('language', 4)->default('en');

            $table->string('avatar')->nullable();
            $table->string('banner')->nullable();

            $table->boolean('from_ecommerce')->default(1)->comment('1=>From Ecommerce, 0=> From Customer');
            $table->enum('status', ['active', 'inactive', 'banned', 'account_deleted']);

            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();

            // Indexing
            $table->index('business_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
