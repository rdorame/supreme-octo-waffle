<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('propertyID');
            $table->string('interiorNumber');
            $table->string('rentalCounter');
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
        Schema::dropIfExists('apartments');
    }
}
