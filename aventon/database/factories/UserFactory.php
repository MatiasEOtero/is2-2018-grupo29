<?php



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

$factory->define(App\Usuario::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'apellido' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'fechanacimiento' =>$faker->date(),
        'password' => $password ?: $password = bcrypt('secret'),
        'calificacion' => $faker->numerify(0),
        'cuenta' => $faker->numberBetween(),
        'deudapenalizado' => $faker->boolean,
        'deudacalificacion' => $faker->boolean,
        'baja' => $faker->boolean,

    ];

});
