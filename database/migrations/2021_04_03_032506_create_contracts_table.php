<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();
            $table->string('lesseeID'); // Arrendatario
            $table->string('landlordID');   // Arrendador
            $table->string('guaranteeID'); // Aval
            $table->string('propertyID');
            $table->string('apartmentID');
            $table->string('startDate');
            $table->string('endDate');
            $table->string('price');
            $table->string('lenght');
            $table->enum('depositStatus', ['pending', 'covered', 'refunded']);
            $table->boolean('active');
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
        Schema::dropIfExists('contracts');
    }
}
