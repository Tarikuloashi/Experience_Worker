<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Services extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services',function(Blueprint $table){
          $table->increments('id');
          $table->integer('categoryid');
          $table->string('serviceName');
          $table->float('minPrice',10,2);
          $table->float('maxPrice',10,2);
          $table->text('serviceDescription');
          $table->text('serviceImage');

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
