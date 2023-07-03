<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBannerColumnToSomeTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('banner')->nullable();
        });
        Schema::table('hotels', function (Blueprint $table) {
            $table->string('banner')->nullable();
        });
        Schema::table('our_programmes', function (Blueprint $table) {
            $table->string('banner')->nullable();
        });
        Schema::table('rooms', function (Blueprint $table) {
            $table->string('banner')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('some_tables', function (Blueprint $table) {
            //
        });
    }
}
