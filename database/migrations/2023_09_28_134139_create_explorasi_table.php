<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExplorasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('explorasi', function (Blueprint $table) {
            $table->id();
            $table->string("explorasiName");
            $table->string("explorasiDeskripsi");
            $table->string("explorasiImageCover");
            $table->unsignedBigInteger("kategori_id");
            $table->foreign("kategori_id")->references("id")->on("kategoris");
            $table->string("explorasiActivate");
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
        Schema::dropIfExists('explorasi');
    }
}
