<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('bus_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('price');
            $table->enum('payment',['paypal','COD','paymaya']);
            $table->boolean('status');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('client_id')->references('id')->on('client')->onDelete('cascade');
            $table->foreign('bus_id')->references(('id'))->on('bus')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('booking', function(Blueprint $table){
            $table ->dropForeign('account_id');
            $table->dropForeign('bus_id');
            $table->dropSoftDeletes();
            $table->dropTimestamps();
        });
    }
}

