<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
//        'title' => $faker->text(50),
//        'text' => $faker->text(500),
        'title' => ['en' => $faker->text(50),'fr' => $faker->text(50)],
        'text' => ['en' => $faker->text(500),'fr' => $faker->text(500)],
        'published_at' => $faker->dateTime('now'),
        'user_id' => 1,
        'created_at' => $faker->dateTime('now'),
        'updated_at' => $faker->dateTime('now'),
    ];
});