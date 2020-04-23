<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return array(
       'firstname' => $faker->sentence(3, true),
       'lastname' => $faker->sentence(3, True),
        'adres' => $faker->words(10, true),
        'email' => $faker->email,
        'phone' => $faker->phoneNumber
    );
});
