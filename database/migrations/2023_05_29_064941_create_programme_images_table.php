<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgrammeImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programme_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('programme_id');
            $table->string('image');
            $table->timestamps();
            $table->foreign('programme_id')->references('id')->on('our_programmes')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programme_images');
    }
}
