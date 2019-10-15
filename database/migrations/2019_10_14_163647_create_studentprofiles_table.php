<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentprofiles', function (Blueprint $table) {
            $table->bigIncrements('appl_id');
            $table->string('appl_fname');
            $table->string('appl_lname');
            $table->string('appl_address1');
            $table->string('appl_postcode');
            $table->string('appl_city');
            $table->string('appl_state');
            $table->string('appl_city_others');
            $table->string('appl_state_others');
            $table->string('appl_country');
            $table->string('appl_email');
            $table->string('appl_email_personal');
            $table->string('appl_username');
            $table->string('appl_password');
            $table->string('appl_dob');
            $table->string('appl_gender');
            $table->string('create_date');
            $table->string('update_date');
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
        Schema::dropIfExists('studentprofiles');
    }
}
