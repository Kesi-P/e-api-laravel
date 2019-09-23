<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Review;
use Faker\Generator as Faker;

//Faker is a PHP library that generates fake data for you then we need to seed it
$factory->define(Review::class, function (Faker $faker) {
    return [
        'product_id' => function(){
          return App\Model\Product::all()->random();
        },
        'customer' => $faker->name,
        'review' =>$faker->paragraph,
        'star' =>$faker-> numberBetween(0,5)
    ];
});
