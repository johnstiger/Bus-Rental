<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bus_name');
            $table->string('number_of_seat');
            $table->float('price',8,2);
            $table->boolean('status');
            $table->longText('description');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus', function(Blueprint $table){
            $table->dropTimestamps();
            $table->dropSoftDeletes();
        });
    }
}
