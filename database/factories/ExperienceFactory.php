<?php

use Faker\Generator as Faker;

$factory->define(App\Experience::class, function (Faker $faker) {
    return [
        'title' => ['en' => $faker->text(20),'fr' => $faker->text(20)],
        'description' => ['en' => $faker->text(200),'fr' => $faker->text(200)],
        'begin_at' => $faker->dateTime('now'),
        'finish_at' => $faker->dateTime('now'),
        'customer_id' => factory(\App\Customer::class)->create()->id
    ];
});
