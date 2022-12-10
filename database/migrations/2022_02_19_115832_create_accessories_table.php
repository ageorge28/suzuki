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
        Schema::create('accessories', function (Blueprint $table) {
            $table->id();
            $table->string('name_en', 255);
            $table->string('name_ml', 255);
            $table->unsignedSmallInteger('subcategory_id');
            $table->string('image', 255);
            $table->string('code', 50); 
            $table->decimal('price', 10, 2)->nullable();
            $table->boolean('status')->default(1);                   
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
        Schema::dropIfExists('accessories');
    }
};
