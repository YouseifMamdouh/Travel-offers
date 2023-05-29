<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us_images', function (Blueprint $table) {
            $table->id();
            $table->json('image');
            $table->json('title');
            $table->json('sub_title');
            $table->unsignedBigInteger('about_us_id');
            $table->timestamps();
            $table->foreign('about_us_id')->references('id')->on('about_us')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_us_images');
    }
}
