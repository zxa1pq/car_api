<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'brand' =>$faker ->text(15),
        'model' =>$faker ->text(20),
        'year'  =>$faker ->numberBetween(1907, 2019)
    ];
});
