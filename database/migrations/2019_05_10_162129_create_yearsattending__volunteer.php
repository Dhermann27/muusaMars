<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYearsattendingVolunteer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yearsattending__volunteer', function (Blueprint $table) {
            $table->unsignedBigInteger('yearattendingid');
            $table->foreign('yearattendingid')->references('id')->on('yearsattending');
            $table->unsignedBigInteger('volunteerpositionid');
            $table->foreign('volunteerpositionid')->references('id')->on('volunteerpositions');
            $table->timestamps();
            $table->unique(array('yearattendingid', 'volunteerpositionid'), 'yaid__vpid_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yearsattending__volunteer');
    }
}
