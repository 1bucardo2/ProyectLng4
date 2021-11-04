<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proveedor;
use Faker\Generator as Faker;

$factory->define(Proveedor::class, function (Faker $faker) {
    return [
        'codproveedor'=>$faker->unique()->bothify('??#?#'),
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'fecha_nacimiento'=>$faker->dateTimeBetween('-40 years','-16 years'),
        'telefono'=>$faker->phoneNumber,
        'ciudad'=>$faker->city,
        'email'=> $faker->email,
        'genero'=>$faker->randomElement(['M','F'])
    ];
});
