<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class MainContentSeeder extends Seeder
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
        // $files = Storage::files('public/images/main_content');

        \App\MainContent::create([
            'img_path' => $this->faker->imageUrl($width = 1440, $height = 810),//$files[array_rand($files,1)],
            'title' => $this->faker->text(20),
            'sub_title'=> $this->faker->text(40),
        ]);
    }
}
