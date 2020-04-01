<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'MatricNo' => $faker->unique()->randomNumber(5),
        'password' => Hash::make('1234567'),
        'Name' => $faker->firstName,
        'IC_passport' => $faker->randomNumber(5),
        'Kuliyyah' => 'ICT',
        'Level' => $faker->numberBetween(1,4),
        'Address' => $faker->address,
        'Postcode' => $faker->Postcode,
        'City' => $faker->city,
        'State'=> $faker->state,
        'PhoneNo' => $faker->phoneNumber,
        'Email' => $faker->email,     
    ];
});
