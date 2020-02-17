<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_students', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->date('dob');
            $table->unsignedBigInteger('bgroup_id');
            $table->foreign('bgroup_id')->references('id')->on('master_bgroups');
            $table->unsignedBigInteger('mtongue_id');
            $table->foreign('mtongue_id')->references('id')->on('master_mtongues');
            $table->unsignedBigInteger('religion_id');
            $table->foreign('religion_id')->references('id')->on('master_religions');
            $table->unsignedBigInteger('caste_id');
            $table->foreign('caste_id')->references('id')->on('master_castes');
            $table->unsignedBigInteger('comm_id');
            $table->foreign('comm_id')->references('id')->on('master_communities');
            $table->bigInteger('aadar_no');
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
        Schema::dropIfExists('master_students');
    }
}
