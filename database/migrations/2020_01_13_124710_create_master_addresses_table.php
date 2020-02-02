<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_addresses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('building_no');
            $table->string('building_name');
            $table->string('street');
            $table->unsignedBigInteger('area');
            $table->foreign('area')->references('id')->on('master_areas');
            $table->string('road');
            $table->unsignedBigInteger('locality');
            $table->foreign('locality')->references('id')->on('master_localities');
            $table->unsignedBigInteger('city');
            $table->foreign('city')->references('id')->on('master_cities');
            $table->unsignedBigInteger('state');
            $table->foreign('state')->references('id')->on('master_states');
            $table->unsignedBigInteger('pin_code');
            $table->foreign('pin_code')->references('id')->on('master_pincodes');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('master_students');
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
        Schema::dropIfExists('master_addresses');
    }
}
