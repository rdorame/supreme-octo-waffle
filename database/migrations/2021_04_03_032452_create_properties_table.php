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
            $table->string('name');
            $table->string('addressID');
            $table->enum('type', ['building', 'house']);
            $table->string('rentalCounter');
            $table->string('propertyDeedID');

            // IF HOUSE
            $table->string('surfaceUsed');
            $table->string('surfaceTotal');
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('parkingSlots');
            $table->string('closets');
            $table->boolean('garden');
            $table->string('minPrice');
            $table->string('maxPrice');
            $table->string('electricitymeter');
            $table->string('watermeter');
            $table->boolean('furnitureIncluded');
            $table->boolean('gasTank');
            $table->string('extras');
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
