<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Empleado;
use Faker\Generator as Faker;

$factory->define(Empleado::class, function (Faker $faker) {
    return [
        'codempleado'=>$faker->unique()->bothify('?#?##?'),
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'fecha_nacimiento'=>$faker->dateTimeBetween('-40 years','-16 years'),
        'email'=> $faker->email,
        'genero'=>$faker->randomElement(['M','F'])
    ];
});
