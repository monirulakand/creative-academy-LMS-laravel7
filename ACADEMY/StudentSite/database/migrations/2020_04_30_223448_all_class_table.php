<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AllClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_list',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('serial_no',1000);
            $table->string('topic',1000);
            $table->string('title',1000);
            $table->string('source',1000);
            $table->string('video_link',1000);
            $table->string('code',1000);
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
