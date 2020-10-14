<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedecinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medecins', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('password');
            $table->string('gen_password');
            $table->integer('partener_service_id');
            $table->integer('responsable_id');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('partener_service_id')->reference('id')->on('partener_services')->onDelete('cascade');
            $table->foreign('responsable_id')->reference('id')->on('responsables')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medecins');
    }
}
