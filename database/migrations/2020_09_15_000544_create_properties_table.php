<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('ar_name')->nullable();
            $table->string('en_name')->nullable();
            $table->text('ar_description')->nullable();
            $table->text('en_description')->nullable();
            $table->tinyInteger('type')->default(0);
            $table->string('area')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->decimal('price', 5, 2)->default(0);
            $table->string('ar_meta')->nullable();
            $table->string('en_meta')->nullable();
            $table->string('ar_address')->nullable();
            $table->string('en_address')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->foreign('state_id')->references('id')->on('states')->onDelete('cascade');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('properties');
    }
}
