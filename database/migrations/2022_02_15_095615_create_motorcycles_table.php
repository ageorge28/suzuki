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
        Schema::create('motorcycles', function (Blueprint $table) {
            $table->id();
            $table->string('name_en', 255);
            $table->string('name_ml', 255);
            $table->unsignedTinyInteger('category_id');
            $table->unsignedSmallInteger('subcategory_id');
            $table->decimal('price', 12, 2)->nullable();
            $table->string('code', 255)->nullable();
            $table->string('slug', 255);
            $table->string('thumbnail', 255);
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
        Schema::dropIfExists('motorcycles');
    }
};
