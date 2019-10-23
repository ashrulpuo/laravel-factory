<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportBugsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_bugs', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('id_report');
            $table->string('comment_bug');
            $table->date('datetime');
            $table->string('id_user');
            $table->string('file_upload');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
