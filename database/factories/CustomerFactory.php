<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        //        'image' => $faker->imageUrl(),
        'url' => $faker->url,
        'description' => ['en' => $faker->text(), 'fr' => $faker->text()],
    ];
});
