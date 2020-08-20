<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleryHomeCarasoulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_home_carasouls', function (Blueprint $table) {
            $table->id();
            $table->string('first_img');
            $table->string('sec_img');
            $table->string('third_img');
            $table->string('fourth_img');
<<<<<<< HEAD
=======
            $table->string('fifth_img');
>>>>>>> d6d5743fa07922659eb4d0baca532c6216f0a1c5
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
        Schema::dropIfExists('gallery_home_carasouls');
    }
}
