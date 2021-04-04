<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    use HasFactory;

    protected $casts = [
        'expenses' => 'array'
    ];

    // function create (){
    //     $pickup = App\Pickup::create([
    //         'default' => true,
    //         'shifts' => '[1, 5, 7]', // you can easily assign an actual integer array here
    //         'status_id' => 1
    //     ]);

    //     $pickup = App\Pickup::find(1);
    //     dump($pickup->shifts);

    //     // https://stackoverflow.com/questions/32954424/laravel-migration-array-type-store-array-in-database-column

    // }
}
