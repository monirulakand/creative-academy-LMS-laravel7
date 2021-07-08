<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MoreSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('more_series',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('img',1000);
            $table->string('title',1000);
            $table->string('des',1000);
            $table->string('code',1000);
            $table->string('fee',1000);
            $table->string('totalClass',1000);
            $table->string('totalStudent',1000);
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
