<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('imarine-sql')->create('tblModules', function (Blueprint $table) {
            $table->bigIncrements('intModuleID');
            $table->string('strName');
            $table->string('strSlug')->nullable();
            $table->string('strRouteURL')->nullable();
            $table->string('strIcon')->nullable();
            $table->unsignedInteger('intPriority')->default(1);
            $table->unsignedInteger('intParentID')->nullable();
            $table->boolean('isActive')->default(1);
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
        Schema::connection('imarine-sql')->dropIfExists('tblModules');
    }
}
