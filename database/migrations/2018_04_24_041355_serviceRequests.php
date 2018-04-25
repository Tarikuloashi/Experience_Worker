<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ServiceRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviceRequests',function(Blueprint $table){
          $table->increments('id');
          $table->integer('userId');
          $table->string('serviceName');
          $table->float('servicePrice',10,2);
          $table->text('serviceDescription');
          $table->text('userDescription');
          $table->double('lat',20,10);
          $table->double('lng',20,10);
          $table->boolean('status')->default(0);
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
        //
    }
}
