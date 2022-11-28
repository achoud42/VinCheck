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
        Schema::create('vehicle_listings', function (Blueprint $table) {
            $table->string('used_dealer_vehicle_live_id');   
            $table->string('vin');
            $table->string('stock');
            $table->string('make');
            $table->string('model');
            $table->string('trim');
            $table->string('year');
            $table->string('amenities');
            $table->string('price');
            $table->string('miles');
            $table->string('exterior');
            $table->string('description');
            $table->string('certified');
            $table->string('transmission');
            $table->string('body_type');
            $table->string('speeds');
            $table->string('doors');
            $table->string('cylinders');
            $table->string('engine');
            $table->string('displacement');
            $table->string('zip');
            $table->string('phone');
            $table->string('imagefile');
            $table->string('customer_number');
            $table->string('distance');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_listings');
    }
};
