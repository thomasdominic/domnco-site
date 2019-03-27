<?php

use Faker\Generator as Faker;

$factory->define(App\Seo::class, function (Faker $faker) {
    return [
        'title' => ['en' => 'en seo '.$faker->text(70),'fr'=>'fr seo '.$faker->text(70)],
        'description' => ['en' => 'en seo '.$faker->text(200),'fr'=>'fr seo '.$faker->text(200)],
        'referencable_type' => 'App\Page',
        'referencable_id' => '1',
    ];
});
