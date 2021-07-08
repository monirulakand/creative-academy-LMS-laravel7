<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_list',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name',1000);
            $table->string('email',1000);
            $table->string('pass',1000);
            $table->string('phn',1000);
            $table->string('status',1000);
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
