<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title_en', 255);
            $table->string('title_ml', 255);
            $table->text('description_en');
            $table->text('description_ml');
            $table->string('main_image', 255);
            $table->unsignedSmallInteger('reviews');
            $table->unsignedSmallInteger('awards');
            $table->unsignedSmallInteger('products');
            $table->unsignedSmallInteger('customers');
            $table->string('image1', 255)->nullable();
            $table->string('image2', 255)->nullable();
            $table->string('image3', 255)->nullable();
            $table->string('image4', 255)->nullable();           
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
        Schema::dropIfExists('abouts');
    }
};
