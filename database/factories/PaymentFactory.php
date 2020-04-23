<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Model;
use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'cust_id' => function() {

            return Customer::all()->random()->id;},
        'value' => $faker->numerify(10),
        'pay_date' => $faker->date( 'Y-m-d', True)

        //
    ];
});
