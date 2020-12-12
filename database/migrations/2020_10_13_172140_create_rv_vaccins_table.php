<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRvVaccinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rv_vaccins', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vaccin_id')->unsigned()->index();
            $table->bigInteger('children_id')->unsigned()->index();
            $table->bigInteger('medecin_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('vaccin_id')->references('id')->on('vaccins')->onDelete('cascade');
            $table->foreign('children_id')->references('id')->on('childrens')->onDelete('cascade');
            $table->foreign('medecin_id')->references('id')->on('medecins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rv_vaccins');
    }
}
