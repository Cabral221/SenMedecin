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
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('gen_password');
            $table->bigInteger('partener_service_id')->unsigned()->index();
            $table->bigInteger('responsable_id')->unsigned()->index();
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('partener_service_id')->references('id')->on('partener_services')->onDelete('cascade');
            $table->foreign('responsable_id')->references('id')->on('responsables')->onDelete('cascade');
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
