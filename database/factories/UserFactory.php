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
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Empresa::class, function (Faker $faker) {

    return [
        'nombreEmpresa' => $faker->sentence(5),
        'nitEmpresa' => $faker->creditCardNumber(),
        'numeroAutorizacion' => $faker->creditCardNumber(),
        'fechaFundacion' => $faker->date($format = 'Y-m-d', $max = 'now')
    ];
});

$factory->define(App\Bus::class, function (Faker $faker) {

    return [
        'matricula' => $faker->swiftBicNumber(1),
        'cantidadAsiento' => $faker->numberBetween($min = 1, $max = 120),
        'cantidadPiso' => $faker->numberBetween($min = 1, $max = 2),
        'numeroCarril' => $faker->numberBetween($min = 1, $max = 30),
        'observacion' => $faker->text(80),
        'fotoInterna' => $faker->text(80),
        'fotoExterna' => $faker->text(80),
        'id_Empresa' => $faker->numberBetween($min = 1, $max = 80)
        
    ];
});

$factory->define(App\TipoBus::class, function (Faker $faker) {

    return [
        'nombretipoBus' => $faker->sentence(22)
    ];
});