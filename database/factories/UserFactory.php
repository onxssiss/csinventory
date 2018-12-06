<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email' => $faker->unique()->userName,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Warehouse::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(2) . ' warehouse',
        'code' => 'WH-'.$faker->ean8,
        'location' => $faker->address,
    ];
});

$factory->define(App\Models\Supplier::class, function (Faker $faker) {
    return [
        'name' => $faker->company . ' ' . $faker->companySuffix,
        'email' => $faker->companyEmail,
        'address' => $faker->address,
        'telephone' => $faker->e164PhoneNumber,
    ];
});

$factory->define(App\Models\Customer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'telephone' => $faker->e164PhoneNumber,
        'address1' => $faker->address,
        'address2' => $faker->address,
    ];
});
