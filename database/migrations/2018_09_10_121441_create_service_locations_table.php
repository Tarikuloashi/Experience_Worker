<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_locations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('serviceId');
            $table->decimal('long', 10, 7);
            $table->decimal('lat', 10, 7);
            $table->tinyInteger('publicationStatus')->default(0);
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
        Schema::dropIfExists('service_locations');
    }
}
