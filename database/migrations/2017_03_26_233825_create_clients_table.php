<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description');
            $table->string('email');
            $table->integer('phone');
            $table->integer('fax');
            $table->string('direction');
            $table->string('contact');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('list_countries');
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('list_departments');
            $table->integer('municipalitie_id')->unsigned();
            $table->foreign('municipalitie_id')->references('id')->on('list_municipalities');
            $table->integer('postal_id')->unsigned();
            $table->foreign('postal_id')->references('id')->on('list_postal_codes');
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
        Schema::dropIfExists('clients');
    }
}
