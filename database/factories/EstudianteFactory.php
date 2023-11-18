<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Estudiante;
use Faker\Generator as Faker;

$factory->define(Estudiante::class, function (Faker $faker) {
    return [
        'cui_pasaporte' => $faker->unique()->randomNumber(13),
        'nombres_completos' => $faker->name,
        'apellidos_completos' => $faker->lastName,
        'nov' => $faker->randomNumber(10),
        'correo' => $faker->email,
        'fecha_nacimiento' => $faker->date,
        'sexo' => $faker->randomElement(['Masculino', 'Femenino']),
        'pueblo' => $faker->word,
        'estado_civil' => $faker->randomElement(['Soltero', 'Casado', 'Divorciado']),
        'direccion' => $faker->address,
        'establecimiento' => $faker->sentence,
        'mano_escribe' => $faker->randomElement(['Derecha', 'Izquierda']),
        'discapacidad' => $faker->word,
        'celular' => $faker->randomNumber(8),
        'telefono_casa' => $faker->randomNumber(8),
        'drive_dpi' => $faker->sentence,
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
