<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->dateTime('birthday');
            $table->string('address');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->string('password');
            $table->string('referential');
            $table->integer('medecin_id');
            $table->integer('carnet_id');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('medecin_id')->reference('id')->on('medecins');
            $table->foreign('carnet_id')->reference('id')->on('carnets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
