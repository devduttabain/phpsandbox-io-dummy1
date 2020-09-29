<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Resource;

$factory->define(Resource::class, function (Faker $faker) {
    $userIds = App\User::select('id')->get()->pluck('id')->toArray();
    array_push($userIds,"all");
    return [
        'name' => $faker->unique()->buildingNumber,
        'user_id' => $faker->randomElement($userIds),
    ];
});