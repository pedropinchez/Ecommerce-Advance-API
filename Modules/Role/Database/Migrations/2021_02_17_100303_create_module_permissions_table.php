<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('imarine-sql')->create('tblModulePermissions', function (Blueprint $table) {
            $table->bigIncrements('intID');
            $table->unsignedBigInteger('intModuleID');
            $table->unsignedBigInteger('intPermissionID');
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
        Schema::connection('imarine-sql')->dropIfExists('tblModulePermissions');
    }
}
