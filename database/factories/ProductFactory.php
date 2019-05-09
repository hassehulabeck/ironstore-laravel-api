<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'  => $faker->firstNameMale,
        'price' => $faker->randomFloat($nbMaxDecimals = 2, $min=0, $max=3000),
        'maker' => $faker->company
    ];
});
