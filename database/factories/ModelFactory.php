<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\SellOffer::class, function (Faker\Generator $faker) {

    $result = DB::table('selloffers')->truncate();

    //Find User
    $result = DB::table('users')->where('first_name', 'Adnan')->first();
    $user_id = $result->id;

    //constructing images Array
    $images = [
        $faker->imageUrl(),
        $faker->imageUrl()
    ];
    $color = $faker->colorName;
    $min_qty = ['value' => $faker->randomNumber(), 'unit' => 'ton'];

    $supply_ability = ['value' => $faker->numberBetween(5000, 10000), 'unit' => 'ton'];
    return [
        'user_id' => $user_id,
        'title' => 'I want to sell ' . $color . ' BOX related to Agriculture',
        'description' => $faker->text,
        'images' => json_encode($images),
        'keywords' => $color . ', Box',
        'fob_min' => $faker->numberBetween(1, 10),
        'fob_max' => $faker->numberBetween(100, 200),
        'supply_ability' => json_encode($supply_ability),
        'delivery' => $faker->text(20),
        'package_details' => $faker->text(30),
        'min_order_qty' => json_encode($min_qty),
        'validity_date' => $faker->dateTimeThisMonth
    ];
});