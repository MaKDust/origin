<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Products;
use Faker\Generator as Faker;

$factory->define(Products::class, function (Faker $faker) {
    return [
       'name' => $faker->sentence(2),
       'features' => $faker->sentence(5),
       'description' => $faker->sentence(20),
       'stock' => $faker->numberBetween(1,50),
       'price' => $faker->numberBetween(100,200),
       'salePrice' => $faker->numberBetween(1,99),
       'avatar' => $faker->$faker->image('public/storage/images'),
    ];
});
