<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyImagesTable extends Migration
{

    public function up()
    {
        Schema::create('property_images', function (Blueprint $table) {
            $table->id();
            $table->string('original_name');
            $table->string('new_name');
            $table->string('size');
            $table->string('path');
            $table->string('full_file');
            $table->unsignedBigInteger('property_id');
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('property_images');
    }
}
