<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Customer;

use App\Rent;
use Faker\Generator as Faker;

$factory->define(Rent::class, function (Faker $faker) {
    return [
        'cust_id' => function() {

            return Customer::all()->random()->id;},

        'book_id' => function() {

            return \App\Book::all()->random()->id;},

        'rent_date' => $faker->date( 'Y-m-d'),
        'back_date' => $faker->date( 'Y-m-d'),
        //
    ];
});
