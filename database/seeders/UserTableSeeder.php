<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();

        $faker = \Faker\Factory::create();
        User::create([
            'username' => 'rhdorame',
            'password' => '$2y$10$iGpyHqSPnYgllPga7hDxTuNfujHtqsELc7Hx.AQAMCz5BQthz67Ie',
            'name' => 'Ricardo', 
            'secondName' => '', 
            'lastName' => 'Dorame', 
            'secondLastName' => '', 
            'phoneNumber' => '5580373586', 
            'email' => 'rhdorame@gmail.com',
            'rfc' => '', 
            'invoiceLegalName' => '', 
            'invoiceAddressID' => '', 
            'type' => 'admin',
            'active' => true
        ]);
    }
}
