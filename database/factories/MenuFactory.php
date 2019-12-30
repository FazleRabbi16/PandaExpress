<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Menu::class, function (Faker $faker) {
    return [
        'name' => $faker->words($nb = 3, $asText = true),
        'description'=>$faker->paragraphs($nb = 3, $asText = true),
        'price'=>$faker->numberBetween($min = 99, $max = 999), 
    ];
});
