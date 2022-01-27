<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'name' => $faker -> name(),
        'descrizione' => $faker -> word(),
        'data inizio'=> $faker -> date(),
        'data fine'=> $faker -> date()
    ];
});
