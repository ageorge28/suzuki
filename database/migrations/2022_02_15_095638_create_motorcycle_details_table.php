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
        Schema::create('motorcycle_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('product_id');
            $table->text('description_en')->nullable();
            $table->text('description_ml')->nullable();
            $table->string('overview_image', 255)->nullable();
            $table->string('features_en', 500);
            $table->string('features_ml', 500);
            $table->string('accessories_en', 500);
            $table->string('accessories_ml', 500);
            $table->unsignedSmallInteger('displacement');
            $table->string('engine_type_en', 255);
            $table->string('engine_type_ml', 255);
            $table->string('fuel_system_en', 255);
            $table->string('fuel_system_ml', 255);
            $table->string('valve_system_en', 255);
            $table->string('valve_system_ml', 255);
            $table->string('bore_stroke', 255);
            $table->string('engine_output', 255);
            $table->string('torque', 255);
            $table->string('starter_system_en', 255);
            $table->string('starter_system_ml', 255);
            $table->string('transmission_type_en', 255);
            $table->string('transmission_type_ml', 255);
            $table->string('wheels_en', 255);
            $table->string('wheels_ml', 255);
            $table->unsignedSmallInteger('length');
            $table->unsignedSmallInteger('width');
            $table->unsignedSmallInteger('height');
            $table->unsignedSmallInteger('wheel_base');
            $table->unsignedSmallInteger('ground_clearance');
            $table->unsignedSmallInteger('seat_height');
            $table->unsignedSmallInteger('kerb_mass');
            $table->unsignedSmallInteger('fuel_tank_capacity');
            $table->string('front_brakes_en', 255);
            $table->string('front_brakes_ml', 255);
            $table->string('rear_brakes_en', 255);
            $table->string('rear_brakes_ml', 255);
            $table->string('front_tyre', 255);
            $table->string('rear_tyre', 255);
            $table->string('front_suspension_en', 255);
            $table->string('front_suspension_ml', 255);
            $table->string('rear_suspension_en', 255);
            $table->string('rear_suspension_ml', 255);
            $table->string('battery_en', 255);
            $table->string('battery_ml', 255);
            $table->string('headlight', 255);
            $table->string('taillight', 255)->nullable();
            $table->string('brochure', 255)->nullable();
            $table->string('video', 500)->nullable();
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
        Schema::dropIfExists('motorcycle_details');
    }
};
