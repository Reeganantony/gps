<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterStudentsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('master_students', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('id')->on('master_standards');
            $table->unsignedBigInteger('sec_id');
            $table->foreign('sec_id')->references('id')->on('master_sections');
            $table->bigInteger('pho_no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('master_students');
    }

}
