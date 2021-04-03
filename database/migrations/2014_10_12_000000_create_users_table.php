<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->string('username')->unique();
            $table->string('secondName')->nullable();
            $table->string('lastName');
            $table->string('secondLastName');
            $table->string('phoneNumber')->nullable();
            $table->string('addressID')->nullable();
            $table->string('rfc')->nullable();
            $table->string('invoiceLegalName')->nullable();
            $table->string('invoiceAddressID')->nullable();
            $table->enum('type', ['owner', 'admin', 'common']);
            $table->boolean('active')->default(true);

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
