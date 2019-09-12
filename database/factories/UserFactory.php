<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Role;
use App\User;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Faker\Provider\ro_RO\PhoneNumber as FakerPhone;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {

    $roleId = Role::where('name', '=', Config::get('constants.db.roles.customer'))->first();
    return [
        'name' => $faker->firstName,
        'role_id' => $roleId,
        'surname' => $faker->LastName,
        'email' => $faker->unique()->freeEmail,
        'email_verified_at' => now(),
        'password' => $faker->password(8, 20),
        'birthday' => $faker->dateTimeBetween('-70 years', '-18 years')->format('Y-m-d'),
        'phone' => FakerPhone::tollFreePhoneNumber(),
        'remember_token' => Str::random(10)
    ];
});















