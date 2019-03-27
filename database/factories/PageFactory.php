<?php

use Faker\Generator as Faker;

$factory->define(App\Page::class, function (Faker $faker) {
    return [
        'name' => $faker->text(20),
        'title' => ['en' => 'en Page '.$faker->text(30), 'fr' => 'fr Page '.$faker->text(30)],
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});
