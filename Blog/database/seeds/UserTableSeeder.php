<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class UserTableSeeder extends Seeder
{
    private $faker;

    public function __construct()
    {
        /** @var Generator $factory */
        $this->faker = Factory::create('ko_KR');
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // storage/public/images 디렉토리에 있는 파일 목록을 가져옵니다.
        $files = Storage::files('public/images/users');
        $genders = ['mail', 'femail'];
        
        \App\User::create([
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'age' => rand(10,30),
            'sex' => $this->faker->randomElement($genders),
            'profile_image' => $files[array_rand($files,1)],
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10),
        ]);
    }
}
