<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateStaffpositions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffpositions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('compensationlevelid');
            $table->foreign('compensationlevelid')->references('id')->on('compensationlevels');
            $table->unsignedBigInteger('programid');
            $table->foreign('programid')->references('id')->on('programs');
            $table->enum('pctype', ['superuser', 'viewer', 'normal'])->default('normal');
            $table->integer('start_year');
            $table->integer('end_year');
            $table->timestamps();
        });
        DB::update('ALTER TABLE staffpositions AUTO_INCREMENT = 1000');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffpositions');
    }
}
