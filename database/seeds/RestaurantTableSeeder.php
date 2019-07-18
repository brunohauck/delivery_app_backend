<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,20) as $index) {
            DB::table('restaurants')->insert([
                'name' => $faker->company,
                'type' => $faker->sentence($nbWords = 4, $variableNbWords = true),
                'phone' => $faker->isbn13,
                'cellphone' => $faker->isbn13,
                'whatsup' => '333333',
                'img_url' => 'https://freelogo-assets.s3.amazonaws.com/sites/all/themes/freelogoservices/images/smalllogorestaurant1.jpg',
                'address' => $faker->address,
                'lat' => $faker->isbn13,
                'lng' => $faker->isbn13,
            ]);

        }
    }
}
