<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
//        'title' => $faker->text(50),
//        'text' => $faker->text(500),
        'title' => ['en' => 'en Post '.$faker->text(50), 'fr' => 'fr Post '.$faker->text(50)],
        'summary' => ['en' => 'en Post '.$faker->text(120), 'fr' => 'fr Post '.$faker->text(120)],
        'text' => ['en' => 'en Post '.$faker->text(500), 'fr' => 'fr Post '.$faker->text(500)],
        'published_at' => $faker->dateTime('now'),
        'user_id' => 1,
        'created_at' => $faker->dateTime('now'),
        'updated_at' => $faker->dateTime('now'),
    ];
});
