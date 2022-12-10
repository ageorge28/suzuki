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
        Schema::create('sites', function (Blueprint $table) {
            $table->id();
            $table->string('name_en', 255);
            $table->string('name_ml', 255);
            $table->text('description_en');
            $table->text('description_ml');
            $table->string('logo', 255);
            $table->string('phone', 15);
            $table->string('address', 255);
            $table->string('sales_phone', 15);
            $table->string('service_phone', 15);
            $table->string('phone1', 15)->nullable();
            $table->string('phone2', 15)->nullable();
            $table->string('email', 255)->nullable();
            $table->string('sales_email', 255);
            $table->string('service_email', 255);
            $table->string('facebook', 255)->nullable();
            $table->string('instagram', 255)->nullable();
            $table->string('youtube', 255)->nullable();           
            $table->string('favicon', 255)->nullable();
            $table->string('url', 255)->nullable();
            $table->string('map', 500)->nullable();
            $table->boolean('doorstep')->default(false);           
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
        Schema::dropIfExists('sites');
    }
};
