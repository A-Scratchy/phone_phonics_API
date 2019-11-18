<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
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

        for ($i ==0; $i <5; $i++) {
            Phonic::create([
                'name' => $faker->word,
                'text' > $fkaer->word,
            ]);
        }
    }
}
