<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/
use Faker\Factory;

/** @var \Faker\Generator $factory */
$faker = Factory::create('ko_KR');


$factory->define(App\User::class, function () use ($faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function () use ($faker) {
    // storage/public/images 디렉토리에 있는 파일 목록을 가져옵니다.
    // $files = Storage::files('public/images');

    return [
        'img_path' => $this->faker->imageUrl($width = 720, $height = 480),
        'title' => $this->faker->title(),
        'content' => $this->faker->text(),
    ];
});
