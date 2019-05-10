<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOldgencharges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oldgencharges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('camperid');
            $table->foreign('camperid')->references('id')->on('campers');
            $table->float('charge');
            $table->string('memo')->nullable();
            $table->unsignedBigInteger('chargetypeid');
            $table->foreign('chargetypeid')->references('id')->on('chargetypes');
            $table->integer('year');
            $table->timestamps();
        });
        DB::update('ALTER TABLE oldgencharges AUTO_INCREMENT = 1000');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oldgencharges');
    }
}
