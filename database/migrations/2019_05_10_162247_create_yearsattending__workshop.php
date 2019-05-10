<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYearsattendingWorkshop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yearsattending__workshop', function (Blueprint $table) {
            $table->unsignedBigInteger('yearattendingid');
            $table->foreign('yearattendingid')->references('id')->on('yearsattending');
            $table->unsignedBigInteger('workshopid');
            $table->foreign('workshopid')->references('id')->on('workshops');
            $table->tinyInteger('is_leader')->default('0');
            $table->tinyInteger('is_enrolled')->default('0');
            $table->timestamps();
            $table->unique(array('yearattendingid', 'workshopid'), 'yaid__wid_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yearsattending__workshop');
    }
}
