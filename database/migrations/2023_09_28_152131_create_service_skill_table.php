<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_skill', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('service');
            $table->unsignedBigInteger('skill_id');
            $table->foreign('skill_id')->references('id')->on('skill');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_skill');
    }
}
