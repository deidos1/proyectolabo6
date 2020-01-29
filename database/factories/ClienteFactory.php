<?php

use Faker\Generator as Faker;

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        //
        'nombre' => $faker->sentence($nbWords = 1, $variableNbWords = true),
        'documento_identidad' => $faker->unique()->safeId,
        'email' => $faker->unique()->safeEmail,

        $table->string('documento_identidad', 15);
        $table->string('pais_origen', 20);
        $table->string('email')->unique();
        $table->string('telefono');
];
});
