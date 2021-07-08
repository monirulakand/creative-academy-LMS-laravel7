<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LoginFailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login_fail',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('mobile',1000);
            $table->string('ip_address',1000);
            $table->string('logtime',1000);
            $table->string('logdate',1000);
            $table->string('course_name',1000);
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
