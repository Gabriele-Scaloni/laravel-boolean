<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Postcard;
use Faker\Generator as Faker;

$factory->define(Postcard::class, function (Faker $faker) {
    return [
        
        'sender' => $faker -> words(2, true),
        'address' => $faker -> words(2, true),
        'text' => $faker -> words(2, true),
        'image' => $faker -> words(2, true),

    ];
});
