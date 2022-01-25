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
            $table->date('birthday');
            $table->string('address');
            $table->string('phone')->unique();
            $table->string('referential')->nullable()->unique();
            $table->string('avatar')->nullable();

            $table->bigInteger('phone_verification_token')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('password');

            $table->bigInteger('medecin_id')->unsigned()->index();
            $table->bigInteger('carnet_id')->unsigned()->index()->nullable();
            $table->boolean('is_active')->default(false);
            $table->boolean('is_pregnancy')->default(false);
            $table->rememberToken();

            $table->timestamps();

            $table->foreign('medecin_id')->references('id')->on('medecins')->onDelete('cascade');
            $table->foreign('carnet_id')->references('id')->on('carnets')->onDelete('cascade');
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
