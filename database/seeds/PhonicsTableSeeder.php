<?php

use App\Phonic;
use Illuminate\Database\Seeder;

class PhonicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Phonic::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i <5; $i++) {
            Phonic::create([
                'name' => $faker->word,
                'text' => $faker->word,
                'imageURL' => $faker->imageUrl,
                'phase' => $faker->numberBetween(10,20),
                'phonic' => $faker->randomLetter,
                'text' => $faker->word,
            ]);
        }
    }
}
