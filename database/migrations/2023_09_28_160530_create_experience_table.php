<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience', function (Blueprint $table) {
            $table->id();
            $table->string("experienceName");
            $table->string("experienceCompany");
            $table->string("experienceLocation");
            $table->string("experienceDeskripsi");
            $table->string("experienceStatus");
            $table->string("experienceStart");
            $table->string("experienceEnd");
            $table->string("experienceActivate");
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
        Schema::dropIfExists('experience');
    }
}
