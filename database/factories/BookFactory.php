<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        'title' => $faker->words(3, true),
        'author' => $faker->name,
        'category_id' => function() {

            return Category::all()->random()->id;

        },
        'piece' => $faker->numberBetween( 0, 20)
    ];
});
