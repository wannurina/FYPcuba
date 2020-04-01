<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Staff;
use Faker\Generator as Faker;

$factory->define(Staff::class, function (Faker $faker) {
    return [
        'StaffNo' => $faker->unique()->randomNumber(4),
        'password' => '1234567',
        'Name' => $faker->firstName,
        'IC' => $faker->randomNumber(5),
        'Address' => $faker->address,
        'Postcode' => $faker->Postcode,
        'City' => $faker->city,
        'Dept' => 'ICT',
        'PhoneNo' => $faker->phoneNumber,
        'Email' => $faker->email,
    ];
});