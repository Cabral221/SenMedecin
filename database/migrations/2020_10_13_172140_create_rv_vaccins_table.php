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
            $table->integer('vaccin_id');
            $table->integer('children_id');
            $table->integer('medecin_id');
            $table->timestamps();

            $table->foreign('vaccin_id')->reference('id')->on('vaccins')->onDelete('cascade');
            $table->foreign('children_id')->reference('id')->on('childrens')->onDelete('cascade');
            $table->foreign('medecin_id')->reference('id')->on('medecin');
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
