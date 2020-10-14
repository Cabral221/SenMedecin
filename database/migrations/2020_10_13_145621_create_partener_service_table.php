<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartenerServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partener_services', function (Blueprint $table) {
            $table->id();
            $table->integer('partener_id');
            $table->integer('service_id');
            $table->timestamps();

            $table->foreign('partener_id')->reference('id')->on('parteners')->onDelete('cascade');
            $table->foreign('service_id')->reference('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partener_services');
    }
}
