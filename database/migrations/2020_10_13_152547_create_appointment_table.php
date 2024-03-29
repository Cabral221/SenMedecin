<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->datetime('date');
            $table->string('description');
            $table->bigInteger('type_appointment_id')->unsigned()->index();
            $table->bigInteger('children_id')->unsigned()->index()->nullable();
            $table->bigInteger('patient_id')->unsigned()->index();
            $table->bigInteger('medecin_id')->unsigned()->index();
            $table->boolean('passed')->default(false);
            $table->timestamps();

            $table->foreign('children_id')->references('id')->on('childrens')->onDelete('cascade');
            $table->foreign('type_appointment_id')->references('id')->on('type_appointments')->onDelete('cascade');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
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
        Schema::dropIfExists('appointments');
    }
}
