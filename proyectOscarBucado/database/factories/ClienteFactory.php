<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
       
        'codcliente'=>$faker->unique()->bothify('??##'),
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'fecha_nacimiento'=>$faker->dateTimeBetween('-40 years','-16 years'),
        'ciudad'=>$faker->city,
        'telefono'=>$faker->phoneNumber,
        'calle'=>$faker->streetName,
        'genero'=>$faker->randomElement(['M','F'])
            
    ];
});
