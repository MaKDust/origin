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
       'avatar' => $faker->image('public/img',640,480,null,false),
    ];
});
