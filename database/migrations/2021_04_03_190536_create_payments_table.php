<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->uuid('id');
            $table->increments('transactionNumber');
            $table->double('amount');
            $table->enum('type', ['car', 'deposit', 'rent']);
            $table->enum('status', ['received', 'processed']);
            $table->string('apartmentID')->nullable();
            $table->string('propertyID')->nullable();
            $table->string('userID');
            $table->string('cashierID');
            $table->string('parentTicketID')->nullable();
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('payments');
    }
}
