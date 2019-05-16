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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(\App\Components\Contacts\Models\ContactCategory::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->words(3, true),
        'type' => $faker->randomElement(\App\Components\Contacts\Enums\ContactCategoryTypes::values())
    ];
});
