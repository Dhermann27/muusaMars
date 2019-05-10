<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYearsattendingStaff extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yearsattending__staff', function (Blueprint $table) {
            $table->unsignedBigInteger('yearattendingid');
            $table->foreign('yearattendingid')->references('id')->on('yearsattending');
            $table->unsignedBigInteger('staffpositionid');
            $table->foreign('staffpositionid')->references('id')->on('staffpositions');
            $table->tinyInteger('is_eaf_paid');
            $table->timestamps();
            $table->unique(array('yearattendingid', 'staffpositionid'), 'yaid__spid_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yearsattending__staff');
    }
}
