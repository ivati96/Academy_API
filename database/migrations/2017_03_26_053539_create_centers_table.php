<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->foreign('client_id')->references('id')->on('clients');
            $table->string('description');
            $table->string('email');
            $table->integer('phone');
            $table->integer('fax');
            $table->string('direction');
            $table->integer('area_id')->unsigned();
            $table->foreign('area_id')->references('id')->on('list_areas');
            $table->integer('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('list_services');
            $table->integer('academic_id')->unsigned();
            $table->foreign('academic_id')->references('id')->on('list_academic_level');
            $table->string('special_service'); 
            $table->string('web_page');
            $table->string('logo');
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
            $table->rememberToken();
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
        Schema::dropIfExists('centers');
    }
}
