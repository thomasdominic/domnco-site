<?php

use Faker\Generator as Faker;

$factory->define(App\Page::class, function (Faker $faker) {
    return [
        'name' => $faker->text(20),
        'title' => ['en' => $faker->text(30), 'fr' => $faker->text(30)],
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});
