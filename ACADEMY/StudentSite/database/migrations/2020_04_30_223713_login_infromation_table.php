<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LoginInfromationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('login_info',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('mobile',1000);
            $table->string('ip_address',1000);
            $table->string('logtime',1000);
            $table->string('logdate',1000);
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
