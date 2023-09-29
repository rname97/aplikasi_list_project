<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExplorasiSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('explorasi_skill', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('explorasi_id');
            $table->foreign('explorasi_id')->references('id')->on('explorasi');
            $table->unsignedBigInteger('skill_id');
            $table->foreign('skill_id')->references('id')->on('skill');
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
        Schema::dropIfExists('explorasi_skill');
    }
}
