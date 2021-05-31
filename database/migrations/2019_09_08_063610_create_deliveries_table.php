<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pkgOwner');
            $table->integer('pkgOwnerID');
            $table->string('pkgGivenTo')->nullable()->default('looking');
            $table->integer('pkgGivenToID')->nullable()->default('0');
            $table->string('pkgReciever');
            $table->string('pkgType');
            $table->string('pkgCredit');
            $table->string('fromLoc');
            $table->string('toLoc');
            $table->mediumText('description');
            $table->string('status')->default('waiting');
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
        Schema::dropIfExists('deliveries');
    }
}