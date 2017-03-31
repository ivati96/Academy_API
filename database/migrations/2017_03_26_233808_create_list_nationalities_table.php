<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListNationalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_nationalities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('list_countries');
            $table->string('description')->unique();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->ipAddress('created_from')->nullable();
            $table->ipAddress('updated_from')->nullable();
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
        Schema::dropIfExists('list_nationalities');
    }
}
